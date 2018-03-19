<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MessageSubscriptionSeeder::class);
        $this->call(MessageSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
