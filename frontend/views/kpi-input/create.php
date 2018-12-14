<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\KpiInput */

$this->title = 'Create Kpi Input';
$this->params['breadcrumbs'][] = ['label' => 'Kpi Inputs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-input-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
