<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Quarter */

$this->title = 'Create Quarter';
$this->params['breadcrumbs'][] = ['label' => 'Quarters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quarter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
