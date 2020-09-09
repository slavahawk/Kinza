<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JqueryAsset;

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

                    <?php foreach ($session['cart'] as $id => $item): ?>

                    <div class="cart__content-cart-product">
                        <div class="cart__content-cart-product-main">
                            <a href="<?= Url::to(['menu/product', 'productId' => $id]); ?>"><img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/product/<?= $item['img']; ?>.jpg" alt="" /></a>
                            <div class="cart__content-cart-product-main-title">
                                <p><a href="<?= Url::to(['menu/product', 'productId' => $id]); ?>"><?= $item['name']; ?></a></p>
                            </div>
                        </div>
                        <div class="amount">
                            <div class="amount__content">
                                <label>Количество</label>
                                <div class="amount__content__item">
                                    <div class="smaller__btn">-</div>
                                    <p id="cart-count-num-<?= $id; ?>" class="sum"><?= $item['qty']; ?></p>
                                    <div class="more__btn add-product" data-id="<?= $id; ?>">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="sum__price">
                            <div class="sum__price__content">
                                <label>Цена</label>
                                <div class="sum__price__content__item">
                                    <?= $item['price']; ?><span> руб.</span>
                                </div>
                            </div>
                        </div>
                        <p class="delete">
                            <a href="<?= Url::to(['cart/delete', 'id' => $id]); ?>">&times;</a>
                        </p>
                    </div>

                    <?php endforeach; ?>

                    <div class="cart__content-cart-total">
                        <div class="total__title">Товаров на сумму</div>
                        <div class="total__amount">
                            <label>Всего количество</label>
                            <p class="sum"><span id="cart-count-qty"><?= $session['cart.qty']; ?></span> шт.</p>
                        </div>
                        <div class="total__price">
                            <label>Итог</label>
                            <p class="sum"><span id="cart-count-sum"><?= $session['cart.sum']; ?></span> руб.</p>
                        </div>
                        
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

<?php $this->registerJsFile('/yii-application/frontend/web/js/backend/addProductInCart.js', [
        'depends' => JqueryAsset::className()
]);
