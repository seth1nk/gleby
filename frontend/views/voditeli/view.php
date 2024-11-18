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
