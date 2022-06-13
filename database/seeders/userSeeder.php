<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('users')->insert([
                'name' => Str::random(15),
                'username' => Str::random(7),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'church' => Str::random(15),
                'location' => Str::random(10),
            ]);
        }
    }
}
