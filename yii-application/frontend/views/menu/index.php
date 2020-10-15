<?php

/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use yii\helpers\Url;
use yii\web\JqueryAsset;

$this->title = "Меню — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Вкусные блюда с доставкой по городу Красноярск'
]);

?>

    <main>

        <?= CategoryList::widget(); ?>
        <!-- Меню -->
        <div class="title__menu">

            <div class="title__menu__btn">
                <a href="<?= Url::to(['menu/alcohol', 'bar' => '1']) ?>">Барное меню</a>
            </div>
        </div>
        <?php foreach ($menuList as $menu): ?>

            <section class="menu">
                <div class="menu__content">
                    <h2><?= $menu['category_name'] ?></h2>


                    <!--Добавляем класс, когда товаров < 4 "few__products"-->
                    <div class="menu__content__item <?php if(count($menu['products']) < 3): ?>few__products<?php endif;?>">

                        <?php foreach ($menu['products'] as $product): ?>

                            <div class="menu__content__item__grid">
                                <a href="<?= Url::to(['menu/product', 'productId' => $product->product_id]) ?>">

                                    <?php if ($product->product_image): ?>
                                        <img class="lozad" data-src="<?= $product->product_image ?>"
                                             alt="<?= $product->product_name ?>"
                                             src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/dish.png"/>
                                    <?php else: ?>
                                        <img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/dish.png"
                                             alt="<?= $product->product_name; ?>"/>
                                    <?php endif; ?>

                                </a>
                                <a class="title__product"
                                   href="<?= Url::to(['menu/product', 'productId' => $product->product_id]) ?>"><?= $product->product_name ?></a>
                                <p><?= $product->price ?><span>₽</span></p>
                                <a class="add-to-cart btn__pay" data-id="<?= $product->product_id; ?>"
                                   href="<?= Url::to(['cart/add', 'id' => $product->product_id]); ?>">В корзину</a>
                            </div>

                        <?php endforeach; ?>

                        <a href="<?= Url::to(['menu/category', 'categoryId' => $menu['category_id']]) ?>"
                           class="menu__content__item__grid image__none">
                            <p>Смотреть все товары</p>
                        </a>
                    </div>
                </div>
            </section>

        <?php endforeach; ?>
    </main>

<?php $this->registerJsFile('/yii-application/frontend/web/js/backend/addToCart.js', [
    'depends' => JqueryAsset::className()
]);
