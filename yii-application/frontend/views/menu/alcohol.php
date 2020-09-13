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
                <a data-index="1" class="tab__alco__btn" href="#">Пиво</a>
                <a data-index="2" class="tab__alco__btn " href="#">Крепкие напитки</a>
                <a data-index="3" class="tab__alco__btn" href="#">Коктейли</a>
            </aside>
            <div data-index="1" class="alcohol__content__item-main">
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
            <div data-index="2" class="alcohol__content__item-main">
                <div class="table__aclo">
                    <h2>Водка</h2>
                    <div class="table__aclo__item">
                        <p>
                            Мороша, алк. 40%
                        </p>
                        <p>
                            40/500ML
                        </p>
                        <p>
                            60/750 руб.
                        </p>
                    </div>
                    <div class="table__aclo__item">
                        <p>
                            Мягков Классическая, алк. 40%
                        </p>
                        <p>
                            40/500ml
                        </p>
                        <p>
                            60/750 руб.
                        </p>
                    </div>
                </div>
                <div class="table__aclo">
                    <h2>Водка</h2>
                    <div class="table__aclo__item">
                        <p>
                            Мороша, алк. 40%
                        </p>
                        <p>
                            40/500ML
                        </p>
                        <p>
                            60/750 руб.
                        </p>
                    </div>
                    <div class="table__aclo__item">
                        <p>
                            Мягков Классическая, алк. 40%
                        </p>
                        <p>
                            40/500ml
                        </p>
                        <p>
                            60/750 руб.
                        </p>
                    </div>
                </div>
            </div>
            <div data-index="3" class="alcohol__content__item-main">
                <div class="table__aclo">
                    <h2>Коктейли</h2>
                    <div class="table__aclo__item">
                        <p>
                            «Виски-Кола»
                        </p>
                        <p>
                            200/10ML
                        </p>
                        <p>
                            190 руб.
                        </p>
                    </div>
                    <div class="table__aclo__item">
                        <p>
                            Фирменный коктейль «Кинза» Мартини Бьянко, ликер Блю Кюрасао, водка пять Озер, сок апельсиновый, апельсин
                        </p>
                        <p>
                            240/20ml
                        </p>
                        <p>
                            250 руб.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
