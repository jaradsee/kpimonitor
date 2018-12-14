<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KpiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kpi_id') ?>

    <?= $form->field($model, 'kpi_name') ?>

    <?= $form->field($model, 'kpi_template') ?>

    <?= $form->field($model, 'stratetgic') ?>

    <?= $form->field($model, 'issues') ?>

    <?php // echo $form->field($model, 'goal') ?>

    <?php // echo $form->field($model, 'target') ?>

    <?php // echo $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'sucess') ?>

    <?php // echo $form->field($model, 'kpi') ?>

    <?php // echo $form->field($model, 'date_record') ?>

    <?php // echo $form->field($model, 'bud_year') ?>

    <?php // echo $form->field($model, 'project') ?>

    <?php // echo $form->field($model, 'owner') ?>

    <?php // echo $form->field($model, 'Created_by') ?>

    <?php // echo $form->field($model, 'Updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
