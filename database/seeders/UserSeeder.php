<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Administrador JoinPet',
            'email' => 'administrador@gmail.com',
            'password' => Hash::make('123456789')
        ])->assignRole('Super Administrador');;
    }
}
