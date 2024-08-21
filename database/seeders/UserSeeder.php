<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Utilize o faker para gerar dados aleatórios
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'age' => $faker->numberBetween(18, 60),
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Você pode ajustar a senha conforme necessário
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'summary' => $faker->paragraph,
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
