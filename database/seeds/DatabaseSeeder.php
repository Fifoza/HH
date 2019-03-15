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
        $images = ['hb1.jpeg', 'hb2.jpeg', 'hb3.jpeg',];
        factory(Creativity::class)->create(['user_id' => 1, 'image' => $images[0], 'description' => 'Честит Рожден Ден!']);
        factory(Creativity::class)->create(['user_id' => 2, 'image' => $images[1], 'description' => 'Честит Рожден Ден!']);
        factory(Creativity::class)->create(['user_id' => 3, 'image' => $images[2], 'description' => 'Честит Рожден Ден!']);
        //factory(Creativity::class, 10)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
