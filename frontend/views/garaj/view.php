<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Garaj $model */

$this->title = $model->Код_авто;
$this->params['breadcrumbs'][] = ['label' => 'Garajs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="garaj-view">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Код_авто',
            'Тип_поломки',
            'Вид_запчасти',
            'Цена_запчасти',
            'Дата_начала_ремонта',
            'Дата_конца_ремонта',
        ],
    ]) ?>

</div>
