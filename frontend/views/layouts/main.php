<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php $this->registerCssFile('@web/css/site.css'); ?> <!-- Подключение CSS-файла -->
</head>
<body class="d-flex flex-column h-100 light-gray-bg">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/img/logo.png', ['alt' => Yii::$app->name, 'style' => 'height: 50px; margin-top: -15px;']), // Увеличенный размер логотипа и отрицательный margin-top
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-dark bg-maroon fixed-top navbar-custom', // Добавлен класс navbar-custom
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index'], 'options' => ['class' => 'bold-white-text']],
        ['label' => 'О нас', 'url' => ['/site/about'], 'options' => ['class' => 'bold-white-text']],
        ['label' => 'Контакты', 'url' => ['/site/contact'], 'options' => ['class' => 'bold-white-text']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
    }
    if (!Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Автомобили', 'url' => ['/site/signup']];
    }
    if (!Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Товар', 'url' => ['/site/signup']];
    }
    if (!Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Диспетчерская', 'url' => ['/site/signup']];
    }
    if (!Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Гараж', 'url' => ['/site/signup']];
    }
    if (!Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Маршрут', 'url' => ['/site/signup']];
    }
    if (!Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Водители', 'url' => ['/site/signup']];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-lg-0'],
        'items' => $menuItems,
    ]);
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div', Html::a('Войти', ['/site/login'], ['class' => ['btn btn-oval btn-outline-light']]), ['class' => ['d-flex']]);
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Выйти (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-outline-light']
            )
            . Html::endForm();
    }
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();