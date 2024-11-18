<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Dispet $model */

$this->title = $model->Код_авто;
$this->params['breadcrumbs'][] = ['label' => 'Dispets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dispet-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Код_авто',
            'Время_прибытия',
            'Время_отбытия',
            'Код_водителя',
            'Путевка',
            'Товар',
        ],
    ]) ?>

</div>
