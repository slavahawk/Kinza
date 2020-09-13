<?php

/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use yii\helpers\Url;
use yii\web\JqueryAsset;

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);

?>

<section class="alcohol">
    <div class="alcohol__content">

        <div class="alcohol__content-title">
            <div class="alcohol__content-title-btn">
                <a class="active">Барная карта</a>
                <a href="#">Винная карта</a>
            </div>
            <a class="back__menu" href="<?= Url::to(['menu/index']) ?>">Вернуться в меню</a>
        </div>

        <div class="alcohol__content__item">
            <aside>

                <?php foreach ($parentCategories as $category): ?>
                    <a data-index="<?= $category->sort_order ?>" class="tab__alco__btn"><?= $category->name ?></a>
                <?php endforeach; ?>

            </aside>

            <?php foreach ($parentCategories as $category): ?>
            <div data-index="<?= $category->sort_order ?>" class="alcohol__content__item-main">

                <?php foreach ($childCategories as $child): ?>
                    <?php if($category->category_alcohol_id == $child->parent_category): ?>
                        <div class="table__aclo">
                            <h2><?= $child->name ?></h2>
                            <?php foreach ($child->alcohol as $alcohol): ?>
                                <div class="table__aclo__item">
                                    <p><?= $alcohol->name ?></p>
                                    <p><?= $alcohol->weight ?> мл.</p>
                                    <p><?= $alcohol->price ?> руб.</p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
