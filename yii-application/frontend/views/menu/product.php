<?php

/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use yii\helpers\Url;
use yii\web\JqueryAsset;

$this->title = "$product->name — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);

?>

<main>

    <?= CategoryList::widget(); ?>

    <section class="product">
        <div class="product__content">
            <div class="product__content-item">
                <div class="product__content-item-image">
                    <img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/product/<?= $product->img; ?>.jpg" alt="" />
                </div>
                <div class="product__content-item-info">
                    <h2><?= $product->name; ?></h2>
                    <a class="backMenu__link" href="<?= Url::to(['menu/category', 'categoryId' => $product->category_id]); ?>">Вернуться в каталог</a>
                    <p class="price"><?= $product->price; ?><span>₽</span></p>
                    <div class="product__content-item-info-btn">
                        <a class="pay__link add-to-cart" data-id="<?= $product->id; ?>" href="<?= Url::to(['cart/add', 'id' => $product->id]); ?>">В корзину</a>
                    </div>

                    <h3>Информация о товаре</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem ea exercitationem harum illo incidunt laudantium nisi placeat reiciendis soluta? Blanditiis ducimus facere fuga ipsum libero molestiae molestias provident rem similique temporibus? Aperiam eos exercitationem fugit illo illum laboriosam, laborum maiores maxime nam porro qui quo repudiandae suscipit temporibus voluptatem.
                    </p>
                    <br />
                    <p>Вес: <?= $product->weight; ?> г</p>
                    <br />
                    <p>
                        Белки: <?= $product->proteins; ?> <br />
                        Жиры: <?= $product->fats; ?> <br />
                        Углеводы: <?= $product->carbohydrates; ?> <br />
                        Калорийность: <?= $product->calories; ?> ккал/100г
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="line"></section>
</main>

<?php $this->registerJsFile('@web/js/addToCart.js', [
    'depends' => JqueryAsset::className()
]);