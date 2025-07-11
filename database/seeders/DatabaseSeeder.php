<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Database\Seeders\FacilitySeeder;
use Database\Seeders\TrainerSeeder;
use Database\Seeders\ProductSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed initial roles
        $roles = ['trainee', 'trainer', 'facility', 'vendor', 'admin'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        // Optionally, create a test admin user
        $admin = \App\Models\User::firstOrCreate([
            'email' => 'admin@vibecore.com',
        ], [
            'name' => 'Admin User',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        // Create some trainee users
        \App\Models\User::factory(20)->create()->each(function ($user) {
            $user->assignRole('trainee');
        });

        // Run other seeders
        $this->call([
            FacilitySeeder::class,
            TrainerSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
