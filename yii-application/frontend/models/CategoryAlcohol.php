<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category_alcohol".
 *
 * @property int $category_alcohol_id
 * @property string $name
 * @property string $type
 * @property int $parent_category
 * @property int $sort_order
 * @property int $status
 */
class CategoryAlcohol extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_alcohol';
    }

    public function getAlcohol()
    {
        return $this->hasMany(Alcohol::className(), ['category_id' => 'category_alcohol_id']);
    }
}
