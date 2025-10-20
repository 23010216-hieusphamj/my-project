<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Dữ liệu mẫu không cần database
        $books = [
            (object)['id' => 1, 'bookName' => 'Advance Web', 'bookCode' => 'AW12398', 'bookAuthor' => 'Laravel', 'created_at' => now()],
            (object)['id' => 2, 'bookName' => 'PHP Programming', 'bookCode' => 'PHP456', 'bookAuthor' => 'John Doe', 'created_at' => now()],
            (object)['id' => 3, 'bookName' => 'JavaScript Basics', 'bookCode' => 'JS789', 'bookAuthor' => 'Jane Smith', 'created_at' => now()],
        ];
        
        return view('book', compact('books'));
    }
}