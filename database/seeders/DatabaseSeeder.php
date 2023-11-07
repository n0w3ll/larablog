<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Post::factory(50)->create();
        
        $adminUser = User::factory()->create([
            'email' => 'admin@user.com',
            'name' => 'Administrator',
            'password'=> bcrypt('abc12345'),

        ]);

        $adminRole = Role::create([
            'name' => 'admin'
        ]);

        $adminUser->assignRole($adminRole);
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
