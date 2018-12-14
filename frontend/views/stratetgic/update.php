<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Stratetgic */

$this->title = 'Update Stratetgic: ' . $model->STRAT_ID;
$this->params['breadcrumbs'][] = ['label' => 'Stratetgics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->STRAT_ID, 'url' => ['view', 'id' => $model->STRAT_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stratetgic-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
