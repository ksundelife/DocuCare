<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Specialist;
use App\Models\User;
use Illuminate\Database\Seeder;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $doctors = [
//            [
//                'name' => 'Диедра Спанглер',
//                'speciality' => 'MDS - Пародонтология и оральная имплантология, BDS',
//                'rating' => 1,
//                'location' => 'Флорида, США',
//                'photo' => 'doctor-01.jpg',
//                'coast' => 500,
//                'status' => 1
//            ],
//            [
//                'name' => 'Николай Чавес',
//                'speciality' => 'BDS, MDS - Челюстно-лицевая хирургия',
//                'rating' => 4,
//                'location' => 'Нью-Йорк, США',
//                'photo' => 'doctor-02.jpg',
//                'coast' => 500,
//                'status' => 1
//            ],
//            [
//                'name' => 'Бедилия Эллиот',
//                'speciality' => 'MBBS, MD - Лечебное дело, DNB - Кардиология',
//                'rating' => 2,
//                'location' => 'Джорджия, США',
//                'photo' => 'doctor-03.jpg',
//                'coast' => 500,
//                'status' => 0
//            ],
//            [
//                'name' => 'Александра Фостер',
//                'speciality' => 'MBBS, MS - Общая хирургия, MCh - Урология',
//                'rating' => 1,
//                'location' => 'Нью-Йорк, США',
//                'photo' => 'doctor-04.jpg',
//                'coast' => 500,
//                'status' => 1
//            ],
//            [
//                'name' => 'Диедра Спанглер',
//                'speciality' => 'MDS - Пародонтология и оральная имплантология, BDS',
//                'rating' => 5,
//                'location' => 'Флорида, США',
//                'photo' => 'doctor-01.jpg',
//                'coast' => 500,
//                'status' => 1
//            ],
//            [
//                'name' => 'Николай Чавес',
//                'speciality' => 'BDS, MDS - Челюстно-лицевая хирургия',
//                'rating' => 5,
//                'location' => 'Нью-Йорк, США',
//                'photo' => 'doctor-02.jpg',
//                'coast' => 500,
//                'status' => 1
//            ],
//            [
//                'name' => 'Бедилия Эллиот',
//                'speciality' => 'MBBS, MD - Лечебное дело, DNB - Кардиология',
//                'rating' => 3,
//                'location' => 'Джорджия, США',
//                'photo' => 'doctor-03.jpg',
//                'coast' => 500,
//                'status' => 1
//            ],
//            [
//                'name' => 'Александра Фостер',
//                'speciality' => 'MBBS, MS - Общая хирургия, MCh - Урология',
//                'rating' => 2,
//                'location' => 'Нью-Йорк, США',
//                'photo' => 'doctor-04.jpg',
//                'coast' => 500,
//                'status' => 1
//
//            ],
//        ];
//        foreach ($doctors as $doctor) {
//            \DB::table('specialists')->insert([
//                'user_id' => 1,
////                'category_id' => 0,
//                'rating' => $doctor['rating'],
//                'speciality' => $doctor['speciality'],
//                'location' => $doctor['location'],
//                'photo' => $doctor['photo'],
//                'coast' => $doctor['coast'],
//                'status' => $doctor['status'],
//                'start_time' => Carbon::createFromTime(9),
//                'end_time' => Carbon::createFromTime(11),
//                'duration' => Carbon::createFromTime(1),
//            ]);
//        }

        $users = User::where('id','<=',20)->get();
        $categories = Category::all();
        foreach ($users as $key => $user) {
            Specialist::factory()
                ->state(['photo'=>'/img/doctor-0'.(($key%4)+1).'.jpg'])
                ->for($user)
                ->for($categories[($key%4)+1])
                ->create();
        }
    }
}
