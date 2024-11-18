<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\VoditeliSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="voditeli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Код_водителя') ?>

    <?= $form->field($model, 'ФИО_водителя') ?>

    <?= $form->field($model, 'N_паспорта') ?>

    <?= $form->field($model, 'Место_прописки') ?>

    <?= $form->field($model, 'Телефон') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
