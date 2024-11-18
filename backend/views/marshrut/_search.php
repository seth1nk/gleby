<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\MarshrutSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="marshrut-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Код_маршрута') ?>

    <?= $form->field($model, 'Пункт_назначения') ?>

    <?= $form->field($model, 'Расст_до_пункта') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
