<?php

use macgyer\yii2materializecss\lib\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penyakit */

$this->title = $model->kd_penyakit;
$this->params['breadcrumbs'][] = ['label' => 'Penyakit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kd_penyakit], ['class' => 'btn']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kd_penyakit], [
            'class' => 'btn',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_penyakit',
            'nm_penyakit',
            'penyebab',
            'keterangan:ntext',
            'photo:ntext',
            'solusi:ntext',
        ],
    ]) ?>

</div>
