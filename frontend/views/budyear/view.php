<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Budyear */

$this->title = $model->BUDYEAR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Budyears', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="budyear-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->BUDYEAR_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->BUDYEAR_ID], [
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
            'BUDYEAR_ID',
            'BUDYEAR_NAME',
        ],
    ]) ?>

</div>
