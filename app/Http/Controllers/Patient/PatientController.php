<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index()
    {
        if(Auth::user()->is_doctor){
            $currentUser = \Auth::user()->specialist->user_id;
            $books = Book::with(['user', 'specialist'])
                ->where('specialist_id', '=', $currentUser)
                ->get()
                ->sortBy('datetime');

            foreach ($books as $book) {
                $book->load('user', 'specialist');
            }

            return view('patient.index', compact('books'));
        } else {
            return redirect('/profile');
        }

    }
}
