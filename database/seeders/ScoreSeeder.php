<?php

namespace Database\Seeders;

use App\Models\Score;
use App\Models\Specialist;
use App\Models\User;
use Illuminate\Database\Seeder;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('id','>',10)->get();
        $specialists = Specialist::where('id','<=',10)->get();
        foreach ($specialists as $specialist) {
            foreach ($users as $user) {
                Score::factory()
                    ->for($specialist)
                    ->for($user)
                    ->create();
            }
        }
    }

}
