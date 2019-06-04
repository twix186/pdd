<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'text' => 'В и Г', 'is_correct' => 0, 'question_id' => 1, 'created_at' => '', 'updated_at' => '', 'deleted_at' => '',],

        ];

        foreach ($items as $item) {
            \App\Option::create($item);
        }
    }
}
