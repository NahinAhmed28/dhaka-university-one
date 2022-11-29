<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Company;
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

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        for($i=0; $i<=30; $i++):
//            DB::table('categories')
//                ->insert([
//                    'name' => $faker->name,
//                    'created_at'=>	now(),
//                    'updated_at'=>now(),
//                ]);
//        endfor;
//
//        for($i=0; $i<=15; $i++):
//            DB::table('companies')
//                ->insert([
//                    'title' =>$faker->company,
//                    'created_at'=>	now(),
//                    'updated_at'=>now(),
//                ]);
//        endfor;
//
//        for($i=0; $i<=100; $i++):
//            DB::table('products')
//                ->insert([
//                    'name' => $faker->name,
//                    'description' => $faker->sentence(20),
//                    'company_id' => Company::all()->random()->id,
//                    'category_id' => Category::all()->random()->id,
//                    'price' => $faker->randomFloat(2, 0, 10000),
//                    'expire_date' =>  $faker->dateTimeBetween('-2 years')->format('Y-m-d'),
//                    'created_at'=>	now(),
//                    'updated_at'=>now(),
//                ]);
//        endfor;

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

//        DB::table('categories')->insert([
//
//            'name' => "offer",
//            'company' => 'abcd efg hij ',
//            'start_date' =>  Carbon::parse('2000-01-01'),
//            'end_date' =>  Carbon::parse('2000-01-01'),
//            'created_at'=>	now(),
//            'updated_at'=>now(),
//        ]);


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

    }
}
