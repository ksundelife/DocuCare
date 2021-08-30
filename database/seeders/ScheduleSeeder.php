<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\Specialist;
use Illuminate\Database\Seeder;
use Jenssegers\Date\Date as JDate;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialists = Specialist::all()->take(10);
//        dd($specialists);
        $day1 = new JDate('monday this week');
        $day2 = $day1->clone()->modify('+3 weeks');
        foreach ($specialists as $specialist) {
            for ($day = $day1->clone();$day<$day2;$day->modify('+1 day')) {
                if ($day->dayOfWeek != 3 && $day->dayOfWeek != 0) {
                    /*Выходные в среду и воскресенье*/
                    Schedule::factory()
                        ->state(['day'=>$day->format('Y-m-d')])
                        ->for($specialist)
                        ->create();
                }
            }
        }
    }
}
