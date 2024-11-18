<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AvtomobiliSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="avtomobili-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Код_авто') ?>

    <?= $form->field($model, 'Регистрационный_N_авто') ?>

    <?= $form->field($model, 'Назв_авто') ?>

    <?= $form->field($model, 'Год_выпуска_авто') ?>

    <?= $form->field($model, 'Пробег') ?>

    <?php // echo $form->field($model, 'Категория') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
