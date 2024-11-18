<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Garaj $model */

$this->title = 'Create Garaj';
$this->params['breadcrumbs'][] = ['label' => 'Garajs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="garaj-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
