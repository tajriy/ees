<?php

use macgyer\yii2materializecss\lib\Html;
use macgyer\yii2materializecss\widgets\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gejala */
/* @var $form macgyer\yii2materializecss\widgets\form\ActiveForm */
?>

<div class="gejala-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_gejala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_gejala')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
