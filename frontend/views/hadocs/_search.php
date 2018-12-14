<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use frontend\models\Typeteam;
use frontend\models\Typedocs;

/* @var $this yii\web\View */
/* @var $model frontend\models\HadocsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hadocs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    
    <div class="col-xs-6 col-sm-4 col-md-4">
    <?=
    $form->field($model, 'typedocs')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Typedocs::find()->all(), 'DOCS_ID', 'DOCS_NAME'),
        'options' => ['placeholder' => 'เลือกประเภทเอกสาร ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4">
    <?=
    $form->field($model, 'typeteam')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Typeteam::find()->all(), 'TEAM_ID', 'TEAM_NAME'),
        'options' => ['placeholder' => 'เลือกประเภททีม/หน่วยงาน ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    </div>
    <br>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('สร้างเอกสารนำเข้าระบบ', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
        

    

    <?php ActiveForm::end(); ?>




<br>