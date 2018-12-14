<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KpiInputSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-input-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'KPI_ID') ?>

    <?= $form->field($model, 'KPI_NAME') ?>

    <?= $form->field($model, 'KPI_TEMPLATE') ?>

    <?= $form->field($model, 'STRATEGIC') ?>

    <?= $form->field($model, 'ISSUES') ?>

    <?php // echo $form->field($model, 'GOAL') ?>

    <?php // echo $form->field($model, 'TARGET') ?>

    <?php // echo $form->field($model, 'RESULT') ?>

    <?php // echo $form->field($model, 'SUCESS') ?>

    <?php // echo $form->field($model, 'KPI') ?>

    <?php // echo $form->field($model, 'DATE_RECORD') ?>

    <?php // echo $form->field($model, 'BUD_YEAR') ?>

    <?php // echo $form->field($model, 'PROJECT') ?>

    <?php // echo $form->field($model, 'OWNER') ?>

    <?php // echo $form->field($model, 'Created_by') ?>

    <?php // echo $form->field($model, 'Updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
