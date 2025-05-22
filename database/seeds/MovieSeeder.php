<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie')->insert([
            [
                'imBD' => 1,
                'title' => 'The Shawshank Redemption',
                'year' => 1994,
                'genre' => 'Drama',
                'poster' => 'https://example.com/poster1.jpg',
            ],
            [
                'imBD' => 2,
                'title' => 'The Godfather',
                'year' => 1972,
                'genre' => 'Crime, Drama',
                'poster' => 'https://example.com/poster2.jpg',
            ],
            [
                'imBD' => 3,
                'title' => 'The Dark Knight',
                'year' => 2008,
                'genre' => 'Action',
                'poster' => 'https://example.com/poster3.jpg',
            ],
        ]);
    }
}
