<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Tovar $model */

$this->title = $model->Код_товара;
$this->params['breadcrumbs'][] = ['label' => 'Tovars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tovar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'Код_товара' => $model->Код_товара], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'Код_товара' => $model->Код_товара], [
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
            'Код_товара',
            'Наим_товара',
            'КолBо_товара',
            'Цена_товара',
        ],
    ]) ?>

</div>
