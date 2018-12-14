<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\KeykpiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keykpi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'keyk_id') ?>

    <?= $form->field($model, 'kpi_id') ?>

    <?= $form->field($model, 'kpi_name') ?>

    <?= $form->field($model, 'target') ?>

    <?= $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'successkey') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'qarter') ?>

    <?php // echo $form->field($model, 'user_key') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'Created_at') ?>

    <?php // echo $form->field($model, 'Crearted_by') ?>

    <?php // echo $form->field($model, 'Updated_at') ?>

    <?php // echo $form->field($model, 'Updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
