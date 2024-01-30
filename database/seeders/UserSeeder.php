<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'pseudo' => 'kevindu72',
            'password' => bcrypt('azerty'),
            'email' => 'admin@test.fr',
            'phoneNumber' => '0630206333',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'image_id' => 1
        ]);
    }
}
