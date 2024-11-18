<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Tovar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tovar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Наим_товара')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'КолBо_товара')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Цена_товара')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
