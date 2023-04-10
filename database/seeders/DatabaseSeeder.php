<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('people')->insert([[
            "name"=>"Азамат Кудзаев",
            "description"=>"Какое-то описание Азамата"
        ],
        [
            "name"=>"Сослан Бурнаце",
            "description"=>"Какое-то описание Соса"
        ],
        [
            "name"=>"Руслан Габисов",
            "description"=>"Какое-то описание меня"
        ],
        [
            "name"=>"Андрей Габараев",
            "description"=>"Какое-то описание Андрея"
        ],
        [
            "name"=>"Богдан Азиев",
            "description"=>"Какое-то описание Богдана"
        ]]);
    
    }
}
