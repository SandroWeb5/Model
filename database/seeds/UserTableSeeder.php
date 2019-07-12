<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'		=> 'Administrador Geral',
        	'email'		=> 'adm@adm.com',
        	'password'	=> bcrypt('adm'),
            'perm'      => 'Admin',
            'photo'     => 'user.jpg',
            'status'    => 'S',
        ]);
    }
}
