<?php

use macgyer\yii2materializecss\lib\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Gejala */

$this->title = $model->kd_gejala;
$this->params['breadcrumbs'][] = ['label' => 'Gejala', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gejala-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kd_gejala], ['class' => 'btn']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kd_gejala], [
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
            'kd_gejala',
            'nm_gejala',
        ],
    ]) ?>

</div>
