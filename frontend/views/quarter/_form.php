<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Quarter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quarter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FISCAL_YEAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QUARTER_NAME')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
