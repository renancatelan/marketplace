<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'      => 'Renan Catelan - administrador',
                'username'  => 'renan.catelan',
                'email'     => 'renancatelan@hotmail.com',
                'role'      => 'admin',
                'status'    => 'active',
                'password'  => bcrypt('password'),
            ],
            [
                'name'      => 'Elaine Catelan - vendedor',
                'username'  => 'elaine.catelan',
                'email'     => 'elainecatelan@hotmail.com',
                'role'      => 'vendor',
                'status'    => 'active',
                'password'  => bcrypt('password')
            ],
            [
                'name'      => 'Yasmin Catelan - Cliente',
                'username'  => 'yasmin.catelan',
                'email'     => 'yasmincatelan@hotmail.com',
                'role'      => 'user',
                'status'    => 'active',
                'password'  => bcrypt('password')
            ]
        ]);
    }
}
