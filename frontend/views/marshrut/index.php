<?php

use common\models\Marshrut;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\MarshrutSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Маршрут';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marshrut-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Код_маршрута',
            'Пункт_назначения',
            'Расст_до_пункта',
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, Marshrut $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Код_маршрута' => $model->Код_маршрута]);
                 }
            ],
        ],
    ]); ?>


</div>
