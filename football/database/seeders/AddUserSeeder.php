<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => 'uytran99',
            'full_name' => 'mlem',
            'email' => 'uytran99@gmail.com',
            'password' => Hash::make('password'),
            'role' => 1
        ]);
    }
}
