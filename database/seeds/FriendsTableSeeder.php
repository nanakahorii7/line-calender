<?php

use Illuminate\Database\Seeder;
use App\Friend;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Friend::class, 10)
        ->create();
    }
}
