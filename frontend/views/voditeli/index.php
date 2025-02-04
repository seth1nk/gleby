<?php

use common\models\Voditeli;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\VoditeliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Водители';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="voditeli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Код_водителя',
            'ФИО_водителя',
            'N_паспорта',
            'Место_прописки',
            'Телефон',
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, Voditeli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Код_водителя' => $model->Код_водителя]);
                 }
            ],
        ],
    ]); ?>


</div>
