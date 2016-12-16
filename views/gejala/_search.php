<?php

use macgyer\yii2materializecss\lib\Html;
use macgyer\yii2materializecss\widgets\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GejalaSearch */
/* @var $form macgyer\yii2materializecss\widgets\form\ActiveForm */
?>

<div class="gejala-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_gejala') ?>

    <?= $form->field($model, 'nm_gejala') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
