<?php

/* @var $this yii\web\View */

$this->title = "Контакты — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page'
]);
?>

<main>
    <section class="contact">
        <div class="contact__content">
            <div class="contact__content-text">
                <h2>Контакты</h2>
                <p>Мира, 53, Красноярск</p>
                <br />
                <p>Часы работы: <br />Ежедневно с 10:00 до 23:00</p>
                <br />
                <p><a href="tel:+73912884505">+7 (391) 288-45-05</a></p>
                <div class="contact__content-text-icon">
							<a href="https://vk.com/kinza_cafe" class="contact__content-text-icon-social vk">
								<i class="fab fa-vk"></i>
							</a>
							<a
								href="https://www.instagram.com/kinzacafe/"
								class="contact__content-text-icon-social inst"
							>
								<i class="fab fa-instagram"></i>
							</a>
				</div>
            </div>
            <div class="contact__content-map">
                <div id='map'></div>
            </div>
        </div>
    </section>
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
</main>
<script
        defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCgwoTpESqADzD9gNWrX-uBJw7wB4-KWw&callback=initMap"
></script>