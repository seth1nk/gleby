<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Marshrut $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="marshrut-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Пункт_назначения')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Расст_до_пункта')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
