<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Budyear */

$this->title = 'Create Budyear';
$this->params['breadcrumbs'][] = ['label' => 'Budyears', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="budyear-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
