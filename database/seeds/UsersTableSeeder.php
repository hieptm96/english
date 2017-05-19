<?php

use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Database\Capsule\Manager as Capsule;
use Cartalyst\Sentinel\Laravel\Facades\Activation;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Sentinel::register(array(
            'email'    => 'admin@gmail.com',
            'password' => 'hiep12',
        ));
        Activation::create($user);

        $role = Sentinel::findRoleByName('Admin');
        $role->users()->attach($user);
    }
}
