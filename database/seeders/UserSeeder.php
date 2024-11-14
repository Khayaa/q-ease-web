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
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Thabo Mbeki',
            'email' => 'thabo.mbeki@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Nelson Mandela',
            'email' => 'nelson.mandela@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Desmond Tutu',
            'email' => 'desmond.tutu@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Winnie Mandela',
            'email' => 'winnie.mandela@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Albertina Sisulu',
            'email' => 'albertina.sisulu@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
