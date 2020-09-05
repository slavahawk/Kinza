<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property int|null $category_id
 * @property string|null $weight
 * @property float|null $proteins
 * @property float|null $fats
 * @property float|null $carbohydrates
 * @property float|null $calories
 * @property string|null $description
 * @property int|null $price
 * @property string|null $img
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
            'id' => 'ID',
            'name' => 'Name',
            'category_id' => 'Category ID',
            'weight' => 'Weight',
            'proteins' => 'Proteins',
            'fats' => 'Fats',
            'carbohydrates' => 'Carbohydrates',
            'calories' => 'Calories',
            'description' => 'Description',
            'price' => 'Price',
            'img' => 'Img',
            'status' => 'Status',
        ];
    }
}
