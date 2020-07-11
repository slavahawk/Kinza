<?php

/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use yii\helpers\Url;
use yii\web\JqueryAsset;

$this->title = "Корзина — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);

?>

<?= CategoryList::widget(); ?>

<main>
    <section class="cart">
        <div class="cart__content">
            <div class="cart__content-sum">
                <h2>Корзина</h2>
                <div class="cart__content-sum-back">
                    <a href="<?php echo Url::to(['menu/index'])?>">Меню</a>
                    <p>/</p>
                    <a href="">Корзина</a>
                </div>

                <?php if (!isset($session['cart']) || empty($session['cart'])): ?>
                <h3>Корзина пуста</h3>
                <?php else: ?>
                <?php foreach ($session['cart'] as $id => $item): ?>
                    <div class="cart__content-sum-image">
                        <a href="<?= Url::to(['menu/product', 'productId' => $id]); ?>">
                            <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/product/<?= $item['img']; ?>.jpg" alt="" />
                        </a>
                        <div class="cart__content-sum-image-text">
                            <div class="cart__content-sum-image-text-title">
                                <a href="<?= Url::to(['menu/product', 'productId' => $id]); ?>"><?= $item['name']; ?></a>
                                <a class="delete" href="<?= Url::to(['cart/delete', 'id' => $id]); ?>">&times;</a>
                            </div>
                            <div class="cart__content-sum-image-text-remove">
                                <input type="number" />
                                <p><?= $item['qty']; ?> <span>шт.</span></p>
                                <p><?= $item['price']; ?> <span>₽</span></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <p><a href="/<?php echo Url::to('cart/clear')?>" style="color: #254e7a">Очистить корзину</a></p>

                <div class="cart__content-sum-total">
                    <h5>Итог</h5>
                    <p><?= $session['cart.sum']; ?><span> ₽</span></p>
                </div>
                <div class="cart__content-sum-total">
                    <h5>Количество</h5>
                    <p><?= $session['cart.qty']; ?><span> шт.</span></p>
                </div>
                <div class="cart__content-sum-else">
                    <p>Что то забыли? <a href="<?php echo Url::to('menu/index')?>">Вернитесь в меню</a></p>
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
            <?php endif; ?>
        </div>
    </section>
    <section class="line"></section>
</main>

<?php $this->registerJsFile('@web/js/addToCart.js', [
    'depends' => JqueryAsset::className()
]);
