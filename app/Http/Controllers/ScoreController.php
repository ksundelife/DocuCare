<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Auth as Auth;
use Illuminate\Http\Request;

class ScoreController extends Controller
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        if (Auth::check() && Auth::user()->specialist->id != $request->specialist_id) {
            /** @var Score $score */
            $score = Score::all()
                ->where('user_id', Auth::id())
                ->where('specialist_id',$request->specialist_id)
                ->first();
            if (isset($score)) {
                $this->update($request,$score->id);
            } else {
                $score = new Score();
                $score->fill($request->all());
                $score->fill(['user_id'=> Auth::id()]);
                $score->save();
            }
        }
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /** @var Score $score */
        $score = Score::find($id);
        $score->value = $request->value;
//        TODO: Вернуть правильный реквест. Пока что на выходе bool
        return $score->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
