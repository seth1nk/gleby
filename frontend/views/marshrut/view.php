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


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Код_маршрута',
            'Пункт_назначения',
            'Расст_до_пункта',
        ],
    ]) ?>

</div>
