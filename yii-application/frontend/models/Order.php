<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $created_at
 * @property string|null $updated_at
 * @property int $qty
 * @property float $sum
 * @property int|null $status
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string|null $text
 * @property string $payment
 * @property string $type
 */
class Order extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['order_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'address', 'payment'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['qty', 'status', 'cutlery'], 'integer'],
            [['sum'], 'number'],
            [['text'], 'string'],
            [['name', 'phone', 'address', 'payment'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'address' => 'Адрес',
            'text' => 'Коментарий к заказу',
            'payment' => 'Способ оплаты',
        ];
    }
}
