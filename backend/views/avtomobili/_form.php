<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Avtomobili $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="avtomobili-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Регистрационный_N_авто')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Назв_авто')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Год_выпуска_авто')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Пробег')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Категория')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
