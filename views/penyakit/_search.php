<?php

use macgyer\yii2materializecss\lib\Html;
use macgyer\yii2materializecss\widgets\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenyakitSearch */
/* @var $form macgyer\yii2materializecss\widgets\form\ActiveForm */
?>

<div class="penyakit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_penyakit') ?>

    <?= $form->field($model, 'nm_penyakit') ?>

    <?= $form->field($model, 'penyebab') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'solusi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
