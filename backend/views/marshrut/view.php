<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Marshrut $model */

$this->title = $model->Код_маршрута;
$this->params['breadcrumbs'][] = ['label' => 'Marshruts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="marshrut-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'Код_маршрута' => $model->Код_маршрута], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'Код_маршрута' => $model->Код_маршрута], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Код_маршрута',
            'Пункт_назначения',
            'Расст_до_пункта',
        ],
    ]) ?>

</div>
