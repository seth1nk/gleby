<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Marshrut $model */

$this->title = 'Update Marshrut: ' . $model->Код_маршрута;
$this->params['breadcrumbs'][] = ['label' => 'Marshruts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Код_маршрута, 'url' => ['view', 'Код_маршрута' => $model->Код_маршрута]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marshrut-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
