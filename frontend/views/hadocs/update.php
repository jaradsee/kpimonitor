<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Hadocs */

$this->title = 'ปรับปรุง/แก้ไข/เปลี่ยนแปลงเอกสาร: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Hadocss', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

?>
<div class="hadocs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>

</div>
