<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Table */

$this->title = 'Մուտքային տվյալներ';
//$this->params['breadcrumbs'][] = ['label' => 'Tables', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
