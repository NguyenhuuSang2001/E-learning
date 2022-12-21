<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Faker\Provider\DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nguyen Huu Sang',
            'email' => 'demo@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => DateTime::dateTime('now'),
        ]);
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => DateTime::dateTime('now'),
            ]);
        }
    }
}
