<?php

/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use yii\helpers\Url;
use yii\web\JqueryAsset;

$this->title = "Меню — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);

?>

<main>

    <?php echo CategoryList::widget(); ?>

    <!-- <section class="catalog">
        <div class="catalog__content">

            <?php foreach ($productList as $product): ?>
                <div class="catalog__content-item">
                    <a href="<?php echo Url::to(['menu/product', 'productId' => $product->id]); ?>">
                        <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/product/<?php echo $product->img; ?>.jpg" alt="" />
                    </a>
                    <h3><?php echo $product->name; ?></h3>
                    <p><?php echo $product->price; ?><span>₽</span></p>
                    <a class="add-to-cart" data-id="<?= $product->id; ?>" href="<?= Url::to(['cart/add', 'id' => $product->id]); ?>">В корзину</a>
                </div>
            <?php endforeach; ?>

        </div>
    </section> -->
        <!-- Меню -->
    <section class="menu">
        <div class="menu__content">
            <h2>Чебуреки</h2>
            <div class="menu__content__item">
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <a class="menu__content__item__grid image__none">
                   <p>Смотреть все товары</p> 
                </a>
            </div>
        </div>
    </section>
    <section class="menu">
        <div class="menu__content">
            <h2>Чебуреки</h2>
            <div class="menu__content__item">
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <div class="menu__content__item__grid">
                    <a href="/menu/product/1">
                        <img src="/img/product/foto8176.jpg" alt="" />
                    </a>
                    <h3>Бефстроганов из говядины с картофельным пюре</h3>
                    <p>280<span>₽</span></p>
                    <a class="add-to-cart" data-id="1" href="/cart/add?id=1">В корзину</a>
                </div>
                <a class="menu__content__item__grid image__none">
                   <p>Смотреть все товары</p> 
                </a>
            </div>
        </div>
    </section>
    <section class="backMenu">
        <!-- <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/backmenu.png" alt="" /> -->
    </section>
</main>

<?php $this->registerJsFile('/yii-application/frontend/web/js/addToCart.js', [
        'depends' => JqueryAsset::className()
]);
