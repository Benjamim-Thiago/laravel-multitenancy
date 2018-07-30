<?php

use Illuminate\Database\Seeder;
use App\Category;
class CreateCategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            "name" => "Eletroeletrônicos"
        ]);

        $category = Category::create([
            "name" => "Informática"
        ]);

        $category = Category::create([
            "name" => "Escritório"
        ]);
        $category = Category::create([
            "name" => "Cama mesa e Banho"
        ]);
        $category = Category::create([
            "name" => "Brinquedos"
        ]);
        $category = Category::create([
            "name" => "Celulares"
        ]);
        $category = Category::create([
            "name" => "Esporte"
        ]);
        $category = Category::create([
            "name" => "Automóveis"
        ]);
    }
}
