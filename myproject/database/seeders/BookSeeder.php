<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Book::create ([
            'title'=>'Cha giau cha ngheo',
            'author' => 'caochien',
            'published_year' => '2003',
        ]);
        Book::create ([
            'title'=>'title example 2',
            'author' => 'hoangxon',
            'published_year' => '2004',
        ]);
    }
}
