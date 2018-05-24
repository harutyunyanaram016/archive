<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\UploadForm */

$this->title = 'Վերբեռնել CSV';
//$this->params['breadcrumbs'][] = $this->title;

?>
<div class="table-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php  $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php
    if(isset($error)){ ?>
        <span class="red">Դուք մոռացել եք CSV վերբեռնել</span>
        <?php
    }
    ?>
    <?= $form->field($model, 'file')->fileInput()->label('') ?>

    <button class="btn btn-success">Վերբեռնել</button>

    <?php ActiveForm::end(); ?>


</div>
