<?php

namespace frontend\models;

use Imagine\Image\Box;
use Yii;
use yii\imagine\Image;

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

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'product_id']);
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

    public static function setResizeImage($products)
    {
        foreach ($products as $product) {
            if ($product->product_image) {
                $path = $_SERVER['DOCUMENT_ROOT'] . '/img/product/resize/' . $product->product_image . '.jpg';
                if (!is_file($path)) {
                    Image::getImagine()
                        ->open($_SERVER['DOCUMENT_ROOT'] . '/img/product/' . $product->product_image . '.jpg')
                        ->thumbnail(new Box('400', '300'))
                        ->save($path, ['quality' => 50]);

                    $product->product_image = '/img/product/resize/' . $product->product_image . '.jpg';
                } elseif (is_file($path)) {
                    $product->product_image = '/img/product/resize/' . $product->product_image . '.jpg';
                } else {
                    return false;
                }
            }
        }
    }
}
