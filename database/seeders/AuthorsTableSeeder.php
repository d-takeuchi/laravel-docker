<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i = 1; $i <= 10; $i++){
        //     $author =[
        //         'name' => '著名者' . $i,
        //         'kana' => 'チョメイシャ' . $i,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ];
        //     DB::table('authors')->insert($author);
        // }

        $faker = Factory::create('ja_JP');
        for($i = 0; $i < 10; $i++){
            $author = [
                'name' => $faker->name,
                'kana' => $faker->kanaName,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            DB::table('authors')->insert($author);
        }
    }
}
