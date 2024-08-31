<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // إنشاء 5 مستخدمين مع بيانات محددة
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => '12345678',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => '12345678',
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => '12345678',
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Alice Smith',
            'email' => 'alice@example.com',
            'password' => '12345678',
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Bob Johnson',
            'email' => 'bob@example.com',
            'password' => '12345678',
            'role' => 'user',
        ]);

        User::factory(55)->create(); 
    }
}
