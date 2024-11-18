<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Avtomobili $model */

$this->title = 'Update Avtomobili: ' . $model->Код_авто;
$this->params['breadcrumbs'][] = ['label' => 'Avtomobilis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Код_авто, 'url' => ['view', 'Код_авто' => $model->Код_авто]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="avtomobili-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
