<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\modeles\Hadocs;

/* @var $this yii\web\View */
/* @var $model app\models\Hadocs */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'hadocss', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hadocs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            
            'typeteamName',
            
            'typedocsName',
            'uploader:ntext',
            ['attribute'=>'covenant','value'=>$model->listDownloadFiles('covenant'),'format'=>'html'],
            ['attribute'=>'docs','value'=>$model->listDownloadFiles('docs'),'format'=>'html'],
            'upload_date',
            //'end_date',
            //'success_date',
            'create_date',
        ],
    ]) ?>

</div>
