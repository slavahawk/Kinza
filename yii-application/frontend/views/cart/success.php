<?php

use yii\helpers\Url;

?>
<main>
    <section class="readyOrder">
        <div class="readyOrder__content">
            <img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/cart/success.png" alt="Успех" />
            <p>Ваш заказ успешно оформлен, оператор свяжется с вами в ближайшее время</p>
            <a href="<?= Url::to(['site/index']) ?>">Вернуться на главную</a>
        </div>
    </section>
</main>