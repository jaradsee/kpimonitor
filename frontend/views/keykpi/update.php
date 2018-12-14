<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Keykpi */

$this->title = 'Update Keykpi: ' . $model->keyk_id;
$this->params['breadcrumbs'][] = ['label' => 'Keykpis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->keyk_id, 'url' => ['view', 'id' => $model->keyk_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keykpi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
