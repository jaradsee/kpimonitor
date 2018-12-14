<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Keykpi */

$this->title = $model->keyk_id;
$this->params['breadcrumbs'][] = ['label' => 'Keykpis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keykpi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->keyk_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->keyk_id], [
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
            'keyk_id',
            'kpi_id',
            'kpi_name',
            'target',
            'result',
            'successkey',
            'year',
            'qarter',
            'user_key',
            'position',
            'Created_at',
            'Crearted_by',
            'Updated_at',
            'Updated_by',
        ],
    ]) ?>

</div>
