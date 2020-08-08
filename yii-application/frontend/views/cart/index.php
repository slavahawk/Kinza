<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Корзина — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);

?>

<main>
    <section class="cart">
        <div class="cart__content">
            <h2>Корзина</h2>
            <div class="cart__content-back">
                <a href="<?= Url::to(['menu/index'])?>">Меню</a>
                <p>/</p>
                <a href="/">Корзина</a>
            </div>

            <?php if (!isset($session['cart']) || empty($session['cart'])): ?>

            <h3>Корзина пуста</h3>

            <?php else: ?>
            <div class="cart__content-sum">
                <div class="cart__content-cart">
                    <div class="cart__content-cart-name">
                        <p>Товары</p>
                        <p>Кол-во</p>
                        <p>Сумма</p>
                    </div>

                    <?php foreach ($session['cart'] as $id => $item): ?>
                    <div class="cart__content-cart-product">
                        <div class="cart__content-cart-product-main">
                            <a href="<?= Url::to(['menu/product', 'productId' => $id]); ?>"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/product/<?= $item['img']; ?>.jpg" alt="" /></a>
                            <div class="cart__content-cart-product-main-title">
                                <p><a href="<?= Url::to(['menu/product', 'productId' => $id]); ?>"><?= $item['name']; ?></a></p>
                            </div>
                        </div>
                        <p class="sum"><?= $item['qty']; ?><span> шт.</span></p>
                        <p class="sum"><?= $item['price']; ?><span> руб.</span></p>
                        <p class="delete">
                            <a href="<?= Url::to(['cart/delete', 'id' => $id]); ?>">&times;</a>
                        </p>
                    </div>
                    <?php endforeach; ?>

                    <div class="cart__content-cart-total">
                        <p>Товаров на сумму</p>
                        <p class="sum"><?= $session['cart.qty']; ?><span> шт.</span></p>
                        <p class="sum"><?= $session['cart.sum']; ?><span> руб.</span></p>
                    </div>

                    <div class="cart__content-cart-btn">
                        <p>Что то забыли? <a href="<?= Url::to(['menu/index'])?>">Нажмите, чтобы вернутсья</a></p>
                        <div class="cart__content-cart-btn-item">
                            <?= Html::beginForm(['cart/index'], 'post'); ?>
                            <?= Html::submitButton('Очистить корзину', ['class' => 'clear', 'value' => 'clear', 'name' => 'clear']); ?>
                            <?= Html::submitButton('Подтвердить заказ', ['class' => 'next', 'value' => 'order', 'name' => 'order']); ?>
                            <?= Html::endForm(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="line"></section>
</main>
