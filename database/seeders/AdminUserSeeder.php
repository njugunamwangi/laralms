<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Ndachi',
            'email' => 'info@ndachi.dev',
            'password' => bcrypt('password')
        ]);

        $user->assignRole(Role::ADMIN);
    }
}
