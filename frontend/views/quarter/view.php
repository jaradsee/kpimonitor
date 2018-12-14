<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Quarter */

$this->title = $model->QUARTER_ID;
$this->params['breadcrumbs'][] = ['label' => 'Quarters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quarter-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->QUARTER_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->QUARTER_ID], [
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
            'QUARTER_ID',
            'FISCAL_YEAR',
            'QUARTER_NAME',
        ],
    ]) ?>

</div>
