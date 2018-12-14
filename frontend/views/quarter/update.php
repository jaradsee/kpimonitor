<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Quarter */

$this->title = 'Update Quarter: ' . $model->QUARTER_ID;
$this->params['breadcrumbs'][] = ['label' => 'Quarters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->QUARTER_ID, 'url' => ['view', 'id' => $model->QUARTER_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quarter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
