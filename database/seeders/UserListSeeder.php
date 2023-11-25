<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('user_lists')->insert([
        //     'user_id' => str::random(10),
        //     'email' => str::random(10).'@gmail.com',
        //     'address' => str::random(10),
        //     'password' => Hash::make('password'),
        // ]);
    }
}
