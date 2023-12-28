<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Quiz $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="quiz-form" style="width:600px;">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->dropDownList(
            [1 => 'Active', 0 => 'Not Active'], // Options: value => display text
            ['prompt' => 'Select Status', 'style' => 'width: 200px;' ] // Optional: prompt message
        ) ?>


    <?= $form->field($model, 'no_questions')->textInput(['style' => 'width: 200px;']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
