<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Stratetgic */

$this->title = 'Create Stratetgic';
$this->params['breadcrumbs'][] = ['label' => 'Stratetgics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stratetgic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
