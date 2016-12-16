<?php

use macgyer\yii2materializecss\lib\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rules */

$this->title = $model->kd_rules;
$this->params['breadcrumbs'][] = ['label' => 'Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rules-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kd_rules], ['class' => 'btn']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kd_rules], [
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
            'kd_rules',
            'kd_penyakit',
            'kd_gejala',
        ],
    ]) ?>

</div>
