<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Dispet $model */

$this->title = 'Create Dispet';
$this->params['breadcrumbs'][] = ['label' => 'Dispets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dispet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
