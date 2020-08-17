<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m200708_080437_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createCategoryTable();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }

    public function createCategoryTable()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'sort_order' => $this->integer()->notNull(),
            'status' => $this->integer()->defaultValue(1)
        ]);

        $this->insert('category', [
            'name' => 'Горячие блюда',
            'sort_order' => 6,
        ]);

        $this->insert('category', [
            'name' => 'Супы',
            'sort_order' => 5,
        ]);

        $this->insert('category', [
            'name' => 'Завтраки',
            'sort_order' => 2,
        ]);

        $this->insert('category', [
            'name' => 'Чебуреки',
            'sort_order' => 1,
        ]);

        $this->insert('category', [
            'name' => 'Салаты',
            'sort_order' => 4,
        ]);

        $this->insert('category', [
            'name' => 'Холодные закуски',
            'sort_order' => 3,
        ]);

        $this->insert('category', [
            'name' => 'Десерты',
            'sort_order' => 9,
        ]);

        $this->insert('category', [
            'name' => 'Выпечка',
            'sort_order' => 8,
        ]);

        $this->insert('category', [
            'name' => 'Закуски к пиву',
            'sort_order' => 7,
        ]);

        $this->insert('category', [
            'name' => 'Напитки',
            'sort_order' => 10,
        ]);
    }
}
