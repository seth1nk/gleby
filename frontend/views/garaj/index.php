<?php

use common\models\Garaj;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\GarajSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Гараж';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="garaj-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Код_авто',
            'Тип_поломки',
            'Вид_запчасти',
            'Цена_запчасти',
            'Дата_начала_ремонта',
            //'Дата_конца_ремонта',
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, Garaj $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Код_авто' => $model->Код_авто]);
                 }
            ],
        ],
    ]); ?>


</div>
