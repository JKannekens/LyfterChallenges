<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'FizzBuzz',
                'slug' => 'fizzbuzz',
                'content' => 'This is the fizzbuzz page',
            ], [
                'title' => 'StringParser',
                'slug' => 'parser',
                'content' => 'This is the parser page',
            ]
        ]);
    }
}
