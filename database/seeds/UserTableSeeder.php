<?php

// UsersTableSeeder.php
use Illuminate\Database\Seeder;
use App\User as User; // to use Eloquent Model

class UserTableSeeder extends Seeder {
    public function run() {
        // clear table
        User::truncate();
        // add 1st user
        User::create( [
            'name' => 'Hilmy Syarif' ,
            'email' => 'hilmysyarif@gmail.com' ,
            'password' => bcrypt('benjo99'),
        ] );
    }
}