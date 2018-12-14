<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Typekmdocs */

$this->title = 'Create Typekmdocs';
$this->params['breadcrumbs'][] = ['label' => 'Typekmdocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typekmdocs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
