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
                <p>Часы работы: <br />Ежедневно с <?= Yii::getAlias('@workFrom')?> до <?= Yii::getAlias('@workTo')?></p>
                <br />
                <p><a href="tel:+7391<?= str_replace('-', '',Yii::getAlias('@phone'));?>">+7 (391) <?= Yii::getAlias('@phone')?></a></p>
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
</main>
<script
        defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCgwoTpESqADzD9gNWrX-uBJw7wB4-KWw&callback=initMap"
></script>