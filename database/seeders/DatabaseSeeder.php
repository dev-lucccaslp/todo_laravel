<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Task;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this-> call([
            //UserSeeder::class,
            //CategorySeeder::class,
            //TaskSeeder::class,
        ]);

        User::factory(3)->create();
        Category::factory(10)->create();
        Task::factory(100)->create();
    }
}
