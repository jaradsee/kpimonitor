<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Typekmdocs */

$this->title = $model->KMDOCS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Typekmdocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typekmdocs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->KMDOCS_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->KMDOCS_ID], [
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
            'KMDOCS_ID',
            'KMDOCS_NAME',
        ],
    ]) ?>

</div>
