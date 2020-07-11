<?php
use yii\helpers\Url;
?>

<div class="filter__box-mini">
    <div class="title__box-mini">
        <p>Фильтры и сортировка</p>
        <i class="fas fa-times"></i>
    </div>
    <div class="contetnt__filter">
        <?php foreach ($categoryList as $category): ?>
            <li><a href="<?php echo Url::to(['menu/category', 'categoryId' => $category->id]); ?>"><?php echo $category->name; ?></a></li>
        <?php endforeach; ?>
    </div>
</div>

<section class="filter">
    <div class="filter__content">
        <ul>

            <?php foreach ($categoryList as $category): ?>
                <li><a href="<?php echo Url::to(['menu/category', 'categoryId' => $category->id]); ?>"><?php echo $category->name; ?></a></li>
            <?php endforeach; ?>

        </ul>
        <div class="filter__content-button">
            <a id="buttonFilterMini">Фильтр и сортировка</a>
        </div>
    </div>
</section>