<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\modeles\Hadocs;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use frontend\models\Typeteam;
use frontend\models\Typedocs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HadocsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ระบบเอกสารพัฒนาคุณภาพ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hadocs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
             'upload_date',
             //'end_date',
            'uploader:ntext',
            ['attribute'=>'covenant','value'=>function($model){return $model->listDownloadFiles('covenant');},'format'=>'html'],
            ['attribute'=>'docs','value'=>function($model){return $model->listDownloadFiles('docs');},'format'=>'html'],
            // 'docs:ntext',
            [
                'attribute' => 'typedocs',
                'value' => 'typedocsName',
                'filter' => Html::activeDropDownList($searchModel, 'typedocs', ArrayHelper::map(Typedocs::find()->asArray()->all(), 'DOCS_ID', 'DOCS_NAME'),['class'=>'form-control','prompt' => '--กรุณาเลือกประเภทเอกสาร--']),
            ],
            [
                'attribute' => 'typeteam',
                'value' => 'typeteamName',
                'filter' => Html::activeDropDownList($searchModel, 'typeteam', ArrayHelper::map(Typedocs::find()->asArray()->all(), 'TEAM_ID', 'TEAM_NAME'),['class'=>'form-control','prompt' => '--กรุณาเลือกทีมนำ/หน่วยงาน--']),
            ],
            // 'success_date',
            //'create_date:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
