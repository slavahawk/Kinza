<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\models\Cart;
use yii\helpers\Html;
use frontend\assets\MainAsset;
use yii\helpers\Url;

$this->registerLinkTag(['rel' => 'icon', 'sizes' => '16x16',  'href' => Url::to(['/favicon.svg'])]);
$this->registerLinkTag(['rel' => 'icon', 'sizes' => '32x32',  'href' => Url::to(['/favicon32.svg'])]);
$this->registerLinkTag(['rel' => 'icon', 'sizes' => '64x64',  'href' => Url::to(['/favicon64.svg'])]);
$this->registerLinkTag(['rel' => 'icon', 'sizes' => '194х194', 'href' => Url::to(['/favicon-194x194.png'])]);
$this->registerLinkTag(['rel' => 'icon', 'sizes' => '192х192', 'href' => Url::to(['/android-chrome-192x192.png'])]);
$this->registerLinkTag(['rel' => 'mask-icon', 'color' => '#ffffff', 'href' => Url::to(['/safari-pinned-tab.svg'])]);
$this->registerLinkTag(['rel' => 'apple-touch-icon', 'sizes' => '180х180', 'href' => Url::to(['/apple-touch-icon.png'])]);
$this->registerLinkTag(['rel' => 'apple-touch-icon-precomposed', 'sizes' => '180х180', 'href' => Url::to(['/apple-touch-icon-precomposed.png'])]);
MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a92d3a3d23.js" crossorigin="anonymous"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <header class="header">
        <div class="header__content">
            <div class="header__content-logo">
                <div class="header__burger">
                    <span></span>
                </div>
                <a href="/">
                    <picture>
                        <source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/logo.webp" type="image/webp"><img
                            src="<?= Yii::getAlias('@imgFrontEnd'); ?>/logo.png" alt="" />
                    </picture>
                </a>
            </div>
            <div class="header__content-menu">
                <ul>
                    <li>
                        <a href="<?= Url::to(['menu/index']); ?>">Меню</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/delivery']); ?>">Доставка</a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/contact']); ?>">Контакты</a>
                    </li>
                    <li class="aclo__btn">
                        <a href="<?= Url::to(['menu/alcohol', 'bar' => '1']) ?>">Барное меню</a>
                    </li>
                </ul>
            </div>

            <div class="header__content-basket">
                <a href="/<?= Url::to('cart/index')?>" class="basket">
                    <i class="fas fa-shopping-basket"></i>
                    <div class="count">
                        <div class="count-item" id="cart-count"><?= Cart::countItems(); ?></div>
                    </div>
                    <p class="basket__text">Корзина</p>
                </a>
                <a class="phone__min" href="tel:+7391<?= str_replace('-', '',Yii::getAlias('@phone'));?>">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
            </div>
            <div class="header__content-phone">
                <a href="tel:+7391<?= str_replace('-', '',Yii::getAlias('@phone'));?>">+7 (391) <?= Yii::getAlias('@phone')?></a>
                <p>Доставка с <?= Yii::getAlias('@deliveryFrom')?> до <?= Yii::getAlias('@deliveryTo')?> в Красноярске</p>
            </div>
        </div>
    </header>

    <section class="info__item__pay">
        <p>Товар добавлен в корзину</p>
    </section>

    <?= $content ?>

    <footer class="footer">
        <div class="footer__content">
            <div class="footer__content-left">
                <div class="footer__content-left-contact">
                    <p>г. Красноярск, пр. Мира, 53</p>
                    <a href="tel:+7391<?= str_replace('-', '',Yii::getAlias('@phone'));?>">т.<?= Yii::getAlias('@phone')?></a>
                    <p>Доставка с <?= Yii::getAlias('@deliveryFrom')?> до <?= Yii::getAlias('@deliveryTo')?></p>
                </div>
                <h6>© Ресторан Кинза, 2020. Все права защищены.</h6>
            </div>
            <div class="footer__content-right">
                <div class="footer__content-right-menu">
                    <ul class="footer__menu">
                        <li><a href="/">Главная</a></li>
                        <li><a href="<?= Url::to(['menu/index']); ?>">Меню</a></li>
                        <li><a href="<?= Url::to(['site/contact']); ?>">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__content-right-social">
                    <div class="footer__content-right-social-item">
                        <a href="https://vk.com/kinza_cafe"><i class="fab fa-vk"></i></a>
                    </div>
                    <div class="footer__content-right-social-item">
                        <a href="https://www.instagram.com/kinzacafe/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>

</body>

</html>
<?php $this->endPage() ?>