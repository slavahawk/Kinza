<?php

/* @var $this yii\web\View */

$this->title = "Меню — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);

?>

<main>
    <div class="filter__box-mini">
        <div class="title__box-mini">
            <p>Фильтры и сортировка</p>
            <i class="fas fa-times"></i>
        </div>
        <div class="contetnt__filter"></div>
    </div>

    <section class="filter">
        <div class="filter__content">
            <ul>
                <li><a href="#">Главные блюда</a></li>
                <li><a href="#">Завтраки</a></li>
                <li><a href="#">Выпечка</a></li>
                <li><a href="#">Супы</a></li>
                <li><a href="#">Салаты</a></li>
                <li><a href="#">Напитки</a></li>
                <li><a href="#">Детское меню</a></li>
            </ul>
            <div class="filter__content-button">
                <a id="buttonFilterMini">Фильтр и сортировка</a>
            </div>
        </div>
    </section>
    <section class="catalog">
        <div class="catalog__content">
            <div class="catalog__content-item">
                <a href="/site/product.html">
                    <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/catalog/1.png" alt="" />
                </a>
                <h3>Самса мясная</h3>
                <p>90<span>₽</span></p>
                <a class="add-to-cart">Заказать</a>
            </div>
            <div class="catalog__content-item">
                <a href="/site/product.html">
                    <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/catalog/2.png" alt="" />
                </a>
                <h3>Хинкали с соусом на выбор</h3>
                <p>110<span>₽</span></p>
                <a class="add-to-cart">Заказать</a>
            </div>
            <div class="catalog__content-item">
                <a href="/site/product.html">
                    <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/catalog/3.png" alt="" />
                </a>
                <h3>Хачапури по-аджарски</h3>
                <p>240<span>₽</span></p>
                <a class="add-to-cart">Заказать</a>
            </div>
            <div class="catalog__content-item">
                <a href="/site/product.html">
                    <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/catalog/4.png" alt="" />
                </a>
                <h3>Хачипури по аджарски ака вася петя коля</h3>
                <p>150<span>₽</span></p>
                <a class="add-to-cart">Заказать</a>
            </div>
            <div class="catalog__content-item">
                <a href="/site/product.html">
                    <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/catalog/1.png" alt="" />
                </a>
                <h3>Самса мясная</h3>
                <p>90<span>₽</span></p>
                <a class="add-to-cart">Заказать</a>
            </div>
            <div class="catalog__content-item">
                <a href="/site/product.html">
                    <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/catalog/2.png" alt="" />
                </a>
                <h3>Хинкали с соусом на выбор</h3>
                <p>110<span>₽</span></p>
                <a class="add-to-cart">Заказать</a>
            </div>
            <div class="catalog__content-item">
                <a href="/site/product.html">
                    <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/catalog/3.png" alt="" />
                </a>
                <h3>Хачапури по-аджарски</h3>
                <p>240<span>₽</span></p>
                <a class="add-to-cart">Заказать</a>
            </div>
        </div>
    </section>
    <section class="backMenu">
        <!-- <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/backmenu.png" alt="" /> -->
    </section>
</main>
