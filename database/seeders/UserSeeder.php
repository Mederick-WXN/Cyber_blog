<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => '0xMed',
            'email' => '0xmed@0xcyb3r.fr',
            'password' => Hash::make('admin')
        ]);
    }
}
