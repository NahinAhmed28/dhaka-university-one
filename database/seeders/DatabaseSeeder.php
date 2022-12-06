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

        DB::table('abouts')->insert([
            'description' => 'description description description description',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

        DB::table('missions')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'image' => 'default.png' ,
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('visions')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'image' => 'default.png' ,
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('galleries')->insert([
            'category' => 'category 1',
            'image' => 'default.png' ,
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('services')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'image' => 'default.png',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

        DB::table('organizations')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'image' => 'default.png',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

        DB::table('completed_research')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('ongoing_research')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

        DB::table('trainings')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'image' => 'default.png',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('fellowships')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'image' => 'default.png',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('higher_education')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'image' => 'default.png',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('internships')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'image' => 'default.png',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('publications')->insert([
            'title' => 'title',
            'description' => 'description description description description',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('contacts')->insert([
            'name' => 'title',
            'email' => 'description description description description',
            'phone' => 'description description description description',
            'address' => 'description description description description',
            'message' => 'description description description description',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

    }
}
