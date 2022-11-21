<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Categoria de Exemplo',
            'color' => '#009999',
            'user_id'=> 1
        ]);
        Category::create([
            'title' => 'Categoria de Exemplo2',
            'color' => '#009999',
            'user_id'=> 1
        ]);
        Category::create([
            'title' => 'Categoria de Exemplo3',
            'color' => '#009999',
            'user_id'=> 1
        ]);
        Category::create([
            'title' => 'Categoria de Exemplo4',
            'color' => '#009999',
            'user_id'=> 1
        ]);
    }
}
