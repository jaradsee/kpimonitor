<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\modeles\Kmdocs;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use frontend\models\Typeteam;
use frontend\models\Typekmdocs;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KmdocsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'คลังความรู้พัฒนาคุณภาพKM';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kmdocs-index">

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
                'attribute' => 'typekmdocs',
                'value' => 'typekmdocsName',
                'filter' => Html::activeDropDownList($searchModel, 'typekmdocs', ArrayHelper::map(Typekmdocs::find()->asArray()->all(), 'KMDOCS_ID', 'KMDOCS_NAME'),['class'=>'form-control','prompt' => '--กรุณาเลือกประเภทเอกสาร--']),
            ],
            [
                'attribute' => 'typeteam',
                'value' => 'typeteamName',
                'filter' => Html::activeDropDownList($searchModel, 'typeteam', ArrayHelper::map(Typeteam::find()->asArray()->all(), 'TEAM_ID', 'TEAM_NAME'),['class'=>'form-control','prompt' => '--กรุณาเลือกทีมนำ/หน่วยงาน--']),
            ],
            // 'success_date',
            //'create_date:date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
