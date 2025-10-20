<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'bookName' => 'Advance Web',
                'bookCode' => 'AW12398',
                'bookAuthor' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bookName' => 'PHP Programming',
                'bookCode' => 'PHP456', 
                'bookAuthor' => 'John Doe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bookName' => 'JavaScript Basics',
                'bookCode' => 'JS789',
                'bookAuthor' => 'Jane Smith',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
