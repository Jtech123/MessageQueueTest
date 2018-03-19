<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $typeId = rand(1, 2);
            Message::create([
                'sub_id' => $typeId,
                'content' => $factory->sentence,
            ]);
        }
    }
}
