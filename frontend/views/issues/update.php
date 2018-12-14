<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Issues */

$this->title = 'Update Issues: ' . $model->ISSUES_ID;
$this->params['breadcrumbs'][] = ['label' => 'Issues', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ISSUES_ID, 'url' => ['view', 'id' => $model->ISSUES_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="issues-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
