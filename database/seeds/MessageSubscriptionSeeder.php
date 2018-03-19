<?php

use Illuminate\Database\Seeder;
use App\MessageSubscription;

class MessageSubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MessageSubscription::create([
            'type' => 'error'
        ]);

        MessageSubscription::create([
            'type' => 'info'
        ]);
    }
}
