<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Budyear */

$this->title = 'Update Budyear: ' . $model->BUDYEAR_ID;
$this->params['breadcrumbs'][] = ['label' => 'Budyears', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BUDYEAR_ID, 'url' => ['view', 'id' => $model->BUDYEAR_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="budyear-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
