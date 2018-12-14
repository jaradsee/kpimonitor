<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Typekmdocs */

$this->title = 'Update Typekmdocs: ' . $model->KMDOCS_ID;
$this->params['breadcrumbs'][] = ['label' => 'Typekmdocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KMDOCS_ID, 'url' => ['view', 'id' => $model->KMDOCS_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="typekmdocs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
