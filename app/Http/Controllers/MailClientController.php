<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Specialist;
use App\Models\User;
use Illuminate\Http\Request;

class MailClientController extends Controller
{
    public function index()
    {
//        $mail = Book::all()->where('is_over', true);

        $mail = Book::whereIsOver(true)->get();
//        foreach ($mail as $oneMail) {
//            $oneMail->load('user', 'books');
//        }
//        dd($mail);
        return view('mail.index', compact('mail'));
    }
}
