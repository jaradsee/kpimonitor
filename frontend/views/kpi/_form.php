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
use frontend\models\Goal;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kpi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kpi_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kpi_template')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'stratetgic')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Stratetgic::find()->all(), 'STRAT_ID', 'STRAT_NAME'),
        'options' => ['placeholder' => 'เลือกยุทธศาสตร์ ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?=
    $form->field($model, 'issues')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Issues::find()->all(), 'ISSUES_ID', 'ISSUES_NAME'),
        'options' => ['placeholder' => 'เลือกเด็นยุทธศาสตร์ยุทธศาสตร์ ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    
    <?=
    $form->field($model, 'goal')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Goal::find()->all(), 'GOAL_ID', 'GOAL_NAME'),
        'options' => ['placeholder' => 'เลือกเป้าประสงค์ ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'target')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sucess')->textInput() ?>

    <?= $form->field($model, 'kpi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_record')->textInput() ?>

    <?= $form->field($model, 'bud_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Updated_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
