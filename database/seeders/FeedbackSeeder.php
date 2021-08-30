<?php

namespace Database\Seeders;

use App\Models\Feedback;
use App\Models\Specialist;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialists = Specialist::all()->take(10);
        foreach ($specialists as $specialist) {
            $books = $specialist->books->take(10);
            foreach ($books as $book) {
                Feedback::factory()
                    ->for($specialist)
                    ->for($book)
                    ->for($book->user)
                    ->state(['name'=>null,'surname'=>null])
                    ->create();
            }
        }
//        foreach ($specialists as $specialist) {
//            Feedback::factory()
//                ->for($specialist)
//                ->state(['user_id'=>null])
//                ->count(3)
//                ->create();
//        }
    }

}
