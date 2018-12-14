<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modelsBudyearSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Budyears';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="budyear-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Budyear', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'BUDYEAR_ID',
            'BUDYEAR_NAME',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
