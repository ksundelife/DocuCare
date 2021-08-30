<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SendController extends Controller
{
    public function send(Book $book)
    {
        return view('mail.feedback', compact('book'));
    }
}
