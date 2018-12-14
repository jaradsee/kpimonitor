<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Issues */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issues-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ISSUES_NAME')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
