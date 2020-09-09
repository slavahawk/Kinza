<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "product".
 *
 * @property int $product_id
 * @property string $name
 * @property int|null $category_id
 * @property string|null $weight
 * @property int|null $proteins
 * @property int|null $fats
 * @property int|null $carbohydrates
 * @property int|null $calories
 * @property int|null $price
 * @property string|null $img
 * @property int|null $status
 */
class Cart extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['category_id', 'proteins', 'fats', 'carbohydrates', 'calories', 'price', 'status'], 'integer'],
            [['name', 'weight', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'ID',
            'name' => 'Name',
            'category_id' => 'Category ID',
            'weight' => 'Weight',
            'proteins' => 'Proteins',
            'fats' => 'Fats',
            'carbohydrates' => 'Carbohydrates',
            'calories' => 'Calories',
            'price' => 'Price',
            'img' => 'Img',
            'status' => 'Status',
        ];
    }

    public function addToCart($product)
    {
        $qty = 1;

        if (isset($_SESSION['cart'][$product->product_id])) {
            $_SESSION['cart'][$product->product_id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$product->product_id] = [
                'qty' => $qty,
                'name' => $product->product_name,
                'price' => $product->price,
                'img' => $product->product_image,
            ];
        }

        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;

        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $product->price : $qty * $product->price;
    }

    public static function countItems($qty = 0)
    {
        return $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
    }

    public function recalc($id)
    {
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];

        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;

        unset($_SESSION['cart'][$id]);
    }
}
