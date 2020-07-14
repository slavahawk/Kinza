<?php
use yii\helpers\Url;

foreach ($categoryList as $category) {
    (Url::current() == Url::to(['menu/category', 'categoryId' => $category->id])) ? $this->title = "$category->name — Кинза" : false;
}

?>

<div class="filter__box-mini">
    <div class="title__box-mini">
        <p>Категории</p>
        <i class="fas fa-times"></i>
    </div>
    <div class="contetnt__filter">
        <div class="contetnt__filter__item">
            <ul>

                <?php foreach ($categoryList as $category): ?>
                    <li><a href="<?= Url::to(['menu/category', 'categoryId' => $category->id]); ?>" <?= (Url::current() == Url::to(['menu/category', 'categoryId' => $category->id])) ? 'class="active"' : false;?>><?= $category->name; ?></a></li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</div>

<section class="filter">
    <div class="filter__content">
        <ul>

            <?php foreach ($categoryList as $category): ?>
                <li><a href="<?= Url::to(['menu/category', 'categoryId' => $category->id]); ?>" <?= (Url::current() == Url::to(['menu/category', 'categoryId' => $category->id])) ? 'class="active"' : false ;?>><?= $category->name; ?></a></li>
            <?php endforeach; ?>

        </ul>
        <div class="filter__content-button">
            <a id="buttonFilterMini">Категории</a>
        </div>
    </div>
</section>