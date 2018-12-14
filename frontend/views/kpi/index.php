<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\KpiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kpis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kpi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kpi_id',
            'kpi_name',
            'kpi_template',
            'stratetgic',
            'issues',
            //'goal',
            //'target',
            //'result',
            //'sucess',
            //'kpi',
            //'date_record',
            //'bud_year',
            //'project:ntext',
            //'owner',
            //'Created_by',
            //'Updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
