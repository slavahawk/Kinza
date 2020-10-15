<?php

/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use yii\helpers\Url;
use yii\web\JqueryAsset;

$this->title = "Доставка — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);

?>

    <main>

        <?= CategoryList::widget(); ?>
        <section class="delivery">
            <div class="delivery__content">
                <h1>Доставка</h1>
                <div class="delivery__content__item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci autem deleniti distinctio
                        doloremque dolores ducimus est et eum facilis fuga harum, hic id ipsam ipsum iure laborum libero
                        magni, maxime molestiae molestias nobis non odio officia praesentium quisquam, ratione rem
                        temporibus vel veritatis voluptatem! Atque error est incidunt quae voluptatum!</p>
                </div>
            </div>

        </section>

    </main>

<?php $this->registerJsFile('/yii-application/frontend/web/js/backend/addToCart.js', [
    'depends' => JqueryAsset::className()
]);
