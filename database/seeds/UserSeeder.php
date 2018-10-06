<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Ahmad Fatoni', 'email' => 'fatoni@dot-indonesia.com', 'password' => 'asdkhsakhdsajdh']);
    }
}
