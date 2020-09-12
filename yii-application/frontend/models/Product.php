<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $product_id
 * @property string $product_name
 * @property int|null $category_id
 * @property string|null $weight
 * @property float|null $proteins
 * @property float|null $fats
 * @property float|null $carbohydrates
 * @property float|null $calories
 * @property string|null $description
 * @property int|null $price
 * @property string|null $product_image
 * @property int|null $status
 */
class Product extends \yii\db\ActiveRecord
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
    public function attributeLabels()
    {
        return [
            'product_id' => 'ID',
            'product_name' => 'Name',
            'category_id' => 'Category ID',
            'weight' => 'Weight',
            'proteins' => 'Proteins',
            'fats' => 'Fats',
            'carbohydrates' => 'Carbohydrates',
            'calories' => 'Calories',
            'description' => 'Description',
            'price' => 'Price',
            'product_image' => 'Img',
            'status' => 'Status',
        ];
    }
}
