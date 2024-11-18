<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Marshrut $model */

$this->title = 'Создать Маршрут';
$this->params['breadcrumbs'][] = ['label' => 'Marshruts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marshrut-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
