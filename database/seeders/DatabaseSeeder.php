<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create()->each(function($user) {
            $user->questions()->saveMany(
                Question::factory(rand(1,5))->make()
            );
        });
        

    }
}
