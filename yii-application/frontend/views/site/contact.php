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
                <a
                    class="flamp-widget"
                    href="//krasnoyarsk.flamp.ru/firm/kinza_cheburechnaya-985690700664706"
                    data-flamp-widget-type="responsive-new"
                    data-flamp-widget-id="985690700664706"
                    data-flamp-widget-width="100%"
                    data-flamp-widget-count="1"
                >Отзывы о нас на Флампе</a
                >
                <script>
                    !(function (d, s) {
                        var js,
                            fjs = d.getElementsByTagName(s)[0];
                        js = d.createElement(s);
                        js.async = 1;
                        js.src = '//widget.flamp.ru/loader.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    })(document, 'script');
                </script>
            </div>
        </div>
    </section>
</main>
