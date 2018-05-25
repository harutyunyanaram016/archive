<?php

namespace app\controllers;

use Yii;
use app\models\Table;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use app\models\LoginForm;
use yii\web\UploadedFile;
use app\models\UploadForm;
use yii\data\Pagination;

/**
 * TableController implements the CRUD actions for Table model.
 */
class TableController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update'],
                'rules' => [
                    // deny all POST requests
                    [
                        'allow' => true,
                        'verbs' => ['POST']
                    ],
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // everything else is denied
                ],
            ],
        ];

    }

    /**
     * Lists all Table models.
     * @return mixed
     */

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionIndex()
    {


        $query = Table::find();
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>10]);
        if(isset($_GET['sort'])){
            $dataProvider = $query->orderBy($_GET['sort'])->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
//            $dataProvider = Table::find()->orderBy($_GET['sort'])->all();
        }else{
            $dataProvider = $query->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
//            $dataProvider = Table::find()->all();
        }


        $table = ArrayHelper::toArray($dataProvider, [
            'app\models\Post' => [
                'id',
                'title',
                // the key name in array result => property name
                'createTime' => 'created_at',
                // the key name in array result => anonymous function
                'length' => function ($post) {
                    return strlen($post->content);
                },
            ],
        ]);

        $month = date('n');

        foreach ($table as $key => $data){
            if($data['actual_amount'] >= ($month*$data['m_pay'])){
                $table[$key]['status'] = 'paid';
            }
        }

        return $this->render('index', [
            'table' => $table,
            'pagination'=>$pagination
        ]);
    }

    /**
     * Displays a single Table model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Table model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Table();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Table model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Table model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Table model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Table the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Table::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionImport(){
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');

            if(!isset($model->file)){
                return $this->render('import', [
                    'model' => $model,
                    'error' =>true,
                ]);
            }
            if ($model->validate()) {
                $time = time();
                mb_internal_encoding('UTF-8');
                $model->file->saveAs('uploads/' . $model->file->baseName .$time. '.' . $model->file->extension);
                $model->file = 'uploads/' . $model->file->baseName  .$time. '.' . $model->file->extension;
                $handle = fopen($model->file, "r");
                $i=0;
                while (($fileop = fgetcsv($handle, 1000, ',')) !== false)
                {
                    $i = $i+1;
                    if($i > 1 && isset($fileop[3])) {
                        $amount = $this->filter_characters($fileop[3]);
                        if($amount != ""){
                            $account = $this->filter_characters($fileop[2]);
                            $p_date = $this->filter_characters($fileop[0]);
                            $date = str_replace('/', '-', $p_date);
                            $pay_date =  date('Y-m-d H:i:s', strtotime($date));
                            $table = Table::find()->where(['account'=>$account])->andWhere(['<','payment_date', $pay_date])->one();
                            if($table){
                                $amountTotal = $amount + $table->actual_amount;
                                $connection = Yii::$app->db;
                                $sql = 'UPDATE `table` SET actual_amount = "'.$amountTotal.'",
                                payment_date  = "'.$pay_date.'" WHERE id = '.$table->id;
                                $command = $connection->createCommand($sql);
                                $row = $command->query();
                                if(!$row){
                                    echo 'Error';
                                }
                            }
                        }
                    }

                }


            }
            return $this->redirect('/');

        }

        return $this->render('import', [
            'model' => $model,
        ]);
    }

    protected function filter_characters($str) {
        return implode('', array_filter(str_split($str), function($digit) {
            return ('.' === $digit  || is_numeric($digit) || '/' === $digit);
        }));
    }




}
