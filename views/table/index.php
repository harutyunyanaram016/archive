<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Աշխատանքային վահանակ';
//$this->params['breadcrumbs'][] = $this->title;

?>
<div class="table-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ավելացնել', ['create'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Վերբեռնել', ['import'], ['class' => 'btn btn-success']) ?>
    </p>

    <div id="w0" class="grid-view">
        <p class="text-right">
            <label> <input type="checkbox" id="checkbox"> Թերի վճավարծները</label>
        </p>
        <div class="content" id="content">
            <table class="table table-striped table-bordered" id="myTable"><thead>
                <tr>
                    <th >#</th>
                    <th><a href="/?sort=full_name" data-sort="full_name">ԱԱՀ</a></th>
                    <th><a href="/?sort=contract_number" data-sort="contract_number">Պայմանագրի համարը</a></th>
                    <th><a href="/?sort=amount" data-sort="amount">Գումարը</a></th>
                    <th><a href="/?sort=actual_amount" data-sort="actual_amount">Նստած գումարը</a></th>
                    <th><a href="/?sort=phone_number" data-sort="phone_number">Հեռախոսի համարը</a></th>
                    <th><a href="/?sort=account" data-sort="account">Հաշվեհամար</a></th>
                    <th><a href="/?sort=employee" data-sort="employee">Աշխատող</a></th>
                    <th class="action-column">&nbsp;</th></tr>
                </thead>
                <tbody>
                <?php foreach ($table as $data){ ?>
                    <tr data-key=<?= $data['id'] ?> class = "tr  <?php if(!isset($data['status'])){ ?>red<?php } ?><?php if($data['amount'] <= $data['actual_amount']){ ?>green<?php } ?>">
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['full_name'] ?></td>
                        <td><?= $data['contract_number'] ?></td>
                        <td><?= $data['amount'] ?></td>
                        <td><?= $data['actual_amount'] ?></td>
                        <td><?= $data['phone_number'] ?></td>
                        <td><?= $data['account'] ?></td>
                        <td><?= $data['employee'] ?></td>

                        <td>
                            <a href="/view?id=<?= $data['id'] ?>" title="Տեսնել" aria-label="View" data-pjax="0">
                                <span class="glyphicon glyphicon-eye-open"></span></a>
                            <a href="/update?id=<?= $data['id'] ?>" title="Փոփոխել" aria-label="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="/delete?id=<?= $data['id'] ?>" title="Ջնջել" aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this item?" data-method="post"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
