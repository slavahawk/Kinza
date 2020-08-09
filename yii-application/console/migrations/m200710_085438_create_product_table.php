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
            'description' => $this->text(),
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
            'price' => 280,
            'description' => 'Говядина с грибами, тушеная в сливках с луком и зеленью, подается с гарниром на выбор: гречка с маслом, картофельным пюре',
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
            'price' => 280,
            'description' => 'Сочное мясо свинины и говядины с луком и обжаренным яйцом, подается с картофелем пюре, малосольными огурчиками, салатом из свежей капусты',
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
            'price' => 275,
            'description' => 'Баранина, картофель, томаты, грибы, перец болгарский, лук, кинза',
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
            'price' => 120,
            'description' => 'Густой наваристый свекольник с говядиной, чесноком и луком, подается со сметаной и зеленью',
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
            'price' => 155,
            'description' => 'Американский, шоколадный пирог с грецким орехом',
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
            'price' => 129,
            'description' => 'Вареники с вишней и сметаной',
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
            'price' => 89,
            'description' => 'Вареники с капустой, подаются со сметаной',
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
            'price' => 89,
            'description' => 'Вареники с картофелем, подаются со сметаной',
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
            'price' => 129,
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
            'price' => 129,
            'description' => 'Вареники с творогом и изюмом и сметаной',
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
            'price' => 129,
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
            'price' => 125,
            'description' => 'Фирменный десерт от шеф-повара! Подается со сгущённым молоком',
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
            'price' => 280,
            'description' => 'Рубленая телятина в виноградных листьях с восточными травами, подается с картофельным пюре, аджикой собственного приготовления и сметаной',
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
            'price' => 125,
            'description' => 'Капуста маринованная, огурцы малосольные, помидоры, помидоры черри, лук, маслины, лист салата, имбирь',
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
            'price' => 165,
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
            'price' => 69,
            'description' => 'Колбаска шоколадная со сливочным соусом с жареным арахисом и сливочным соусом',
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
            'price' => 285,
            'description' => 'Набор из куриных крыльев, гренок с сыром, картофеля айдахо, пельмешек фри, подается с соусом',
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
            'price' => 198,
            'description' => 'Набор из подкопченых колбасок, копченого сыра, картофельных шариков и чесночных гренок, подается с соусом',
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
            'price' => 148,
            'description' => 'с сухариками, зеленью и луком',
            'img' => 'foto8171',
        ]);

        $this->insert('product', [
            'name' => 'Крем-суп из шпината',
            'category_id' => 2,
            'weight' => 250,
            'proteins' => 0,
            'fats' => 0,
            'carbohydrates' => 0,
            'calories' => 0,
            'price' => 159,
            'description' => 'Картофель, шпинат, луковые чипсы, сливки',
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
            'price' => 229,
            'description' => 'Куриная отбивная в бархатной панировке с картофельным пюре',
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
            'price' => 99,
            'description' => 'Суп с картофелем, фрикадельками, домашней лапшой, луком и зеленью',
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
            'price' => 160,
            'description' => 'Домашняя лапша с говядиной и овощами, кинза',
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
            'price' => 159,
            'description' => 'Суп с куриным филе, рисом, яйцом, соком и цедрой лимона',
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
            'price' => 155,
            'description' => 'Картофель, лук-порей, сливки',
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
            'price' => 169,
            'description' => 'Суп из телятины, блинчиков из яиц, клецок, болгарского перца, лука и чеснока',
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
            'price' => 165,
            'description' => 'Собственного приготовления (свинина, говядина) с аджикой из свежих овощей (4 шт.)',
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
            'price' => 165,
            'description' => 'Манты с курицей подаются со сметаной',
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
            'price' => 135,
            'description' => 'Колбаса сырокопченая, сало соленое, сервелат, лист салата, горчица, хрен',
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
            'price' => 169,
            'description' => 'Наггетсы куриные с соусом и попкорном',
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
            'price' => 268,
            'description' => 'Говядина, картофель, томаты, лук репчатый, зёрна граната, чеснок, аджика',
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
            'price' => 129,
            'description' => 'на квасе/на кефире',
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
            'price' => 155,
            'description' => 'Подаются с соусом на выбор: масло сливочное, сметана, майонез, аджика',
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
            'price' => 178,
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
            'price' => 155,
            'description' => 'Подаются с соусом на выбор: масло сливочное, сметана, майонез, аджика',
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
            'price' => 285,
            'description' => 'Рыбные палочки, кольца кальмаров, сыр жареный во фритюре, копченый сыр, подается с соусом',
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
            'price' => 158,
            'description' => 'Из говядины, чеснока, лука, с добавлением зиры и барбариса',
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
            'price' => 165,
            'description' => 'Картофель, копченая говядина и курочка, ветчина, лук, подается со сметаной, лимоном, маслинами и зеленью',
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
            'price' => 219,
            'description' => 'Горбуша х/к, скумбрия х/к, огурец, лимон, масло сливочное, листья салата, редис, чипсы, зелень',
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
            'price' => 89,
            'description' => 'Салат из отварных овощей, зеленого горошка, маринованного огурца, с подсолнечным маслом',
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
            'price' => 158,
            'description' => 'Свежие офощи, фетакса, листья салата, маслины, лук красный, масляная заправка',
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
            'price' => 65,
            'description' => 'С морковью, свежим огурцом, заправлен маслом',
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
            'price' => 165,
            'description' => 'Морковь острая, перец болгарский, лапша рисовая, говядина, листья салата, масляная заправка',
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
            'price' => 160,
            'description' => 'Обжаренное нежное куриное филе, морковь по-корейски, огурцы маринованные, грибы свежие, сыр, сухарики, листья салата, майонезная заправка',
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
            'price' => 115,
            'description' => 'Домашний салат с картофелем, маринованным огурцом, морковью, зеленым горошком и вареной колбасой с майонезной заправкой',
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
            'price' => 189,
            'description' => 'Теплый салат из телятины, баклажанов, болгарского перца, чеснока и кинзы',
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
            'price' => 115,
            'description' => 'Классическая селедочка с отварными овощами, яйцом и майонезом',
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
            'price' => 158,
            'description' => 'Говядина, яйцо, редька, лук жареный, грецкий орех, майонезная заправка',
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
            'price' => 138,
            'description' => 'Печень, сердце, лук, томаты, кинза',
            'img' => 'foto15924',
        ]);

        $this->insert('product', [
            'name' => 'Салат "Фруктовый"',
            'category_id' => 7,
            'weight' => 200,
            'proteins' => 3,
            'fats' => 3,
            'carbohydrates' => 30,
            'calories' => 159,
            'price' => 95,
            'description' => 'Яблоко, банан, киви, апельсин, сливочный соус',
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
            'price' => 180,
            'description' => 'Листья салата с сыром «Пармезан», сухариками, помидорами Черри и нежным куриным филе под соусом "Цезарь"',
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
            'price' => 120,
            'description' => 'Говядина обжаренная, картофель пай, свекла, морковь, капуста, огурец свежий, чеснок, масляная заправка',
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
            'price' => 155,
            'description' => 'С телятиной и зернами граната',
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
            'price' => 108,
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
            'price' => 108,
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
            'price' => 108,
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
            'price' => 108,
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
            'price' => 155,
            'description' => 'Кальмары отварные, морская капуста, огурец свежий, капуста белокочанная, яйцо, зеленый горошек, майонез',
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
            'price' => 179,
            'description' => 'Лист салата, тунец консервированный, помидоры черри, огурец свежий, яйцо, лук красный, оливковое масло',
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
            'price' => 149,
            'description' => 'Ветчина, сыр, томаты свежие, огурец свежий, яйцо, майонезная заправка',
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
            'price' => 85,
            'description' => 'Варёная сгущенка, арахисовый грильяж',
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
            'price' => 105,
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
            'price' => 99,
            'description' => 'Шпинат, жареный лук, тёртая брынза',
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
            'price' => 95,
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
            'price' => 95,
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
            'price' => 105,
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
            'price' => 105,
            'description' => 'С отварным картофелем, луком и масляной заправкой',
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
            'price' => 148,
            'description' => 'с чесночной гренкой, зеленью и луком',
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
            'price' => 135,
            'description' => 'Сыр коса, твердый сыр, брынза в специях, брецель, зерна граната, мед',
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
            'price' => 198,
            'description' => 'Набор из мини-чебуреков с мясом, подкопченых колбасок, гренок чесночных, картофельных шариков, подается с соусом',
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
            'price' => 139,
            'description' => 'Медовые коржи, прослоенные сгущенным молоком и сметаной, поливается шоколадным топингом',
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
            'price' => 265,
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
            'price' => 368,
            'description' => 'Филе кеты в сливках запеченное в духовом шкафу, подается с рисом, соусом «Тар-тар», лимоном и зеленью',
            'img' => 'foto8189',
        ]);

        $this->insert('product', [
            'name' => 'Фрикадельки из курицы с картофельными дольками',
            'category_id' => 1,
            'weight' => 2508,
            'proteins' => 1,
            'fats' => 3,
            'carbohydrates' => 0,
            'calories' => 32,
            'price' => 265,
            'description' => 'Фрикадельки из курицы с картофельными дольками в сливочном соусе подаются со свежими томатами и огурцом',
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
            'price' => 89,
            'description' => 'Яблоки, киви, банан, апельсин, попкорн, зёерна граната',
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
            'price' => 169,
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
            'price' => 165,
            'description' => 'Собственного приготовления (говядина) с аджикой из свежих овощей, (5шт)',
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
            'price' => 99,
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
            'price' => 108,
            'description' => 'Чебурек с охотничьими колбасками, беконом, луком, грибами, сыром подается со сметаной',
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
            'price' => 165,
            'description' => 'Чебурек с охотничьими колбасками, беконом, луком, грибами, сыром подается со сметаной',
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
            'price' => 108,
            'description' => 'Баранина с луком и кинзой, приправленный чили-перцем,подается со сметаной',
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
            'price' => 165,
            'description' => 'Баранина с луком и кинзой, приправленный чили-перцем,подается со сметаной',
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
            'price' => 108,
            'description' => 'Чебурек с творогом, курагой, грецким орехом, сметаной, подается со сливочным соусом',
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
            'price' => 165,
            'description' => 'Чебурек с творогом, курагой, грецким орехом, сметаной, подается со сливочным соусом',
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
            'price' => 108,
            'description' => 'Сочный чебурек, с начинкой из телятины и лука, подается со сметаной',
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
            'price' => 108,
            'description' => 'Сочный чебурек, с начинкой из телятины и лука, подается со сметаной',
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
            'price' => 108,
            'description' => 'Сочный чебурек, с нежной курочкой, сыром, луком, грибами, подается сметаной',
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
            'price' => 165,
            'description' => 'Сочный чебурек, с нежной курочкой, сыром, луком, грибами, подается сметаной',
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
            'price' => 108,
            'description' => 'Куриные потрошка с луком и сливками, подается со сметаной',
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
            'price' => 165,
            'description' => 'Куриные потрошка с луком и сливками, подается со сметаной',
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
            'price' => 108,
            'description' => 'Лёгкий, оригинальный чебурек с ветчиной и сыром, подаётся с листьями салата, вялеными томатами, сыром "Моцарелла" и соусом крем-бальзамик',
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
            'price' => 165,
            'description' => 'Лёгкий, оригинальный чебурек с ветчиной и сыром, подаётся с листьями салата, вялеными томатами, сыром "Моцарелла" и соусом крем-бальзамик',
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
            'price' => 108,
            'description' => 'Начинка из рыбы лососевых пород, с сыром, луком, подается со сметаной',
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
            'price' => 165,
            'description' => 'Начинка из рыбы лососевых пород, с сыром, луком, подается со сметаной',
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
            'price' => 108,
            'description' => 'Хрустящее тесто с тающей начинкой из домашней брынзы, сыра «Гауда», зеленью кинзы, подается со сметаной',
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
            'price' => 165,
            'description' => 'Хрустящее тесто с тающей начинкой из домашней брынзы, сыра «Гауда», зеленью кинзы, подается со сметаной',
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
            'price' => 108,
            'description' => 'Чебурек с вешенками и шампиньонами в сливках, с добавлением лука, подаётся со сметаной',
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
            'price' => 165,
            'description' => 'Чебурек с вешенками и шампиньонами в сливках, с добавлением лука, подаётся со сметаной',
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
            'price' => 108,
            'description' => 'Аппетитный чебурек с говядиной и свининой с добавлением лука, подается со сметаной',
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
            'price' => 165,
            'description' => 'Аппетитный чебурек с говядиной и свининой с добавлением лука, подается со сметаной',
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
            'price' => 108,
            'description' => 'Сочный чебурек, начиненный свининой, пряностями, луком, подается со сметаной',
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
            'price' => 165,
            'description' => 'Сочный чебурек, начиненный свининой, пряностями, луком, подается со сметаной',
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
            'price' => 108,
            'description' => 'Хрустящее тесто с начинкой из свежей вишни с добавлением коньяка, подается с соусом из свежей вишни',
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
            'price' => 165,
            'description' => 'Хрустящее тесто с начинкой из свежей вишни с добавлением коньяка, подается с соусом из свежей вишни',
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
            'price' => 108,
            'description' => 'Начинен толченым картофелем и жареными грибами с добавлением лука, подается со сметаной',
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
            'price' => 165,
            'description' => 'Начинен толченым картофелем и жареными грибами с добавлением лука, подается со сметаной',
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
            'price' => 108,
            'description' => 'Чебурек с говядиной, имбирём и Тайским соусом чили',
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
            'price' => 165,
            'description' => 'Чебурек с говядиной, имбирём и Тайским соусом чили',
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
            'price' => 108,
            'description' => 'Чебурек с рубленным мясом, квашенной капустой, салом, луком, подается со сметаной',
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
            'price' => 165,
            'description' => 'Чебурек с рубленным мясом, квашенной капустой, салом, луком, подается со сметаной',
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
            'price' => 108,
            'description' => 'Чебурек с индейкой, куриным филе, капустой, луком, подается со сметаной',
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
            'price' => 165,
            'description' => 'Чебурек с индейкой, куриным филе, капустой, луком, подается со сметаной',
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
            'price' => 108,
            'description' => 'Хрустящее тесто с начинкой из курицы, сыра, томатов, подается с листьями салата, сухариками, соусом «Цезарь»',
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
            'price' => 165,
            'description' => 'Хрустящее тесто с начинкой из курицы, сыра, томатов, подается с листьями салата, сухариками, соусом «Цезарь»',
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
            'price' => 108,
            'description' => 'Чебурек с яблоками, изюмом, грецким орехом и корицей, подается с вишневым соусом',
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
            'price' => 165,
            'description' => 'Чебурек с яблоками, изюмом, грецким орехом и корицей, подается с вишневым соусом',
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
            'price' => 108,
            'description' => 'Чебурек с куриным филе, индейкой, горбушей в сливках, луком, подается со сметаной',
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
            'price' => 165,
            'description' => 'Чебурек с куриным филе, индейкой, горбушей в сливках, луком, подается со сметаной',
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
            'price' => 155,
            'description' => 'Узбекские пельмешки с бульоном из свежих овощей, кинзой',
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
            'price' => 255,
            'description' => 'Из говядины на шпажке с картофелем фри и соусом',
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
            'price' => 255,
            'description' => 'Шашлык из курицы с жареным картофелем, маринованным луком, аджикой из свежих овощей собственного приготовления',
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
            'price' => 155,
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
            'price' => 165,
            'description' => 'Суп с картофелем, луком, морковью, болгарским перцем, кинзой',
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
            'price' => 165,
            'description' => 'Штрудель яблочный с карамелью, мороженым, топингом и лимонным соусом',
            'img' => 'foto16229',
        ]);
    }
}
