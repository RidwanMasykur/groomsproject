<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'PetaniJamur']);
        Role::create(['name' => 'Mebel']);
        \App\Models\User::create([
            'name' => 'Ridwan',
            'email' => 'ridwanmasykur05@gmail.com',
            'address' => 'btb',
            'phone' => '08978676753',
            'password' => bcrypt('123')
        ])->assignRole('PetaniJamur');

        \App\Models\User::create([
            'name' => 'User',
            'email' => 'gunzxx@gmail.com',
            'address' => 'btb',
            'phone' => '08978676753',
            'password' => bcrypt('123')
        ])->assignRole('Mebel');
    }
}
