<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => 'Mohamad Ridwan Masykur',
        //     'email' => 'ridwanmasykur05@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        // User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('123')
        ]);
    }
}
