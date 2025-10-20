<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'bookName' => 'Advance Web',
            'bookCode' => 'AW12398',
            'bookAuthor' => 'Laravel',
        ]);

        Book::create([
            'bookName' => 'PHP Programming',
            'bookCode' => 'PHP456',
            'bookAuthor' => 'John Doe',
        ]);

        Book::create([
            'bookName' => 'JavaScript Basics', 
            'bookCode' => 'JS789',
            'bookAuthor' => 'Jane Smith',
        ]);
    }
}