<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\widgets\FileInput;
use kartik\date\DatePicker;
use frontend\models\Stratetgic;
use frontend\models\Issues;

/* @var $this yii\web\View */
/* @var $model frontend\models\KpiInput */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-input-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'KPI_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KPI_TEMPLATE')->textInput(['maxlength' => true]) ?>



    <?=
    $form->field($model, 'STRATEGIC')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Stratetgic::find()->all(), 'STRAT_ID', 'STRAT_NAME'),
        'options' => ['placeholder' => 'เลือกยุทธศาสตร์ ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    
    <?=
    $form->field($model, 'ISSUES')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Issues::find()->all(), 'ISSUES_ID', 'ISSUES_NAME'),
        'options' => ['placeholder' => 'เลือกยุทธศาสตร์ ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'GOAL')->textInput() ?>

    <?= $form->field($model, 'TARGET')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RESULT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SUCESS')->textInput() ?>

    <?= $form->field($model, 'KPI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATE_RECORD')->textInput() ?>
    <?=
    $form->field($model, 'DATE_RECORD')->widget(
            DatePicker::className(), [
        'language' => 'th',
        'options' => ['placeholder' => 'Select issue date ...'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);
    ?>

    <?= $form->field($model, 'BUD_YEAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROJECT')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'OWNER')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Updated_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
