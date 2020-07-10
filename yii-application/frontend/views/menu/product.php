<?php

/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use yii\helpers\Url;

$this->title = "Продукт — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);

?>

<main>

    <?php echo CategoryList::widget(); ?>

    <section class="product">
        <div class="product__content">
            <div class="product__content-item">
                <div class="product__content-item-image">
                    <img src="<?php echo Yii::getAlias('@imgFrontEnd'); ?>/product/<?php echo $product->img; ?>.jpg" alt="" />
                </div>
                <div class="product__content-item-info">
                    <h2><?php echo $product->name; ?></h2>
                    <a class="backMenu__link" href="<?php echo Url::to(['menu/index']); ?>">Вернуться в каталог</a>
                    <p class="price"><?php echo $product->price; ?><span>₽</span></p>
                    <div class="product__content-item-info-btn">
                        <a class="pay__link" href="#">В корзину</a>
                    </div>

                    <h3>Информация о товаре</h3>
                    <p>
                        Рис, обжаренный с ломтиками филе цыпленка, ананасами, перцем чили, куриным яйцом,
                        чесноком, белым и зеленым луком, морковью, орешками кешью, с рыбным и соевым
                        соусами.
                    </p>
                    <br />
                    <p><?php echo $product->weight; ?> г</p>
                    <br />
                    <p>
                        Дополняется лаймом. spicy Возможно приготовить это блюдо не острым. Предупредите
                        оператора заранее. Острое. Новинка
                    </p>
                    <br />
                    <p>
                        белки - <?php echo $product->proteins; ?> <br />
                        жиры - <?php echo $product->fats; ?> <br />
                        углеводы - <?php echo $product->carbohydrates; ?> <br />
                        калорийность - <?php echo $product->calories; ?> ккал/100г
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="line"></section>
</main>