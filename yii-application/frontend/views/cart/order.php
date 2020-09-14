<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\widgets\MaskedInput;

?>
<main>
    <section class="order">
        <div class="order__content">
            <h2>Оформление заказа</h2>
            <div class="order__content-back">
                <a href="<?= Url::to(['menu/index'])?>">Каталог</a>
                <p>/</p>
                <a href="<?= Url::to(['cart/index'])?>">Корзина</a>
                <p>/</p>
                <p>Оформление заказа</p>
            </div>

            <section class="tabOrder">
                <div class="tabOrder__content">
                    <h3>Выберете, как хотите получить заказ:</h3>
                    <div class="tabOrder__content__title tab__title">
                        <div data-index="1" class="tab__title-btn">
                            <img class="tab__title-content" src="<?= Yii::getAlias('@imgFrontEnd'); ?>/cart/<?= $item['img']; ?>delivery.png" alt="" />
                            <p class="tab__title-content" >Доставка курьером</p>
                        </div>
                        <div data-index="2" class="tab__title-btn">
                            <img src="<?= Yii::getAlias('@imgFrontEnd'); ?>/cart/<?= $item['img']; ?>pickup.png" alt="" />
                            <p>Самовывоз</p>
                        </div>
                    </div>
                    <div class="tabOrder__content__item">

                            <?php $form = ActiveForm::begin([
                                'id' => 'delivery_form',
                                'options' => [
                                    'data-index' => 1,
                                    'class' => 'courier tab__item',
                                ]
                            ]); ?>
                            <div class="order__content-person">
                                <h3>Персональные данные</h3>
                                <div class="order__content-person-grid">
                                    <?= $form->field($order, 'name')->input('text', ['placeholder' => 'Имя'])->label(false); ?>
                                    <?= $form->field($order, 'phone')->label(false)->widget(MaskedInput::className(), [
                                        'mask' => '+9 999 999-99-99',
                                        'options' => ['placeholder' => 'Телефон']
                                    ]); ?>
                                </div>
                            </div>
                            <div class="order__content-delivery">
                                <h3>Адрес доставки</h3>
                                <div class="order__content-delivery-grid">
                                    <?= $form->field($order, 'address')->input('text', ['placeholder' => 'Улица, дом, квартира'])->label(false); ?>
                                    <input type="text" class="disabled__adress" placeholder="Красноярск" disabled/>
                                </div>
                            </div>
                            <div class="order__content-textarea">
                                <h3>Количество персон</h3>
                                <div class="order__content-textarea-grid">
                                    <?= $form->field($order, 'cutlery')->input('number', ['placeholder' => 'Кол-во приборов'])->label(false); ?>
                                </div>
                            </div>
                            <div class="order__content-textarea">
                                <h3>Коментарий к заказу</h3>
                                <div class="order__content-textarea-grid">
                                    <?= $form->field($order, 'text')->textarea(['rows' => 5, 'cols' => 15])->label(false); ?>
                                </div>
                            </div>
                            <div class="order__content-pay">
                                <h3>Способ оплаты</h3>
                                <div class="order__content-pay-grid">
                                    <?= $form->field($order, 'payment')->radioList([
                                            'card' => 'Безналичный',
                                            'cash' => 'Наличный',
                                    ])->label(false); ?>
                                </div>
                            </div>
                            <div class="order__content-btn">
                                <div class="order__content-btn-grid">
                                    <?= Html::submitButton('Заказать доставку', ['value' => 'order_delivery', 'name' => 'order_delivery']); ?>
                                </div>
                            </div>
                        <?php $form = ActiveForm::end(); ?>

                        <form data-index="2" class="pickup tab__item">
                        <?php $form = ActiveForm::begin(); ?>
                            <div class="order__content-person">
                                <h3>Персональные данные</h3>
                                <div class="order__content-person-grid">
                                    <?= $form->field($order, 'name')->input('text', ['placeholder' => 'Имя'])->label(false); ?>
                                    <?= $form->field($order, 'phone')->label(false)->widget(MaskedInput::className(), [
                                        'mask' => '+9 999 999-99-99',
                                        'options' => ['placeholder' => 'Телефон']
                                    ]); ?>
                                </div>
                            </div>
                            <div class="order__content-textarea">
                                <h3>Количество персон</h3>
                                <div class="order__content-textarea-grid">
                                    <?= $form->field($order, 'cutlery')->input('integer', ['placeholder' => 'Кол-во приборов'])->label(false); ?>
                                </div>
                            </div>
                            <div class="order__content-textarea">
                                <h3>Коментарий к заказу</h3>
                                <div class="order__content-textarea-grid">
                                    <?= $form->field($order, 'text')->textarea(['rows' => 5, 'cols' => 15])->label(false); ?>
                                </div>
                            </div>
                            <div class="order__content-pay">
                                <h3>Способ оплаты</h3>
                                <div class="order__content-pay-grid">
                                    <?= $form->field($order, 'payment')->radioList([
                                            'card' => 'Безналичный',
                                            'cash' => 'Наличный',
                                    ])->label(false); ?>
                                </div>
                            </div>
                            <div class="order__content-btn">
                                <div class="order__content-btn-grid">
                                    <?= Html::submitButton('Заказать самовывоз', ['value' => 'order', 'name' => 'order']); ?>
                                </div>
                            </div>
                        <?php $form = ActiveForm::end(); ?>
                        </form>
                    </div>
                    
                </div>

            </section>


        </div>
    </section>

</main>