<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\StatesTableSeeder;
use Database\Seeders\CitiesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Donar Azhar',
            'email' => 'donar@email.com',
            'password' => bcrypt('1234'),

        ]);

        $this->call([
            CountrySeeder::class,
            StatesTableSeeder::class,
            CitiesTableSeeder::class,
        ]);

        Department::create(['name' => 'Laravel']);
    }
}
