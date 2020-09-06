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

    <section class="catalog">
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
    </section>
    <section class="backMenu">
        <!-- <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/backmenu.png" alt="" /> -->
    </section>
</main>

<?php $this->registerJsFile('/yii-application/frontend/web/js/addToCart.js', [
        'depends' => JqueryAsset::className()
]);
