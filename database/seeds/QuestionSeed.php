<?php

use Illuminate\Database\Seeder;

class QuestionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'text' => 'Какие из указанных знаков запрещают движение водителям мопедов?', 'picture' => 'https://static.am/pdd/ticket/xs/2/81/2816aa6dced3fae09660a3c11d570d48.jpg',],
			['id' => 2, 'text' => 'Что означает мигание зеленого сигнала светофора?', 'picture' => '',],
			['id' => 3, 'text' => 'Водитель обязан подавать сигналы световыми указателями поворота (рукой):', 'picture' => '',],
			['id' => 4, 'text' => 'Для перевозки людей на мотоцикле водитель должен иметь водительское удостоверение на право управления транспортными средствами:', 'picture' => '',],
			['id' => 5, 'text' => 'С какой максимальной скоростью Вы можете продолжить движение за знаком?', 'picture' => 'https://static.am/pdd/ticket/xs/a/c0/ac097594153fc47862d3e0533ce8775f.jpg',],
			['id' => 6, 'text' => 'Можно ли Вам остановиться в указанном месте для посадки пассажира?', 'picture' => 'https://static.am/pdd/ticket/xs/4/51/4513b479ae8aff7bb63162c90dd7c387.jpg',],
			['id' => 7, 'text' => 'В каком случае водитель совершит вынужденную остановку?', 'picture' => '',],
			['id' => 8, 'text' => 'В случае, когда правые колеса автомобиля наезжают на неукрепленную влажную обочину, рекомендуется:', 'picture' => '',],
			['id' => 9, 'text' => 'Разрешен ли Вам съезд на дорогу с грунтовым покрытием?', 'picture' => 'https://static.am/pdd/ticket/xs/a/9a/a9a93b51e297ee4fe8d6da751f6266c4.jpg',],
			['id' => 10, 'text' => 'Вы намерены повернуть налево. Где следует остановиться, чтобы уступить дорогу легковому автомобилю?', 'picture' => 'https://static.am/pdd/ticket/xs/2/08/208ea094c5e627c1cde60ab6ac647a97.jpg',],

        ];

        foreach ($items as $item) {
            \App\Question::create($item);
        }
    }
}
