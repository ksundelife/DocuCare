<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $book = new Book();
        $user_save = \Auth::check();
        $info_save = isset($request->name) && isset($request->second_name) &&
            isset($request->surname) && isset($request->email);
        $description_save = isset($request->description);
        if ($description_save) {
            if ($user_save) {
                $book->fill([
                    'user_id' => \Auth::user()->id,
                    'specialist_id' => $request->specialist_id,
                    'schedule_id' => $request->schedule_id,
                    'description' => $request->description,
                    'datetime' => $request->datetime,
                ]);
            } elseif ($info_save) {
                $book->fill($request->all());
            }
        }
        if (($user_save || $info_save) && $description_save) {
            //Если все в порядке, сохраняем и идем дальше
            $book->save();
            return redirect()->route('home.index');
        } else {
            //Если нет - нас вернет обратно к форме
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
     public function getPatient(Book $book)
     {
        if($book->user) {
            $book->load('user');
            $book->load('specialist');
        }
        return response()->json(['book' => $book]);
     }

    public function isOverUpdate(Book $book)
    {
        $book->is_over = 1;
        $book->save();
        return redirect()->back();
     }

}
