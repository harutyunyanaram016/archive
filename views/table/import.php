<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model app\models\UploadForm */

$this->title = 'Վերբեռնել բանկի քաղվածքը';
//$this->params['breadcrumbs'][] = $this->title;

?>
<div class="table-index">

    <h2><?= Html::encode($this->title) ?></h2>

    <?php  $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php
    if(isset($error)){ ?>
        <span class="red">Դուք մոռացել եք բանկի քաղվածքը ընտրել</span>
        <?php
    }
    ?>
    <?= $form->field($model, 'file')->fileInput()->label('') ?>

    <button class="btn btn-success">Վերբեռնել</button>

    <?php ActiveForm::end(); ?>


</div>
