<?php

use frontend\models\Category;
use yii\helpers\Url;

foreach ($categoryList as $category) {
    (Url::current() == Url::to(['menu/category', 'categoryId' => $category->id])) ? $this->title = "$category->name — Кинза" : false;
}

?>

<!-- <div class="filter__box-mini">
    <div class="title__box-mini">
        <p>Категории</p>
        <i class="fas fa-times"></i>
    </div>
    <div class="contetnt__filter">
        <div class="contetnt__filter__item">
            <ul>

                

            </ul>
        </div>
    </div>
</div> -->

<section class="filter">
    <div class="filter__content">
        <ul>

            <?php foreach ($categoryList as $category): ?>
            <li><a href="<?= Url::to(['menu/category', 'categoryId' => $category->id]); ?>"
                    <?= (Url::current() == Url::to(['menu/category', 'categoryId' => $category->id])) ? 'class="active"' : false ;?>><?= $category->name; ?></a>
            </li>
            <?php endforeach; ?>

        </ul>
        <div class="filter__content-button">
            <div class="buttonFilterMini" id="buttonFilterMini">
                <?php if(Url::current() == Url::to(['menu/index'])): ?>
                <p>Все блюда</p>
                <?php endif; ?>

                <?php if ($categoryItem): ?>
                <p>
                    <?= $categoryItem ?>
                </p>
                <?php endif; ?>

                <?php if ($categoryOfProduct): ?>
                <p>
                    <?= $categoryOfProduct->name; ?>
                </p>
                <?php endif; ?>

                <img class="arrow-filter" src="<?= Yii::getAlias('@imgFrontEnd'); ?>/next.svg" alt="" />
            </div>
            <div class="filter__select">
                <div class="filter__select__option">
                    <div class="select__item">
                        <?php foreach ($categoryList as $category): ?>
                        <a href="<?= Url::to(['menu/category', 'categoryId' => $category->id]); ?>"
                            <?= (Url::current() == Url::to(['menu/category', 'categoryId' => $category->id])) ? 'class="active"' : false;?>><?= $category->name; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>