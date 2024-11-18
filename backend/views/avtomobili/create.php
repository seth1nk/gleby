<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Avtomobili $model */

$this->title = 'Добавить Автомобиль';
$this->params['breadcrumbs'][] = ['label' => 'Avtomobilis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avtomobili-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
