<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "ffcannon";
        $user->email = "admin@fraganciascannon.com.ar";
        $user->password = \Hash::make('4!@AJnV4A');

        $user->assignRole('admin');
    	
    	$user->save();
    }
}
