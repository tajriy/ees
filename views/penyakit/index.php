<?php

use macgyer\yii2materializecss\lib\Html;
use macgyer\yii2materializecss\widgets\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenyakitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penyakit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Penyakit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_penyakit',
            'nm_penyakit',
            'penyebab',
            'keterangan:ntext',
            'photo:ntext',
            // 'solusi:ntext',

            ['class' => 'macgyer\yii2materializecss\widgets\grid\ActionColumn'],
        ],
    ]); ?>
</div>
