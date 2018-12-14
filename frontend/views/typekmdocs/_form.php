<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Typekmdocs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="typekmdocs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KMDOCS_NAME')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
