<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Goal */

$this->title = 'Update Goal: ' . $model->GOAL_ID;
$this->params['breadcrumbs'][] = ['label' => 'Goals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GOAL_ID, 'url' => ['view', 'id' => $model->GOAL_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="goal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
