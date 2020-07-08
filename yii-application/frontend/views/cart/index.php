<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = "Корзина — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);

?>

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
<main>
    <section class="cart">
        <div class="cart__content">
            <div class="cart__content-sum">
                <h2>Корзина</h2>
                <div class="cart__content-sum-back">
                    <a href="/<?php echo Url::to('menu/index')?>">Меню</a>
                    <p>/</p>
                    <a href="">Корзина</a>
                </div>
                <div class="cart__content-sum-image">
                    <a href="/site/product.html">
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/catalog/1.png" alt="" />
                    </a>
                    <div class="cart__content-sum-image-text">
                        <div class="cart__content-sum-image-text-title">
                            <a href="/site/product.html">Cамса мясная</a>
                            <a class="delete" href="#">&times;</a>
                        </div>
                        <div class="cart__content-sum-image-text-remove">
                            <input type="number" />
                            <p>290 <span>₽</span></p>
                        </div>
                    </div>
                </div>
                <div class="cart__content-sum-image">
                    <a href="/site/product.html">
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/catalog/1.png" alt="" />
                    </a>
                    <div class="cart__content-sum-image-text">
                        <div class="cart__content-sum-image-text-title">
                            <a href="/site/product.html">Cамса мясная</a>
                            <a class="delete" href="#">&times;</a>
                        </div>
                        <div class="cart__content-sum-image-text-remove">
                            <input type="number" />
                            <p>290 <span>₽</span></p>
                        </div>
                    </div>
                </div>
                <div class="cart__content-sum-total">
                    <h5>Итог</h5>
                    <p>290<span>₽</span></p>
                </div>
                <div class="cart__content-sum-else">
                    <p>Что то забыли? <a href="<?php echo Url::to('menu/index')?>">Вернитесь в каталог товаров</a></p>
                </div>
            </div>
            <div class="cart__content-pickUp">
                <h2>Оформить заказ</h2>
                <a href="">Оформить заказ</a>
                <p>Далее</p>
                <div class="cart__content-pickUp-item">
                    <div class="cart__content-pickUp-item-text">
                        <h6>Cпособ доставки</h6>
                        <p>Выберите, как будете получать свой заказ.</p>
                    </div>
                    <div class="cart__content-pickUp-item-text">
                        <h6>Оплата</h6>
                        <p>Выберите способ оплаты и введите платёжные данные.</p>
                    </div>
                    <div class="cart__content-pickUp-item-text">
                        <h6>Подтверждение заказа</h6>
                        <p>Разместите заказ и получите подтверждение по электронной почте.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="line"></section>
</main>
