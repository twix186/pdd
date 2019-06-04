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
            
            ['id' => 1, 'text' => 'В и Г', 'is_correct' => , 'question_id' => 1,,,,],

        ];

        foreach ($items as $item) {
            \App\Option::create($item);
        }
    }
}
