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
        factory(\App\Category::class, 10)->create([
            "account_id"=>1
        ]);

        factory(\App\Category::class, 10)->create([
            "account_id"=>2
        ]);
    }
}
