<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Keykpi */

$this->title = 'Create Keykpi';
$this->params['breadcrumbs'][] = ['label' => 'Keykpis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keykpi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
