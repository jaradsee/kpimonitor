<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\QuarterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quarters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quarter-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Quarter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'QUARTER_ID',
            'FISCAL_YEAR',
            'QUARTER_NAME',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
