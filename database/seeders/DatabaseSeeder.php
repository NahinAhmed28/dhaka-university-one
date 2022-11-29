<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();


        DB::table('users')->insert([
            'name' => 'admin',
            'email' =>'admin'.'@gmail.com',
            'password' =>Hash::make('password'),
            'email_verified_at' => now(),
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'name' => "user",
            'email' => 'user'.'@gmail.com',
            'password' =>Hash::make('password'),
            'email_verified_at' => now(),
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);


        DB::table('abouts')->insert([
            'description' => 'description description description description',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

        DB::table('missions')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'image' => NULL,
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('services')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'image' => NULL,
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

    }
}
