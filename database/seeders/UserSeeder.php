<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        20 юзеров-докторов
        for ($i = 1; $i <= 20; $i++) {
            User::factory()
                ->state([
                    'email' => 'doctor'.$i.'@host.ru',
                    'is_doctor' => true
                ])
                ->create();
        }
//        10 юзеров-пациентов
        for ($i = 1; $i <= 10; $i++) {
            User::factory()
                ->state(['email' => 'patient'.$i.'@host.ru'])
                ->create();
        }
    }
}
