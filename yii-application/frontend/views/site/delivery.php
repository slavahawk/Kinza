<?php

/* @var $this yii\web\View */

use frontend\widgets\categoryList\CategoryList;
use yii\helpers\Url;
use yii\web\JqueryAsset;

$this->title = "Условия доставки по городу — Кинза";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Условия доставки по городу. Минимальная сумма заказа 400р. В удаленные районы города заказ от 1000р.'
]);

?>

    <main>
        <section class="delivery">
            <div class="delivery__content">
                <h1>Доставка</h1>
                <div class="delivery__content__item">
                    <h2>Минимальная сумма заказа 400р</h2>
                    <p>Центральный район, Советский район до "Сиал Авто", Железнодорожный район, Кировский район, Ленинский район до "ДК КрасТЭЦ", Свердловский район до остановки "Станция Енисей", Октябрьский район до ул. Калинина (до Мясокомбината), м-н Академгородок.</p>
                    <h2>В удаленные районы города заказ от 1000р</h2>
                    <p>Ограничивается: Октябрьский район до станции "Бугач", Енисейский тракт (Сухая Балка), Причал, ул. Свердловская (до Сад Крутовского), м-н Вертлужанка, СНТ Содружество, д. Кузнецово, ул. Глинки.</p>
                </div>
            </div>

        </section>

    </main>

<?php $this->registerJsFile('/yii-application/frontend/web/js/backend/addToCart.js', [
    'depends' => JqueryAsset::className()
]);
