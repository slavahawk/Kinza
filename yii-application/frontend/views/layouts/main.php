<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\models\Cart;
use yii\helpers\Html;
use frontend\assets\MainAsset;
use yii\helpers\Url;

$this->registerLinkTag(['rel' => 'icon', 'sizes' => '16x16', 'type' => 'image/ico', 'href' => Url::to(['/favicon.ico'])]);
$this->registerLinkTag(['rel' => 'icon', 'sizes' => '32x32', 'type' => 'image/ico', 'href' => Url::to(['/favicon32.ico'])]);
$this->registerLinkTag(['rel' => 'icon', 'sizes' => '64x64', 'type' => 'image/ico', 'href' => Url::to(['/favicon64.ico'])]);
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
            <a href="/"><picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/logo.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/logo.png" alt="" /></picture></a>
        </div>
        <div class="header__content-menu">
            <ul>
                <li>
                    <a href="<?php echo Url::to(['menu/index']); ?>">Меню</a>
                </li>
                <li>
                    <a href="<?= Url::to(['site/index', '#' => 'aboutUs']); ?>">О нас</a>
                </li>
                <li>
                    <a href="<?php echo Url::to(['site/contact']); ?>">Контакты</a>
                </li>
            </ul>
        </div>

        <div class="header__content-basket">
            <a href="/<?php echo Url::to('cart/index')?>" class="basket">
                <i class="fas fa-shopping-basket"></i>
                <div class="count" >
                    <p id="cart-count"><?= Cart::countItems(); ?></p>
                </div>
                <p class="basket__text">Корзина</p>
            </a>
            <a class="phone__min" href="tel:+73912884505">
            <i class="fa fa-phone" aria-hidden="true"></i>
            </a>
        </div>
        <div class="header__content-phone">
            <a href="tel:+73912884505">+7 (391) 288-45-05</a>
            <p>Доставка с 10:00 до 23:00 в Красноярске</p>
        </div>
    </div>
</header>

<?= $content ?>

<footer class="footer">
    <div class="footer__content">
        <div class="footer__content-left">
            <div class="footer__content-left-contact">
                <p>г. Красноярск, пр. Мира, 53</p>
                <a href="tel:+73912884505">т.288-45-05</a>
                <p>Доставка с 10:00 до 23:00</p>
            </div>
            <h6>© Ресторан Кинза, 2020. Все права защищены.</h6>
        </div>
        <div class="footer__content-right">
            <div class="footer__content-right-menu">
                <ul class="footer__menu">
                    <li><a href="/">Главная</a></li>
                    <li><a href="<?php echo Url::to(['menu/index']); ?>">Меню</a></li>
                    <li><a href="<?php echo Url::to(['site/contact']); ?>">Контакты</a></li>
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
