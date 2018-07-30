<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Usuário 01",
            "email"=>"user1@gmail.com",
            "password"=>bcrypt('123456')
        ]);
    }
}
