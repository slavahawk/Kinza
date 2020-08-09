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
            'status' => $this->integer()->defaultValue(1)
        ]);

        $this->insert('category', [
            'name' => 'Горячие блюда',
        ]);

        $this->insert('category', [
            'name' => 'Супы',
        ]);

        $this->insert('category', [
            'name' => 'Завтраки',
        ]);

        $this->insert('category', [
            'name' => 'Чебуреки',
        ]);

        $this->insert('category', [
            'name' => 'Салаты',
        ]);

        $this->insert('category', [
            'name' => 'Холодные закуски',
        ]);

        $this->insert('category', [
            'name' => 'Десерты',
        ]);

        $this->insert('category', [
            'name' => 'Выпечка',
        ]);

        $this->insert('category', [
            'name' => 'Закуски к пиву',
        ]);

        $this->insert('category', [
            'name' => 'Напитки',
        ]);
    }
}
