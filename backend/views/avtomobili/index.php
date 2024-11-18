<?php

use common\models\Avtomobili;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\AvtomobiliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Автомобили';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avtomobili-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить автомобиль', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Код_авто',
            'Регистрационный_N_авто',
            'Назв_авто',
            'Год_выпуска_авто',
            'Пробег',
            //'Категория',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Avtomobili $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Код_авто' => $model->Код_авто]);
                 }
            ],
        ],
    ]); ?>


</div>
