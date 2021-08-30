<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Specialist;
use App\Models\User;
use Illuminate\Database\Seeder;
use Jenssegers\Date\Date as JDate;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('id','>',20)->get();
        $specialists = Specialist::all()->take(10);
        foreach ($specialists as $specialist) {
            $i = 0;
            $schedules = $specialist->schedules;
            foreach ($schedules as $schedule) {
                $user = $users->find(($i%10)+21);
                $datetime = JDate::createFromFormat('Y-m-d',$schedule->day)
                    ->setTime(rand(9,11),0);
//                TODO: Переписать $datetime с появлением реальных расписаний
                Book::factory()
                    ->for($specialist)
                    ->for($schedule)
                    ->for($user)
                    ->state(compact('datetime'))
                    ->create();
                $i++;
            }
        }
    }
}
