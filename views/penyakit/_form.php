<?php

use macgyer\yii2materializecss\lib\Html;
use macgyer\yii2materializecss\widgets\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penyakit */
/* @var $form macgyer\yii2materializecss\widgets\form\ActiveForm */
?>

<div class="penyakit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyebab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solusi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
