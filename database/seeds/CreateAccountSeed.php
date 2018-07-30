<?php

use Illuminate\Database\Seeder;

class CreateAccountSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Account::class, 2)->create();
    }
}
