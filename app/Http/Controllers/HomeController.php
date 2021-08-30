<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index()
    {
        $doctors = Specialist::doctorsSliderPrepare();
        return view('home.index', compact('doctors'));
    }
}
