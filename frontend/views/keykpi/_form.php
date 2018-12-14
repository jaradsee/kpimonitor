<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Keykpi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keykpi-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'kpi_id')->textInput(['readonly' => true, 'value' => $_GET['kpi_id'] ]) ?>

    <?= $form->field($model, 'kpi_name')->textInput(['readonly' => true, 'value' => $_GET['kpi_name'] ]) ?>

    
    <?= $form->field($model, 'target')->textInput(['readonly' => true, 'value' => $_GET['target'] ]) ?>

    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'successkey')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'qarter')->textInput() ?>

    <?= $form->field($model, 'user_key')->textInput() ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'Created_at')->textInput() ?>

    <?= $form->field($model, 'Crearted_by')->textInput() ?>

    <?= $form->field($model, 'Updated_at')->textInput() ?>

    <?= $form->field($model, 'Updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
