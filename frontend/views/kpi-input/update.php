<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\KpiInput */

$this->title = 'Update Kpi Input: ' . $model->KPI_ID;
$this->params['breadcrumbs'][] = ['label' => 'Kpi Inputs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KPI_ID, 'url' => ['view', 'id' => $model->KPI_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kpi-input-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
