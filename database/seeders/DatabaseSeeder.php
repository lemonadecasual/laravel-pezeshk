<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'danial',
            'email' => 'subdanial@gmail.com',
            'role' => 'admin',
            'phone' => '09035366888',
        ]);
        \App\Models\User::factory(2)->create();
    }
}
