<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Наши контакты:';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->registerCssFile('@web/css/site.css'); ?>
<div class="site-contact">
    <div class="container">
        <h1 class="text-center mb-5 contact-title"><?= Html::encode($this->title) ?></h1>

        <div class="row">
            <?php
            $contacts = [
                [
                    'image' => 'direc.jpeg',
                    'title' => 'Директор компании:',
                    'name' => 'Шмидт Александр Иванович',
                    'phone' => '+73958828688',
                    'email' => 'alexander.schmidt@vector.com',
                ],
                [
                    'image' => 'zam.jpeg',
                    'title' => 'Руководитель компании:',
                    'name' => 'Анохина Аннастасия Владимировна',
                    'phone' => '+73952323334',
                    'email' => 'anastasia.anokhina@vector.com',
                ],
                [
                    'image' => 'byx.jpeg',
                    'title' => 'Заместитель Управляющего:',
                    'name' => 'Рудаков Александр Владимирович',
                    'phone' => '+73955456764',
                    'email' => 'alexander.rudakov@vector.com',
                ],
                [
                    'image' => 'inj.jpeg',
                    'title' => 'Главный инженер:',
                    'name' => 'Сычев Пётр Юрьевич',
                    'phone' => '+73950882863',
                    'email' => 'petr.si4ev@vector.com',
                ],
                [
                    'image' => 'ilobyx.jpeg',
                    'title' => 'Главный Бухгалтер:',
                    'name' => 'Демьянчук Валерия Дмитриева',
                    'phone' => '+739567895343',
                    'email' => 'valeria.dem@vector.com',
                ],
                [
                    'image' => 'byxx.jpeg',
                    'title' => 'Бухгалтер:',
                    'name' => 'Истратова Илона Михайловна',
                    'phone' => '+739543434532',
                    'email' => 'ilona.istr@vector.com',
                ],
            ];
            ?>

            <?php foreach ($contacts as $contact): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 bg-light">
                        <img src="<?= Yii::getAlias('@web') ?>/img/<?= $contact['image'] ?>" alt="<?= $contact['title'] ?>" class="card-img-top img-fluid">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= Html::encode($contact['title']) ?></h5>
                            <ul class="list-unstyled">
                                <li><?= Html::encode($contact['name']) ?></li>
                                <li>Рабочий тел: <?= Html::encode($contact['phone']) ?></li>
                                <li>Email: <a href="mailto:<?= Html::encode($contact['email']) ?>"><?= Html::encode($contact['email']) ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>