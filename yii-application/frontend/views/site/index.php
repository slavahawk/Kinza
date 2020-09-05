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
            <div class="mainSection__content-right wow bounceInRight">
                <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/cheb.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/cheb.png" alt="чебуреки" /></picture>
            </div>
        </div>
        <div class="listMin1 wow bounceInRight">
            <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/1.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/1.png" alt="" /></picture>
        </div>
        <div class="listMin2 wow bounceInLeft">
            <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/4.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/4.png" alt="" /></picture>
        </div>
    </section>
    <!-- Меню фон after -->
    <section class="mainSectionAfter">
        <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/mainSection.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/mainSection.jpg" alt="" /></picture>
    </section>
    <!-- О нас -->
    <section id="aboutUs" class="aboutUs">
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
                    <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/50.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/50.png" alt="" /></picture>
                </div>
            </div>
            <div class="listMin3 wow rotateIn">
                <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/3.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/3.png" alt="" /></picture>
            </div>
            <div class="list4">
                <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/4.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/4.png" alt="" /></picture>
            </div>
        </div>
        <!-- Листик -->
        <div class="list1">
            <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/1.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/1.png" alt="" /></picture>
        </div>
        <div class="list2">
            <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/2.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/2.png" alt="" /></picture>
        </div>
    </section>
    <!-- Меню фон before -->
    <section class="menuBefore">
        <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/back2bef.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/back2bef.png" alt="" /></picture>
    </section>
    <!-- Меню -->
    <section class="menu">
        <div class="menu__content">
            <h2>Меню</h2>
            <?php if ($categoryList): ?>
            <div class="menu__content-item">
                <?php foreach ($categoryList as $category): ?>
                <div class="menu__content-item-box">
                    <a href="<?= Url::to(['menu/category', 'categoryId' => $category->id]) ?>">
                        <picture>
                            <?php if (is_file($category->image .'webp')): ?>
                            <source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/category/<?=$category->image ?>.webp" type="image/webp">
                            <?php endif; ?>
                            <img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/category/<?=$category->image ?>.png" alt="<?=$category->name ?>" class="breakfast" />
                        </picture>
                    </a>
                    <a href="<?= Url::to(['menu/category', 'categoryId' => $category->id]) ?>" class="text__link"><?=$category->name ?></a>
                </div>
                <?php endforeach; ?>
<!--                <div class="menu__content-item-box menuMin">-->
<!--                    <a href="--><?//= Url::to(['menu/category', 'categoryId' => 8]) ?><!--"><picture><source srcset="--><?//= Yii::getAlias('@imgFrontEnd'); ?><!--/55.webp" type="image/webp"><img src="--><?//= Yii::getAlias('@imgFrontEnd'); ?><!--/55.png" alt="" class="breakfast" /></picture></a>-->
<!--                    <a href="--><?//= Url::to(['menu/category', 'categoryId' => 8]) ?><!--" class="text__link">Выпечка</a>-->
<!--                </div>-->
            </div>
            <?php endif; ?>
            <div class="list5">
                <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/5.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/5.png" alt="" /></picture>
            </div>
            <div class="list3">
                <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/3.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/3.png" alt="" /></picture>
            </div>
            <div class="list6">
                <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/6.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/6.png" alt="" /></picture>
            </div>
            <div class="listMin4 wow rotateIn">
                <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/6.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/lists/6.png" alt="" /></picture>
            </div>
        </div>
    </section>
    <!-- Меню фон after -->
    <section class="menuAfter">
        <picture><source srcset="<?= Yii::getAlias('@imgFrontEnd'); ?>/back2aft.webp" type="image/webp"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/back2aft.png" alt="" /></picture>
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


<?php $this->registerJsFile('@web/js/wow.min.js')?>

<?php $this->registerJs(
   "new WOW().init();"
)?>
