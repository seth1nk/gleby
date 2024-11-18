<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Garaj $model */

$this->title = 'Update Garaj: ' . $model->Код_авто;
$this->params['breadcrumbs'][] = ['label' => 'Garajs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Код_авто, 'url' => ['view', 'Код_авто' => $model->Код_авто]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="garaj-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
