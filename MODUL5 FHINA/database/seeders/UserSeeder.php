<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Fhina',
            'no_hp' => '087815868069',
            'email' => 'fhinatksr@gmail.com',
            'password' => '12345678',
        ]);
    }
}