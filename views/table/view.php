<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Table */

$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Tables', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('թարմացնել', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ջնջել', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'full_name',
            'contract_number',
            'amount',
            'actual_amount',
            'phone_number',
            'account',
            'employee',
        ],
    ]) ?>

</div>
