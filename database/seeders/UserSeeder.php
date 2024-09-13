<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Admin',
            'email' => 'pengurusmasjid077@gmail.com',
            'password' =>  Hash::make('adminpassword'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Tahfizd pejuang subuh 1',
            'email' => 'pejuangsubuh1@gmail.com',
            'password' =>  Hash::make('adminpassword'),
            'role' => 'admin1',
        ]);
        User::create([
            'name' => 'Tahfizd pejuang subuh 2',
            'email' => 'pejuangsubuh2@gmail.com',
            'password' =>  Hash::make('adminpassword'),
            'role' => 'admin2',
        ]);
        User::create([
            'name' => 'Tahfizd pejuang subuh 3',
            'email' => 'pejuangsubuh3@gmail.com',
            'password' =>  Hash::make('adminpassword'),
            'role' => 'admin3',
        ]);

    }
}
