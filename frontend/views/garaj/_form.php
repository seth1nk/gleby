<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Garaj $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="garaj-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Тип_поломки')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Вид_запчасти')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Цена_запчасти')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Дата_начала_ремонта')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Дата_конца_ремонта')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
