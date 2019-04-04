<?php

use App\Recipe;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create()->each(function ($user) {
            for ($i = 0; $i < rand(0, 20); $i++) {
                $user->recipes()->save(factory(App\Recipe::class)->make());
            }
        });
    }
}
