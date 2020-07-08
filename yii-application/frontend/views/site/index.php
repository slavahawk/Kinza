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
                    Лучшие чебуреки в городе
                </h1>
                <a href="<?php echo Url::to(['menu/index']); ?>">Меню</a>
            </div>
            <div class="mainSection__content-right wow bounceInRight">
                <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/cheb.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/cheb.jpeg" alt="чебуреки" /></picture>
            </div>
            <!-- Листик -->
            <div class="list1">
                <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/1.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/1.png" alt="" /></picture>
            </div>
        </div>
        <div class="callme"></div>
    </section>
    <!-- Меню фон after -->
    <section class="mainSectionAfter">
        <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/mainSection.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/mainSection.jpg" alt="" /></picture>
    </section>
    <!-- О нас -->
    <section class="aboutUs" id="aboutUs">
        <div class="aboutUs__content">
            <h2>О нас</h2>
            <div class="aboutUs__content-item">
                <div class="aboutUs__content-item-left">
                    <p>
                        Мы предлагаем вашему вниманию блюда восточной и европейской кухни. Вся наша еда
                        готовится только из продуктов высшего качества, а заявки обрабатываются так быстро,
                        что вы всегда получаете ваш заказ вкусным и горячим.
                    </p>
                </div>
                <div class="aboutUs__content-item-right wow rotateIn">
                    <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/50.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/50.jpg" alt="" /></picture>
                </div>
            </div>
        </div>
        <!-- Листик -->
        <div class="list2">
            <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/2.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/2.png" alt="" /></picture>
        </div>
        <div class="list3">
            <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/3.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/3.png" alt="" /></picture>
        </div>
        <div class="list4">
            <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/4.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/4.png" alt="" /></picture>
        </div>
    </section>
    <!-- Меню фон before -->
    <section class="menuBefore">
        <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/back2bef.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/back2bef.png" alt="" /></picture>
    </section>
    <!-- Меню -->
    <section class="menu">
        <div class="menu__content">
            <h2>Меню</h2>
            <div class="menu__content-item">
                <div class="menu__content-item-box">
                    <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/11.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/11.png" alt="" class="breakfast" /></picture>
                    <a>Завтраки</a>
                </div>
                <div class="menu__content-item-box">
                    <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/12.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/12.png" alt="" /></picture>
                    <a>Супы</a>
                </div>
                <div class="menu__content-item-box">
                    <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/3.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/3.png" alt="" /></picture>
                    <a>Салаты</a>
                </div>
                <div class="menu__content-item-box menuMin">
                    <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/5.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/5.png" alt="" /></picture>
                    <a>Выпечка</a>
                </div>
            </div>
            <!-- <div class="menu__content-button">
                <a href="#">Смотреть больше</a>
            </div> -->
            <div class="list5">
                <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/5.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/5.png" alt="" /></picture>
            </div>
            <div class="list6">
                <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/6.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/lists/6.png" alt="" /></picture>
            </div>
        </div>
    </section>
    <!-- Меню фон after -->
    <section class="menuAfter">
        <picture><source srcset="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/back2aft.webp" type="image/webp"><img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/back2aft.png" alt="" /></picture>
    </section>
    <!-- Карта -->
    <section class="map">
        <div id="map"></div>
    </section>
</main>
<script
        async
        defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCgwoTpESqADzD9gNWrX-uBJw7wB4-KWw&callback=initMap"
></script>
