<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KpiInputSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kpi Inputs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-input-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kpi Input', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

     <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
                'template'=>'{create}',
                'contentOptions'=>[
                    'noWrap' => true,

                  ],
                  'buttons'=>[
                    //'class' => 'btn btn-primary btn-block',
                    'create' => function($url,$model,$key){
                        return Html::a('<button class = "btn btn-info">
                                        <i class="glyphicon glyphicon-import"></i>
                                        </button>',['keykpi/create',
                                            'kpi_id' => $model->KPI_ID,
                                            'kpi_name'=> $model->KPI_NAME,
                                            'target'=> $model->TARGET,
                                            ]);
          },
        ],
],
'KPI_ID:ntext',
'KPI_NAME:ntext',
'TARGET:ntext',
  
            //'GOAL',
            //'TARGET',
            //'RESULT',
            //'SUCESS',
            //'KPI',
            //'DATE_RECORD',
            //'BUD_YEAR',
            //'PROJECT:ntext',
            //'OWNER',
            //'Created_by',
            //'Updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
      ?>
</div>
