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
                <a class="active" href="#">Барная карта</a>
                <a href="#">Винная карта</a>
            </div>
            <a class="back__menu" href="#">Вернуться в меню</a>
        </div>

        <div class="alcohol__content__item">
            <aside>
                <a class="active" href="#">Пиво</a>
                <a href="#">Крепкие напитки</a>
                <a href="#">Коктейли</a>
            </aside>
            <div class="alcohol__content__item-main">
                <div class="table__aclo">
                    <h2>Разливное</h2>
                    <div class="table__aclo__item">
                        <p>
                            Фирменное «Кинза» светлое
                            Нефильтрованное (алк. 4,0%)
                        </p>
                        <p>
                            300/500ml
                        </p>
                        <p>
                            99/155 руб.
                        </p>
                    </div>
                    <div class="table__aclo__item">
                        <p>
                            Фирменное «Кинза» светлое
                            Нефильтрованное (алк. 4,0%)
                        </p>
                        <p>
                            300/500ml
                        </p>
                        <p>
                            99/155 руб.
                        </p>
                    </div>
                </div>
                <div class="table__aclo">
                    <h2>Разливное</h2>
                    <div class="table__aclo__item">
                        <p>
                            Фирменное «Кинза» светлое
                            Нефильтрованное (алк. 4,0%)
                        </p>
                        <p>
                            300/500ml
                        </p>
                        <p>
                            99/155 руб.
                        </p>
                    </div>
                    <div class="table__aclo__item">
                        <p>
                            Фирменное «Кинза» светлое
                            Нефильтрованное (алк. 4,0%)
                        </p>
                        <p>
                            300/500ml
                        </p>
                        <p>
                            99/155 руб.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
