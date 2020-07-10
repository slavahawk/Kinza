<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m200710_085438_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createProductTable();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }

    public function createProductTable()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'category_id' => $this->integer(),
            'weight' => $this->string(),
            'proteins' => $this->integer(),
            'fats' => $this->integer(),
            'carbohydrates' => $this->integer(),
            'calories' => $this->integer(),
            'price' => $this->integer()->defaultValue(100),
            'img' => $this->string(),
            'status' => $this->integer()->defaultValue(1),
        ]);

        $this->insert('product', [
            'name' => 'Бефстроганов из говядины с картофельным пюре',
            'category_id' => 1,
            'weight' => 303,
            'proteins' => 9,
            'fats' => 17,
            'carbohydrates' => 8,
            'calories' => 225,
            'img' => 'foto8176',
        ]);

        $this->insert('product', [
            'name' => 'Бифштекс рубленый с яйцом с картофельным пюре',
            'category_id' => 1,
            'weight' => 34,
            'proteins' => 13,
            'fats' => 28,
            'carbohydrates' => 7,
            'calories' => 331,
            'img' => 'foto8175',
        ]);

        $this->insert('product', [
            'name' => 'Блинчики с маслом',
            'category_id' => 3,
            'weight' => '120/2',
            'proteins' => 1,
            'fats' => 3,
            'carbohydrates' => 10,
            'calories' => 43,
            'img' => 'foto11788',
        ]);

        $this->insert('product', [
            'name' => 'Бозартма на сковороде',
            'category_id' => 1,
            'weight' => '250/2',
            'proteins' => 2,
            'fats' => 6,
            'carbohydrates' => 3,
            'calories' => 76,
            'img' => 'foto15932',
        ]);

        $this->insert('product', [
            'name' => 'Борщ с говядиной и сметаной',
            'category_id' => 2,
            'weight' => 354,
            'proteins' => 3,
            'fats' => 4,
            'carbohydrates' => 11,
            'calories' => 69,
            'img' => 'foto8168',
        ]);

        $this->insert('product', [
            'name' => 'Брауни с грецким орехом',
            'category_id' => 7,
            'weight' => 104,
            'proteins' => 0,
            'fats' => 0,
            'carbohydrates' => 0,
            'calories' => 0,
            'img' => 'foto16230',
        ]);

        $this->insert('product', [
            'name' => 'Вареники с вишней',
            'category_id' => 1,
            'weight' => '200/30',
            'proteins' => 10,
            'fats' => 7,
            'carbohydrates' => 16,
            'calories' => 194,
            'img' => 'foto8877',
        ]);

        $this->insert('product', [
            'name' => 'Вареники с капустой',
            'category_id' => 1,
            'weight' => '200/30',
            'proteins' => 5,
            'fats' => 6,
            'carbohydrates' => 23,
            'calories' => 149,
            'img' => 'foto8874',
        ]);

        $this->insert('product', [
            'name' => 'Вареники с картофелем',
            'category_id' => 1,
            'weight' => '200/30',
            'proteins' => 3,
            'fats' => 9,
            'carbohydrates' => 3,
            'calories' => 173,
            'img' => 'foto8873',
        ]);

        $this->insert('product', [
            'name' => 'Вареники с клубникой',
            'category_id' => 1,
            'weight' => '200/30',
            'proteins' => 10,
            'fats' => 7,
            'carbohydrates' => 16,
            'calories' => 194,
            'img' => 'foto16468',
        ]);

        $this->insert('product', [
            'name' => 'Вареники с творогом и изюмом',
            'category_id' => 1,
            'weight' => '200/30',
            'proteins' => 3,
            'fats' => 4,
            'carbohydrates' => 20,
            'calories' => 174,
            'img' => 'foto8876',
        ]);

        $this->insert('product', [
            'name' => 'Вареники с черной смородиной',
            'category_id' => 1,
            'weight' => '200/30',
            'proteins' => 10,
            'fats' => 7,
            'carbohydrates' => 16,
            'calories' => 194,
            'img' => 'foto16469',
        ]);

        $this->insert('product', [
            'name' => 'Десерт "Жареное молоко"',
            'category_id' => 7,
            'weight' => '150/50/2',
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 19,
            'calories' => 39,
            'img' => 'foto15930',
        ]);

        $this->insert('product', [
            'name' => 'Долма',
            'category_id' => 1,
            'weight' => '150/150/4',
            'proteins' => 3,
            'fats' => 2,
            'carbohydrates' => 3,
            'calories' => 45,
            'img' => 'foto15933',
        ]);

        $this->insert('product', [
            'name' => 'Домашние разносолы 145/2',
            'category_id' => 6,
            'weight' => '145/2',
            'proteins' => 4,
            'fats' => 17,
            'carbohydrates' => 3,
            'calories' => 187,
            'img' => 'foto16146',
        ]);

        $this->insert('product', [
            'name' => 'Картофель запеченый с курицей и сыром',
            'category_id' => 1,
            'weight' => 250,
            'proteins' => 10,
            'fats' => 22,
            'carbohydrates' => 9,
            'calories' => 279,
            'img' => 'foto11312',
        ]);

        $this->insert('product', [
            'name' => 'Колбаска шоколадная со сливочным соусом',
            'category_id' => 7,
            'weight' => 12,
            'proteins' => 10,
            'fats' => 33,
            'carbohydrates' => 29,
            'calories' => 520,
            'img' => 'foto8215',
        ]);

        $this->insert('product', [
            'name' => 'Компанейский 345/30',
            'category_id' => 9,
            'weight' => '345/30',
            'proteins' => 3,
            'fats' => 6,
            'carbohydrates' => 10,
            'calories' => 121,
            'img' => 'foto11303',
        ]);

        $this->insert('product', [
            'name' => 'Копченый 210/30',
            'category_id' => 9,
            'weight' => '210/30',
            'proteins' => 2,
            'fats' => 4,
            'carbohydrates' => 7,
            'calories' => 92,
            'img' => 'foto11301',
        ]);

        $this->insert('product', [
            'name' => 'Крем-суп из свежих грибов с сухариками',
            'category_id' => 2,
            'weight' => 301,
            'proteins' => 2,
            'fats' => 3,
            'carbohydrates' => 6,
            'calories' => 56,
            'img' => 'foto8171',
        ]);

        $this->insert('product', [
            'name' => 'Крем-суп из свежих грибов с сухариками',
            'category_id' => 2,
            'weight' => 250,
            'proteins' => 0,
            'fats' => 0,
            'carbohydrates' => 0,
            'calories' => 0,
            'img' => 'foto16315',
        ]);

        $this->insert('product', [
            'name' => 'Куриная отбивная в панировке',
            'category_id' => 1,
            'weight' => '120/143/3',
            'proteins' => 1,
            'fats' => 3,
            'carbohydrates' => 0,
            'calories' => 32,
            'img' => 'foto16219',
        ]);

        $this->insert('product', [
            'name' => 'Куриный суп с домашней лапшой',
            'category_id' => 2,
            'weight' => 334,
            'proteins' => 4,
            'fats' => 4,
            'carbohydrates' => 11,
            'calories' => 98,
            'img' => 'foto8163',
        ]);

        $this->insert('product', [
            'name' => 'Лагман с говядиной',
            'category_id' => 2,
            'weight' => '280/2',
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 4,
            'calories' => 30,
            'img' => 'foto15832',
        ]);

        $this->insert('product', [
            'name' => 'Лимонад Апельсиновый 1000мл',
            'category_id' => 10,
            'weight' => 1000,
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 57,
            'calories' => 70,
            'img' => 'foto11480',
        ]);

        $this->insert('product', [
            'name' => 'Лимонад Апельсиновый 250мл',
            'category_id' => 10,
            'weight' => 250,
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 57,
            'calories' => 70,
            'img' => 'foto11482',
        ]);

        $this->insert('product', [
            'name' => 'Лимонад Классический 1000мл',
            'category_id' => 10,
            'weight' => 1000,
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 84,
            'calories' => 62,
            'img' => 'foto11476',
        ]);

        $this->insert('product', [
            'name' => 'Лимонад Классический 250мл',
            'category_id' => 10,
            'weight' => 250,
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 84,
            'calories' => 62,
            'img' => 'foto11477',
        ]);

        $this->insert('product', [
            'name' => 'Лимонад Клубничный 1000мл',
            'category_id' => 10,
            'weight' => 1000,
            'proteins' => 1,
            'fats' => 2,
            'carbohydrates' => 52,
            'calories' => 44,
            'img' => 'foto11483',
        ]);

        $this->insert('product', [
            'name' => 'Лимонад Клубничный 250мл',
            'category_id' => 10,
            'weight' => 250,
            'proteins' => 1,
            'fats' => 2,
            'carbohydrates' => 52,
            'calories' => 44,
            'img' => 'foto11484',
        ]);

        $this->insert('product', [
            'name' => 'Лимонад Облепиховый 1000мл',
            'category_id' => 10,
            'weight' => 1000,
            'proteins' => 1,
            'fats' => 2,
            'carbohydrates' => 84,
            'calories' => 62,
            'img' => 'foto43615',
        ]);

        $this->insert('product', [
            'name' => 'Лимонад Облепиховый 250мл',
            'category_id' => 10,
            'weight' => 250,
            'proteins' => 1,
            'fats' => 2,
            'carbohydrates' => 84,
            'calories' => 62,
            'img' => 'foto18418',
        ]);

        $this->insert('product', [
            'name' => 'Лимонад Огуречный 1000мл',
            'category_id' => 10,
            'weight' => 1000,
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 51,
            'calories' => 41,
            'img' => 'foto11478',
        ]);

        $this->insert('product', [
            'name' => 'Лимонад Огуречный 250мл',
            'category_id' => 10,
            'weight' => 250,
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 51,
            'calories' => 41,
            'img' => 'foto11479',
        ]);

        $this->insert('product', [
            'name' => 'Лимонный суп',
            'category_id' => 2,
            'weight' => 307,
            'proteins' => 10,
            'fats' => 21,
            'carbohydrates' => 2,
            'calories' => 238,
            'img' => 'foto16384',
        ]);

        $this->insert('product', [
            'name' => 'Луковый крем-суп',
            'category_id' => 2,
            'weight' => 280,
            'proteins' => 0,
            'fats' => 0,
            'carbohydrates' => 0,
            'calories' => 0,
            'img' => 'foto16348',
        ]);

        $this->insert('product', [
            'name' => 'Мампар',
            'category_id' => 2,
            'weight' => '300/2',
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 3,
            'calories' => 40,
            'img' => 'foto21088',
        ]);

        $this->insert('product', [
            'name' => 'Манты "Узбекские"',
            'category_id' => 1,
            'weight' => 27,
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 17,
            'calories' => 168,
            'img' => 'foto8180',
        ]);

        $this->insert('product', [
            'name' => 'Манты с "Курицей"',
            'category_id' => 1,
            'weight' => '220/30/2',
            'proteins' => 3,
            'fats' => 3,
            'carbohydrates' => 4,
            'calories' => 48,
            'img' => 'foto18289',
        ]);

        $this->insert('product', [
            'name' => 'Мясная тарелка',
            'category_id' => 6,
            'weight' => '90/10/20',
            'proteins' => 15,
            'fats' => 29,
            'carbohydrates' => 3,
            'calories' => 324,
            'img' => 'foto11309',
        ]);

        $this->insert('product', [
            'name' => 'Наггетсы куриные на палочке',
            'category_id' => 1,
            'weight' => 1495,
            'proteins' => 1,
            'fats' => 3,
            'carbohydrates' => 0,
            'calories' => 32,
            'img' => 'foto16221',
        ]);

        $this->insert('product', [
            'name' => 'Напиток "Тархун" 1000мл',
            'category_id' => 10,
            'weight' => 1000,
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 103,
            'calories' => 64,
            'img' => 'foto8257',
        ]);

        $this->insert('product', [
            'name' => 'Напиток "Тархун" 250мл',
            'category_id' => 10,
            'weight' => 250,
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 103,
            'calories' => 64,
            'img' => 'foto8256',
        ]);

        $this->insert('product', [
            'name' => 'Оджахури из телятины',
            'category_id' => 1,
            'weight' => 300,
            'proteins' => 0,
            'fats' => 0,
            'carbohydrates' => 0,
            'calories' => 0,
            'img' => 'foto16343',
        ]);

        $this->insert('product', [
            'name' => 'Окрошка на квасе со сметаной',
            'category_id' => 2,
            'weight' => 324,
            'proteins' => 4,
            'fats' => 4,
            'carbohydrates' => 4,
            'calories' => 382,
            'img' => 'foto8164',
        ]);

        $this->insert('product', [
            'name' => 'Панкейки с кленовым сиропом',
            'category_id' => 3,
            'weight' => '150/30/2',
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 36,
            'calories' => 40,
            'img' => 'foto11793',
        ]);

        $this->insert('product', [
            'name' => 'Пельмени жареные',
            'category_id' => 1,
            'weight' => 16,
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 26,
            'calories' => 250,
            'img' => 'foto11297',
        ]);

        $this->insert('product', [
            'name' => 'Пельмени запеченые со сметаной',
            'category_id' => 1,
            'weight' => '220/30/2',
            'proteins' => 1,
            'fats' => 2,
            'carbohydrates' => 7,
            'calories' => 78,
            'img' => 'foto11315',
        ]);

        $this->insert('product', [
            'name' => 'Пельмени отварные',
            'category_id' => 1,
            'weight' => 2,
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 21,
            'calories' => 202,
            'img' => 'foto8182',
        ]);

        $this->insert('product', [
            'name' => 'Пивной 230/30',
            'category_id' => 9,
            'weight' => '230/30',
            'proteins' => 5,
            'fats' => 5,
            'carbohydrates' => 0,
            'calories' => 70,
            'img' => 'foto11304',
        ]);

        $this->insert('product', [
            'name' => 'Плов "Узбекский"',
            'category_id' => 1,
            'weight' => 300,
            'proteins' => 9,
            'fats' => 9,
            'carbohydrates' => 24,
            'calories' => 215,
            'img' => 'foto8179',
        ]);

        $this->insert('product', [
            'name' => 'Русская мясная солянка',
            'category_id' => 2,
            'weight' => '300/20/5/2',
            'proteins' => 4,
            'fats' => 7,
            'carbohydrates' => 6,
            'calories' => 106,
            'img' => 'foto8166',
        ]);

        $this->insert('product', [
            'name' => 'Рыбное ассорти',
            'category_id' => 6,
            'weight' => 6,
            'proteins' => 20,
            'fats' => 14,
            'carbohydrates' => 3,
            'calories' => 209,
            'img' => 'foto11311',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Винегрет"',
            'category_id' => 5,
            'weight' => '180/2',
            'proteins' => 1,
            'fats' => 10,
            'carbohydrates' => 7,
            'calories' => 124,
            'img' => 'foto8151',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Греческий"',
            'category_id' => 5,
            'weight' => 202,
            'proteins' => 4,
            'fats' => 17,
            'carbohydrates' => 3,
            'calories' => 187,
            'img' => 'foto8149',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Капустный" с морковью и огурцами',
            'category_id' => 5,
            'weight' => '180/2',
            'proteins' => 1,
            'fats' => 10,
            'carbohydrates' => 4,
            'calories' => 112,
            'img' => 'foto8150',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Ляйсан"',
            'category_id' => 5,
            'weight' => '180/2',
            'proteins' => 1,
            'fats' => 2,
            'carbohydrates' => 3,
            'calories' => 37,
            'img' => 'foto15830',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Обжорка"',
            'category_id' => 5,
            'weight' => '180/2',
            'proteins' => 8,
            'fats' => 25,
            'carbohydrates' => 9,
            'calories' => 287,
            'img' => 'foto8152',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Оливье"',
            'category_id' => 5,
            'weight' => '180/2',
            'proteins' => 3,
            'fats' => 10,
            'carbohydrates' => 7,
            'calories' => 134,
            'img' => 'foto8144',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Рохат"',
            'category_id' => 5,
            'weight' => '160/2',
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 1,
            'calories' => 25,
            'img' => 'foto15926',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Сельдь под шубой"',
            'category_id' => 5,
            'weight' => '180/2',
            'proteins' => 8,
            'fats' => 15,
            'carbohydrates' => 6,
            'calories' => 193,
            'img' => 'foto8148',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Ташкент"',
            'category_id' => 5,
            'weight' => 182,
            'proteins' => 2,
            'fats' => 4,
            'carbohydrates' => 1,
            'calories' => 44,
            'img' => 'foto15831',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Тжвжик"',
            'category_id' => 5,
            'weight' => 180,
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 1,
            'calories' => 29,
            'img' => 'foto15924',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Фруктовый"',
            'category_id' => 5,
            'weight' => 200,
            'proteins' => 3,
            'fats' => 3,
            'carbohydrates' => 30,
            'calories' => 159,
            'img' => 'foto15826',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Цезарь" с курицей',
            'category_id' => 5,
            'weight' => '180/2',
            'proteins' => 10,
            'fats' => 23,
            'carbohydrates' => 16,
            'calories' => 262,
            'img' => 'foto8153',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Чафан"',
            'category_id' => 5,
            'weight' => '180/2',
            'proteins' => 6,
            'fats' => 19,
            'carbohydrates' => 12,
            'calories' => 226,
            'img' => 'foto8145',
        ]);

        $this->insert('product', [
            'name' => 'Салат из редьки Дайкон',
            'category_id' => 5,
            'weight' => '180/2',
            'proteins' => 2,
            'fats' => 1,
            'carbohydrates' => 1,
            'calories' => 23,
            'img' => 'foto15925',
        ]);

        $this->insert('product', [
            'name' => 'Салат из свежих овощей с майонезом',
            'category_id' => 5,
            'weight' => '150/30',
            'proteins' => 2,
            'fats' => 13,
            'carbohydrates' => 5,
            'calories' => 149,
            'img' => 'foto8160',
        ]);

        $this->insert('product', [
            'name' => 'Салат из свежих овощей с оливковым маслом',
            'category_id' => 5,
            'weight' => 152,
            'proteins' => 1,
            'fats' => 19,
            'carbohydrates' => 5,
            'calories' => 197,
            'img' => 'foto8161',
        ]);

        $this->insert('product', [
            'name' => 'Салат из свежих овощей с растительным маслом',
            'category_id' => 5,
            'weight' => 152,
            'proteins' => 1,
            'fats' => 19,
            'carbohydrates' => 5,
            'calories' => 197,
            'img' => 'foto8158',
        ]);

        $this->insert('product', [
            'name' => 'Салат из свежих овощей со сметаной',
            'category_id' => 5,
            'weight' => 152,
            'proteins' => 2,
            'fats' => 6,
            'carbohydrates' => 6,
            'calories' => 84,
            'img' => 'foto8159',
        ]);

        $this->insert('product', [
            'name' => 'Салат с кальмаром и свежим огурцом',
            'category_id' => 5,
            'weight' => 202,
            'proteins' => 8,
            'fats' => 12,
            'carbohydrates' => 4,
            'calories' => 161,
            'img' => 'foto8147',
        ]);

        $this->insert('product', [
            'name' => 'Салат с тунцом',
            'category_id' => 5,
            'weight' => 240,
            'proteins' => 0,
            'fats' => 0,
            'carbohydrates' => 0,
            'calories' => 0,
            'img' => 'foto16341',
        ]);

        $this->insert('product', [
            'name' => 'Салат-коктейль с ветчиной и сыром',
            'category_id' => 5,
            'weight' => '180/2',
            'proteins' => 8,
            'fats' => 21,
            'carbohydrates' => 2,
            'calories' => 236,
            'img' => 'foto8729',
        ]);

        $this->insert('product', [
            'name' => 'Самса "сникерс"',
            'category_id' => 8,
            'weight' => 1237,
            'proteins' => 10,
            'fats' => 12,
            'carbohydrates' => 1,
            'calories' => 155,
            'img' => 'foto18371',
        ]);

        $this->insert('product', [
            'name' => 'Самса с бараниной',
            'category_id' => 8,
            'weight' => 125,
            'proteins' => 10,
            'fats' => 12,
            'carbohydrates' => 1,
            'calories' => 155,
            'img' => 'foto16174',
        ]);

        $this->insert('product', [
            'name' => 'Самса с брынзой',
            'category_id' => 8,
            'weight' => 1488,
            'proteins' => 10,
            'fats' => 12,
            'carbohydrates' => 1,
            'calories' => 155,
            'img' => 'foto16183',
        ]);

        $this->insert('product', [
            'name' => 'Самса с капустой',
            'category_id' => 8,
            'weight' => 120,
            'proteins' => 10,
            'fats' => 12,
            'carbohydrates' => 1,
            'calories' => 155,
            'img' => 'foto18372',
        ]);

        $this->insert('product', [
            'name' => 'Самса с картофелем',
            'category_id' => 8,
            'weight' => 125,
            'proteins' => 10,
            'fats' => 12,
            'carbohydrates' => 1,
            'calories' => 155,
            'img' => 'foto16176',
        ]);

        $this->insert('product', [
            'name' => 'Самса со шпинатом и брынзой',
            'category_id' => 8,
            'weight' => 1488,
            'proteins' => 10,
            'fats' => 12,
            'carbohydrates' => 1,
            'calories' => 155,
            'img' => 'foto16177',
        ]);

        $this->insert('product', [
            'name' => 'Сельдь по-русски',
            'category_id' => 6,
            'weight' => '75/75/30',
            'proteins' => 14,
            'fats' => 19,
            'carbohydrates' => 10,
            'calories' => 264,
            'img' => 'foto8146',
        ]);

        $this->insert('product', [
            'name' => 'Сырная похлебка с чесночной гренкой',
            'category_id' => 2,
            'weight' => 324,
            'proteins' => 4,
            'fats' => 11,
            'carbohydrates' => 12,
            'calories' => 162,
            'img' => 'foto8167',
        ]);

        $this->insert('product', [
            'name' => 'Сырники',
            'category_id' => 3,
            'weight' => '150/2',
            'proteins' => 24,
            'fats' => 11,
            'carbohydrates' => 63,
            'calories' => 162,
            'img' => 'foto11791',
        ]);

        $this->insert('product', [
            'name' => 'Сырное ассорти',
            'category_id' => 6,
            'weight' => '110/30',
            'proteins' => 20,
            'fats' => 14,
            'carbohydrates' => 3,
            'calories' => 209,
            'img' => 'foto11310',
        ]);

        $this->insert('product', [
            'name' => 'Сытный 210/30',
            'category_id' => 9,
            'weight' => '200/30/30',
            'proteins' => 2,
            'fats' => 4,
            'carbohydrates' => 8,
            'calories' => 90,
            'img' => 'foto11302',
        ]);

        $this->insert('product', [
            'name' => 'Тирамиссу Классический 150/4гр.',
            'category_id' => 7,
            'weight' => 164,
            'proteins' => 6,
            'fats' => 25,
            'carbohydrates' => 117,
            'calories' => 347,
            'img' => 'foto8214',
        ]);

        $this->insert('product', [
            'name' => 'Торт фирменный "Кинза" с шоколадным топпингом',
            'category_id' => 7,
            'weight' => 135,
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 14,
            'calories' => 66,
            'img' => 'foto8210',
        ]);

        $this->insert('product', [
            'name' => 'Фахитас из телятины с соусом  BBQ',
            'category_id' => 1,
            'weight' => '240/35/30/2',
            'proteins' => 1,
            'fats' => 3,
            'carbohydrates' => 0,
            'calories' => 32,
            'img' => 'foto16211',
        ]);

        $this->insert('product', [
            'name' => 'Филе кеты в сливках',
            'category_id' => 1,
            'weight' => 293,
            'proteins' => 12,
            'fats' => 18,
            'carbohydrates' => 14,
            'calories' => 267,
            'img' => 'foto8189',
        ]);

        $this->insert('product', [
            'name' => 'Фрикадельки из курицы с дольками',
            'category_id' => 1,
            'weight' => 2508,
            'proteins' => 1,
            'fats' => 3,
            'carbohydrates' => 0,
            'calories' => 32,
            'img' => 'foto16217',
        ]);

        $this->insert('product', [
            'name' => 'Фруктовое ассорти 120/4',
            'category_id' => 7,
            'weight' => '120/4',
            'proteins' => 0,
            'fats' => 0,
            'carbohydrates' => 0,
            'calories' => 0,
            'img' => 'foto16143',
        ]);

        $this->insert('product', [
            'name' => 'Хачапури по-аджарски',
            'category_id' => 8,
            'weight' => 270,
            'proteins' => 0,
            'fats' => 0,
            'carbohydrates' => 0,
            'calories' => 0,
            'img' => 'foto16463',
        ]);

        $this->insert('product', [
            'name' => 'Хинкали с аджикой из свежих овощей',
            'category_id' => 1,
            'weight' => 275/2,
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 24,
            'calories' => 223,
            'img' => 'foto8181',
        ]);

        $this->insert('product', [
            'name' => 'Чак - Чак',
            'category_id' => 7,
            'weight' => '100/10/5/2',
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 29,
            'calories' => 49,
            'img' => 'foto15827',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Баварский"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 5,
            'calories' => 48,
            'img' => 'foto21087',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Баварский" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 8,
            'fats' => 12,
            'carbohydrates' => 19,
            'calories' => 227,
            'img' => 'foto18298',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Восточный"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 11,
            'fats' => 11,
            'carbohydrates' => 38,
            'calories' => 273,
            'img' => 'foto8115',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Восточный" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 10,
            'fats' => 9,
            'carbohydrates' => 32,
            'calories' => 232,
            'img' => 'foto11319',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Грузинский"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 2,
            'fats' => 1,
            'carbohydrates' => 13,
            'calories' => 43,
            'img' => 'foto15923',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Грузинский" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 3,
            'fats' => 2,
            'carbohydrates' => 19,
            'calories' => 60,
            'img' => 'foto15934',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Дамский"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 12,
            'fats' => 8,
            'carbohydrates' => 38,
            'calories' => 251,
            'img' => 'foto8109',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Дамский" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 11,
            'fats' => 6,
            'carbohydrates' => 32,
            'calories' => 209,
            'img' => 'foto11326',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Деликатесный"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 12,
            'fats' => 9,
            'carbohydrates' => 38,
            'calories' => 262,
            'img' => 'foto8108',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Деликатесный" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 11,
            'fats' => 8,
            'carbohydrates' => 32,
            'calories' => 230,
            'img' => 'foto11324',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Деревенский"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 13,
            'fats' => 11,
            'carbohydrates' => 40,
            'calories' => 285,
            'img' => 'foto8112',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Деревенский" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 12,
            'fats' => 9,
            'carbohydrates' => 33,
            'calories' => 244,
            'img' => 'foto11328',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Итальянский"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 15,
            'fats' => 11,
            'carbohydrates' => 39,
            'calories' => 307,
            'img' => 'foto16455',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Итальянский" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 15,
            'fats' => 11,
            'carbohydrates' => 39,
            'calories' => 307,
            'img' => 'foto16461',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Карелия"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 15,
            'fats' => 11,
            'carbohydrates' => 39,
            'calories' => 307,
            'img' => 'foto8113',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Карелия" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 14,
            'fats' => 10,
            'carbohydrates' => 32,
            'calories' => 267,
            'img' => 'foto11327',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Кинза"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 16,
            'fats' => 16,
            'carbohydrates' => 37,
            'calories' => 342,
            'img' => 'foto8103',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Кинза" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 16,
            'fats' => 15,
            'carbohydrates' => 31,
            'calories' => 307,
            'img' => 'foto11320',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Лесной"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 12,
            'fats' => 8,
            'carbohydrates' => 38,
            'calories' => 251,
            'img' => 'foto16451',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Лесной" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 12,
            'fats' => 8,
            'carbohydrates' => 38,
            'calories' => 251,
            'img' => 'foto16457',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Мужской"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 10,
            'fats' => 10,
            'carbohydrates' => 36,
            'calories' => 258,
            'img' => 'foto8110',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Мужской" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 11,
            'fats' => 11,
            'carbohydrates' => 32,
            'calories' => 254,
            'img' => 'foto11325',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Не детский"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 10,
            'fats' => 15,
            'carbohydrates' => 38,
            'calories' => 312,
            'img' => 'foto8110',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Не детский" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 9,
            'fats' => 13,
            'carbohydrates' => 32,
            'calories' => 270,
            'img' => 'foto11322',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Пьяная вишня"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 7,
            'fats' => 6,
            'carbohydrates' => 133,
            'calories' => 268,
            'img' => 'foto8114',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Пьяная вишня" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 6,
            'fats' => 5,
            'carbohydrates' => 130,
            'calories' => 230,
            'img' => 'foto11329',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Русский"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 8,
            'fats' => 6,
            'carbohydrates' => 42,
            'calories' => 235,
            'img' => 'foto8106',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Русский" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 7,
            'fats' => 4,
            'carbohydrates' => 36,
            'calories' => 194,
            'img' => 'foto11323',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Тайский"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 12,
            'fats' => 8,
            'carbohydrates' => 38,
            'calories' => 251,
            'img' => 'foto16453',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Тайский" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 12,
            'fats' => 8,
            'carbohydrates' => 38,
            'calories' => 251,
            'img' => 'foto16459',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Украинский"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 5,
            'calories' => 42,
            'img' => 'foto15922',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Украинский" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 7,
            'calories' => 45,
            'img' => 'foto15937',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Фермерский"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 5,
            'calories' => 34,
            'img' => 'foto15920',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Фермерский" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 2,
            'fats' => 2,
            'carbohydrates' => 6,
            'calories' => 46,
            'img' => 'foto15935',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Цезарь"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 14,
            'fats' => 15,
            'carbohydrates' => 45,
            'calories' => 340,
            'img' => 'foto8104',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Цезарь" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 12,
            'fats' => 16,
            'carbohydrates' => 36,
            'calories' => 315,
            'img' => 'foto11321',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Штрудель"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 8,
            'fats' => 10,
            'carbohydrates' => 97,
            'calories' => 293,
            'img' => 'foto11308',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Штрудель" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 7,
            'fats' => 9,
            'carbohydrates' => 92,
            'calories' => 254,
            'img' => 'foto11330',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Эксклюзивный"',
            'category_id' => 4,
            'weight' => '150/30',
            'proteins' => 2,
            'fats' => 1,
            'carbohydrates' => 5,
            'calories' => 36,
            'img' => 'foto15921',
        ]);

        $this->insert('product', [
            'name' => 'Чебурек "Эксклюзивный" двойной',
            'category_id' => 4,
            'weight' => '220/30',
            'proteins' => 3,
            'fats' => 2,
            'carbohydrates' => 6,
            'calories' => 48,
            'img' => 'foto15936',
        ]);

        $this->insert('product', [
            'name' => 'Чучвара с бараниной',
            'category_id' => 1,
            'weight' => '165/135/2',
            'proteins' => 2,
            'fats' => 1,
            'carbohydrates' => 4,
            'calories' => 34,
            'img' => 'foto18290',
        ]);

        $this->insert('product', [
            'name' => 'Шарики пикантные из говядины',
            'category_id' => 1,
            'weight' => '120/100/20/30',
            'proteins' => 20,
            'fats' => 7,
            'carbohydrates' => 33,
            'calories' => 263,
            'img' => 'foto11316',
        ]);

        $this->insert('product', [
            'name' => 'Шашлык из курицы с жареным картофелем',
            'category_id' => 1,
            'weight' => '150/100/45',
            'proteins' => 13,
            'fats' => 18,
            'carbohydrates' => 9,
            'calories' => 254,
            'img' => 'foto8188',
        ]);

        $this->insert('product', [
            'name' => 'Шоколадный фондан с мороженым',
            'category_id' => 7,
            'weight' => '100/50/2',
            'proteins' => 0,
            'fats' => 0,
            'carbohydrates' => 0,
            'calories' => 0,
            'img' => 'foto16236',
        ]);

        $this->insert('product', [
            'name' => 'Шурпа из баранины',
            'category_id' => 2,
            'weight' => '300/2',
            'proteins' => 4,
            'fats' => 3,
            'carbohydrates' => 5,
            'calories' => 64,
            'img' => 'foto8170',
        ]);

        $this->insert('product', [
            'name' => 'Яблочный штрудель',
            'category_id' => 7,
            'weight' => 134,
            'proteins' => 1,
            'fats' => 1,
            'carbohydrates' => 29,
            'calories' => 49,
            'img' => 'foto16229',
        ]);
    }
}
