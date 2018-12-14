<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Goal */

$this->title = $model->GOAL_ID;
$this->params['breadcrumbs'][] = ['label' => 'Goals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->GOAL_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->GOAL_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'GOAL_ID',
            'GOAL_NAME:ntext',
        ],
    ]) ?>

</div>
