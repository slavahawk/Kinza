<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "alcohol".
 *
 * @property int $alcohol_id
 * @property string $name
 * @property int|null $category_id
 * @property string|null $weight
 * @property string|null $price
 * @property int|null $status
 */
class Alcohol extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alcohol';
    }

    public function getCategoryAlcohol()
    {
        return $this->hasOne(CategoryAlcohol::className(), ['category_alcohol_id' => 'category_id']);
    }
}
