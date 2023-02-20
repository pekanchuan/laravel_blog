<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        DB::table("categories")->insert([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);
    }
}
