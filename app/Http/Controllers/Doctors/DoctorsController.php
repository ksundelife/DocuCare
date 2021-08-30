<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Specialist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Jenssegers\Date\Date as JDate;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctors = Specialist::doctorsSliderPrepare();
        return view('doctors.index', compact('doctors'));
    }

    public function show(Request $request, Specialist $specialist )
    {
        !empty($request->bookId) ? $bookFeedback = Book::find($request->bookId) : $bookFeedback = null;

        $specialist->load('user', 'category','feedbacks');
        return view('doctors.show', compact('specialist', 'bookFeedback'));
    }

    public function vacant(Request $request): Collection
    {
        if (isset($request->date1) && isset($request->date2)) {
            $date1 = new JDate($request->date1);
            $date2 = new JDate($request->date2);

            $specialists = new Collection();
            for ($date = $date1->clone(); $date < $date2; $date->addDay()) {
                $temp = Specialist
                    ::whereHas('schedules', function (Builder $query) use ($date) {
                        $query->where('day', '=', $date);
                    })
                    ->get()->filter(function ($doctor, $key) use ($date) {
                        /** @var Specialist $doctor */
                        return $doctor->isDateFree($date);
                    })
                ;
                $temp->load(['user', 'category','feedbacks']);
                $specialists = $specialists->merge($temp);
            }
//            TODO: fix костыль, повторение кода с отзывами
            foreach ($specialists as $doctor) {
                /** @var Specialist $doctor */
                $doctor->rating = $doctor->averageScore();
                $doctor->scoresCount = $doctor->feedbacks()->count();
            }
            return $specialists;
        }
        return new Collection();
    }
}
