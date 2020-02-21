<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Persona */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="persona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_persona')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
