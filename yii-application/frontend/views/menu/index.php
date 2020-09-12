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

    <?= CategoryList::widget(); ?>
        <!-- Меню -->

    <?php foreach ($menuList as $menu): ?>

    <section class="menu">
        <div class="menu__content">
            <h2><?= $menu['category_name'] ?></h2>
            <div class="menu__content__item">

                <?php foreach ($menu['products'] as $product): ?>

                <div class="menu__content__item__grid">
                    <a href="<?= Url::to(['menu/product', 'productId' => $product->product_id]) ?>">
                        <img class="lozad" data-src="<?= $product->product_image ?>" alt="<?= $product->product_name ?>" />
                    </a>
                    <a class="title__product"  href="<?= Url::to(['menu/product', 'productId' => $product->product_id]) ?>"><?= $product->product_name ?></a>
                    <p><?= $product->price ?><span>₽</span></p>
                    <a class="add-to-cart" data-id="<?= $product->product_id; ?>" href="<?= Url::to(['cart/add', 'id' => $product->product_id]); ?>">В корзину</a>
                </div>

                <?php endforeach; ?>

                <a href="<?= Url::to(['menu/category', 'categoryId' => $menu['category_id']]) ?>" class="menu__content__item__grid image__none">
                   <p>Смотреть все товары</p>
                </a>
            </div>
        </div>
    </section>

    <?php endforeach; ?>

    <section class="backMenu">
        <!-- <img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/backmenu.png" alt="" /> -->
    </section>
</main>

<?php $this->registerJsFile('/yii-application/frontend/web/js/backend/addToCart.js', [
        'depends' => JqueryAsset::className()
]);
