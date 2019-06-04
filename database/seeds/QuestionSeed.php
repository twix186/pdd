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
            
            ['id' => 1, 'text' => 'Какие из указанных знаков запрещают движение водителям мопедов?', 'picture' => '',,,,],

        ];

        foreach ($items as $item) {
            \App\Question::create($item);
        }
    }
}
