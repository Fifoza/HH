<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Creativity;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
        factory(Creativity::class, 10)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
