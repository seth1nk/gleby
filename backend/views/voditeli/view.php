<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Voditeli $model */

$this->title = $model->Код_водителя;
$this->params['breadcrumbs'][] = ['label' => 'Voditelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="voditeli-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'Код_водителя' => $model->Код_водителя], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'Код_водителя' => $model->Код_водителя], [
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
            'Код_водителя',
            'ФИО_водителя',
            'N_паспорта',
            'Место_прописки',
            'Телефон',
        ],
    ]) ?>

</div>
