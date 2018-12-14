<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TypekmdocsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Typekmdocs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typekmdocs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Typekmdocs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'KMDOCS_ID',
            'KMDOCS_NAME',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
