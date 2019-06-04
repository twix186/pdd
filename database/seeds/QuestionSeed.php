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
            
            ['id' => 1, 'text' => 'Какие из указанных знаков запрещают движение водителям мопедов?', 'picture' => '', 'created_at' => '', 'updated_at' => '', 'deleted_at' => '',],

        ];

        foreach ($items as $item) {
            \App\Question::create($item);
        }
    }
}
