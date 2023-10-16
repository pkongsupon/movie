<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Genre::factory()->createMany([
            ['genre_name' => 'Action'],
            ['genre_name' => 'Animation'],
            ['genre_name' => 'Comedy'],
            ['genre_name' => 'Crime and mystery'],
            ['genre_name' => 'Drama'],
            ['genre_name' => 'Fantasy'],
            ['genre_name' => 'Historical'],
            ['genre_name' => 'Horror'],
            ['genre_name' => 'Romance'],
            ['genre_name' => 'Satire'],
            ['genre_name' => 'Science Fiction'],
            ['genre_name' => 'Speculative'],
            ['genre_name' => 'Thriller'],
            ['genre_name' => 'Isekai'],
            ['genre_name' => 'Western'],
        ]);
    }
}
