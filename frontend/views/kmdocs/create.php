<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kmdocs */

$this->title = 'สร้างเอกสารนำเข้าระบบ';
$this->params['breadcrumbs'][] = ['label' => 'Kmdocss', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kmdocs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>

</div>
