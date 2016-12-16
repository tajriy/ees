<?php

use macgyer\yii2materializecss\lib\Html;
use macgyer\yii2materializecss\widgets\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GejalaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gejala';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gejala-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gejala', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_gejala',
            'nm_gejala',

            ['class' => 'macgyer\yii2materializecss\widgets\grid\ActionColumn'],
        ],
    ]); ?>
</div>
