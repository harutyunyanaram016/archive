<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Table */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="table-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'contract_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'actual_amount')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'account')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'payment_date')->textInput(['maxlength' => true,'id'=>'pay-timePicer']) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'work_date')->textInput(['maxlength' => true,'id'=>'work-timePicer']) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'employee')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'm_pay')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group text-center">
        <?= Html::submitButton('Պահպանել', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>

        $('#pay-timePicer').datetimepicker({
            format: "Y-m-d H:i"
        });

        $('#work-timePicer').datetimepicker({
            format: "Y-m-d H:i"
        });

</script>
