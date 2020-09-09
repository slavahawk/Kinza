<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = "Главная — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);
?>

<main class="wrapper">
    <!-- Основная секция -->
    <section class="mainSection">
        <div class="mainSection__content">
            <div class="mainSection__content-left">
                <h1>
                    Сочные и вкусные чебуреки в городе
                </h1>
                <p>Доставка с 10:00 до 21:00 в Красноярске</p>
                <a href="<?= Url::to(['menu/index']); ?>">Меню</a>
            </div>
            <div class="mainSection__content-right _anim-items">
                <picture ><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/cheb.webp" type="image/webp"><img class="_anim-rotate" src="<?= Yii::getAlias('@imgFrontEnd'); ?>/cheb.png" alt="чебуреки" /></picture>
            </div>
        </div>
    <!-- Листик -->
    <div class="list2">
            <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/2.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/2.png" alt="" /></picture>
        </div>
    </section>
    <!-- О нас -->
    <section id="aboutUs" class="aboutUs">
        <div class="aboutUs__content">
            <h2>О нас</h2>
            <div class="aboutUs__content-item">
                <p>
                    Мы предлагаем вашему вниманию блюда восточной и европейской кухни. Вся наша еда
                    готовится только из продуктов высшего качества, а заявки обрабатываются так быстро,
                    что вы всегда получаете ваш заказ вкусным и горячим.
                </p>
                <div class="aboutUs__content-item-grid">
                    <a data-fancybox="gallery" href="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/big/1.jpg"  class="about__grid">
                        <img loading="lazy" src="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/1.png" alt="" />
                    </a>
                    <a data-fancybox="gallery" href="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/big/2.jpg"  class="about__grid">
                        <img loading="lazy" src="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/2.png" alt="" />
                    </a>
                    <a data-fancybox="gallery" href="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/big/3.jpg"  class="about__grid grid__big">
                        <img loading="lazy" src="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/3.png" alt="" />
                    </a>
                    <a data-fancybox="gallery" href="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/big/4.jpg"  class="about__grid grid__big">
                        <img loading="lazy" src="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/4.png" alt="" />
                    </a>
                    <a data-fancybox="gallery" href="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/big/5.jpg"  class="about__grid">
                        <img loading="lazy" src="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/5.png" alt="" />
                    </a>
                    <a data-fancybox="gallery" href="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/big/6.jpg"  class="about__grid">
                        <img loading="lazy" src="<?= Yii::getAlias('@imgFrontEnd'); ?>/aboutUs/6.png" alt="" />
                    </a>
                </div>       
            </div>
        </div>
    
    </section>

    <!-- Карта -->
    <section class="map">
        <div id="map"></div>
    </section>
</main>
<script
        defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCgwoTpESqADzD9gNWrX-uBJw7wB4-KWw&callback=initMap"
></script>