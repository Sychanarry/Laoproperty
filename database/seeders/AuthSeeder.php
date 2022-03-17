<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [       'name' => 'admin',
                    'user_name' => 'admin',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('112233'),
                    'user_type' => 1,
                    'office' => 'bdb',
                    'tel' => '778899445566'
            ]
        );
    }
}

