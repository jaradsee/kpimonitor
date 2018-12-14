<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use kartik\date\DatePicker;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use frontend\models\Typeteam;
use frontend\models\Typekmdocs;

/* @var $this yii\web\View */
/* @var $model app\models\Kmdocs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="Kmdocs-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
   
<?= $form->errorSummary($model); ?>

     <?= $form->field($model, 'ref')->hiddenInput()->label(false); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?=
    $form->field($model, 'typeteam')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Typeteam::find()->all(), 'TEAM_ID', 'TEAM_NAME'),
        'options' => ['placeholder' => 'เลือกประเภททีมนำ/หน่วยงาน ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?=
    $form->field($model, 'typekmdocs')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Typekmdocs::find()->all(), 'KMDOCS_ID', 'KMDOCS_NAME'),
        'options' => ['placeholder' => 'เลือกประเภทเอกสาร ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'uploader')->textInput(['maxlength' => 255]) ?>

    <?php // $form->field($model, 'covenant')->textInput(['maxlength' => 100]) ?>
    <?= $form->field($model, 'covenant')->widget(FileInput::classname(), [
    //'options' => ['accept' => 'image/*'],
    'pluginOptions' => [
        'initialPreview'=>$model->initialPreview($model->covenant,'covenant','file'),
        'initialPreviewConfig'=>$model->initialPreview($model->covenant,'covenant','config'),
        'allowedFileExtensions'=>['pdf'],
        'showPreview' => true,
        'showCaption' => true,
        'showRemove' => true,
        'showUpload' => false
     ]
    ]); ?>

    <?php //$form->field($model, 'docs')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'docs[]')->widget(FileInput::classname(), [
    'options' => [
        //'accept' => 'image/*',
        'multiple' => true
    ],
    'pluginOptions' => [
        'initialPreview'=>$model->initialPreview($model->docs,'docs','file'),
        'initialPreviewConfig'=>$model->initialPreview($model->docs,'docs','config'),
        'allowedFileExtensions'=>['pdf','doc','docx','xls','xlsx'],
        'showPreview' => true,
        'showCaption' => true,
        'showRemove' => true,
        'showUpload' => false,
        'overwriteInitial'=>false
     ]
    ]); ?>

    <div class="row">
        <div class="col-sm-4 col-md-4">
         <?= $form->field($model, 'upload_date')->widget(
            DatePicker::className(), [
                'language' => 'th',
                 'options' => ['placeholder' => 'Select issue date ...'],
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
        ]);?>
        </div> 
        
    </div>

    <div class="form-group">
        <?= Html::submitButton('<i class="glyphicon glyphicon-plus"></i> '.($model->isNewRecord ? 'บันทึก' : 'Update'), ['class' => ($model->isNewRecord ? 'btn btn-success' : 'btn btn-primary').' btn-lg btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
