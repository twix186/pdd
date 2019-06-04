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
            
            ['id' => 1, 'text' => 'Все', 'is_correct' => 1 , 'question_id' => 1],
			['id' => 2, 'text' => 'В и Г', 'is_correct' => 1, 'question_id' => 1],
			['id' => 3, 'text' => 'Только А', 'is_correct' => 1, 'question_id' => 1],
			['id' => 4, 'text' => 'Только Б', 'is_correct' => 1, 'question_id' => 1],
			['id' => 5, 'text' => 'Запрещает дальнейшее движение', 'is_correct' => 1, 'question_id' => 2],
			['id' => 6, 'text' => 'Разрешает движение и информирует о том, что вскоре будет включен запрещающий сигнал', 'is_correct' => 1, 'question_id' => 2],
			['id' => 7, 'text' => 'Предупреждает о неисправности светофора', 'is_correct' => 1, 'question_id' => 2],
			['id' => 8, 'text' => 'Во всех перечисленных случаях', 'is_correct' => 1, 'question_id' => 3],
			['id' => 9, 'text' => 'Перед остановкой', 'is_correct' => 1, 'question_id' => 3],
			['id' => 10, 'text' => 'Перед поворотом или разворотом', 'is_correct' => 1, 'question_id' => 3],
			['id' => 11, 'text' => 'Перед началом движения или перестроением', 'is_correct' => 1, 'question_id' => 3],
			['id' => 12, 'text' => 'Любой категории или подкатегории в течении 2 и более лет', 'is_correct' => 1, 'question_id' => 4],
			['id' => 13, 'text' => 'Только категории «A» или подкатегории «A1» в течении 2 и более лет', 'is_correct' => 1, 'question_id' => 4],
			['id' => 14, 'text' => 'Категории «A» или подкатегории «A1»', 'is_correct' => 1, 'question_id' => 4],
			['id' => 15, 'text' => '20 км/ч', 'is_correct' => 1, 'question_id' => 5],
			['id' => 16, 'text' => '30 км/ч', 'is_correct' => 1, 'question_id' => 5],
			['id' => 17, 'text' => '50 км/ч', 'is_correct' => 1, 'question_id' => 5],
			['id' => 18, 'text' => '60 км/ч', 'is_correct' => 1, 'question_id' => 5],
			['id' => 19, 'text' => 'Нельзя', 'is_correct' => 1, 'question_id' => 6],
			['id' => 20, 'text' => 'Можно, если Вы управляете такси', 'is_correct' => 1, 'question_id' => 6],
			['id' => 21, 'text' => 'Можно', 'is_correct' => 1, 'question_id' => 6],
			['id' => 22, 'text' => 'В обоих перечисленных случаях', 'is_correct' => 1, 'question_id' => 7],
			['id' => 23, 'text' => 'Остановившись на проезжей части из-за технической неисправности транспортного средства', 'is_correct' => 1, 'question_id' => 7],
			['id' => 24, 'text' => 'Остановившись непосредственно перед пешеходным переходом, чтобы уступить дорогу пешеходу', 'is_correct' => 1, 'question_id' => 7],
			['id' => 25, 'text' => 'Затормозить и полностью остановиться', 'is_correct' => 1, 'question_id' => 8],
			['id' => 26, 'text' => 'Затормозить и плавно направить автомобиль на проезжую часть', 'is_correct' => 1, 'question_id' => 8],
			['id' => 27, 'text' => 'Не прибегая к торможению, плавно вернуть автомобиль на проезжую часть', 'is_correct' => 1, 'question_id' => 8],
			['id' => 28, 'text' => 'Разрешен', 'is_correct' => 1, 'question_id' => 9],
			['id' => 29, 'text' => 'Разрешен только при технической неисправности транспортного средства', 'is_correct' => 1, 'question_id' => 9],
			['id' => 30, 'text' => 'Запрещен', 'is_correct' => 1, 'question_id' => 9],
			['id' => 31, 'text' => 'Перед знаком', 'is_correct' => 1, 'question_id' => 10],
			['id' => 32, 'text' => 'Перед перекрестком у линии разметки', 'is_correct' => 1, 'question_id' => 10],
			['id' => 33, 'text' => 'На перекрестке перед прерывистой линией разметки', 'is_correct' => 1, 'question_id' => 10],
			['id' => 34, 'text' => 'В любом месте по усмотрению водителя', 'is_correct' => 1, 'question_id' => 10],

        ];

        foreach ($items as $item) {
            \App\Option::create($item);
        }
    }
}
