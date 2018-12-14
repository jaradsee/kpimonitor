<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\KpiInput */

$this->title = $model->KPI_NAME;
$this->params['breadcrumbs'][] = ['label' => 'Kpi Inputs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-input-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->KPI_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->KPI_ID], [
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
            'KPI_ID',
            'KPI_NAME',
            'KPI_TEMPLATE',
            'STRATEGIC',
            'ISSUES',
            'GOAL',
            'TARGET',
            'RESULT',
            'SUCESS',
            'KPI',
            'DATE_RECORD',
            'BUD_YEAR',
            'PROJECT:ntext',
            'OWNER',
            'Created_by',
            'Updated_by',
        ],
    ]) ?>

</div>
