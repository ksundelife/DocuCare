<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Doctor;
use App\Models\Specialist;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::query()
            ->firstOrCreate([
                'name' => 'Пародонтология и оральная имплантология'
            ]);

        $doctor = Doctor::query()
            ->create([
                'name' => 'Иван',
                'second_name' => 'Петрович',
                'surname' => 'Сидоров',
                'email' => 'doctor1@host.ru',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_doctor' => true,
            ]);

        Specialist::query()
            ->firstOrCreate([
//                'first_name' => 'Иван',
//                'second_name' => 'Петрович',
//                'last_name' => 'Сидоров',
                'photo' => 'doctor-01.jpg',
                'price' => 500,
                'category_id' => $category->id,
                'user_id' => $doctor->id
            ]);
/*
 *
 */
        $category = Category::query()
            ->firstOrCreate([
                'name' => 'Челюстно-лицевая хирургия'
            ]);

        $doctor = Doctor::query()
            ->create([
                'name' => 'Семён',
                'second_name' => 'Семёнович',
                'surname' => 'Сидоров',
                'email' => 'doctor2@host.ru',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_doctor' => true,
            ]);

        Specialist::query()
            ->firstOrCreate([
//                'first_name' => 'Семён',
//                'second_name' => 'Семёнович',
//                'last_name' => 'Сидоров',
                'photo' => 'doctor-02.jpg',
                'price' => 600,
                'category_id' => $category->id,
                'user_id' => $doctor->id
            ]);

        /*
 *
 */
        $category = Category::query()
            ->firstOrCreate([
                'name' => 'Кардиология'
            ]);

        $doctor = Doctor::query()
            ->create([
                'name' => 'Семён',
                'second_name' => 'Семёнович',
                'surname' => 'Петров',
                'email' => 'doctor3@host.ru',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_doctor' => true,
            ]);

        Specialist::query()
            ->firstOrCreate([
//                'first_name' => 'Семён',
//                'second_name' => 'Семёнович',
//                'last_name' => 'Петров',
                'photo' => 'doctor-03.jpg',
                'price' => 700,
                'category_id' => $category->id,
                'user_id' => $doctor->id
            ]);

/*
*
*/
        $category = Category::query()
            ->firstOrCreate([
                'name' => 'Общая хирургия'
            ]);

        $doctor = Doctor::query()
            ->create([
                'name' => 'Иван',
                'second_name' => 'Семёнович',
                'surname' => 'Петров',
                'email' => 'doctor4@host.ru',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_doctor' => true,
            ]);

        Specialist::query()
            ->firstOrCreate([
//                'first_name' => 'Иван',
//                'second_name' => 'Семёнович',
//                'last_name' => 'Петров',
                'photo' => 'doctor-04.jpg',
                'price' => 650,
                'category_id' => $category->id,
                'user_id' => $doctor->id
            ]);
/*
*
*/
        $category = Category::query()
            ->firstOrCreate([
                'name' => 'Пародонтология и оральная имплантология'
            ]);

        $doctor = Doctor::query()
            ->create([
                'name' => 'Иван',
                'second_name' => 'Петрович',
                'surname' => 'Петров',
                'email' => 'doctor5@host.ru',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_doctor' => true,
            ]);

        Specialist::query()
            ->firstOrCreate([
//                'first_name' => 'Иван',
//                'second_name' => 'Петрович',
//                'last_name' => 'Петров',
                'photo' => 'doctor-01.jpg',
                'price' => 450,
                'category_id' => $category->id,
                'user_id' => $doctor->id
            ]);

/*
*
*/
        $category = Category::query()
            ->firstOrCreate([
                'name' => 'Челюстно-лицевая хирургия'
            ]);

        $doctor = Doctor::query()
            ->create([
                'name' => 'Иван',
                'second_name' => 'Владимирович',
                'surname' => 'Петров',
                'email' => 'doctor6@host.ru',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_doctor' => true,
            ]);

        Specialist::query()
            ->firstOrCreate([
//                'first_name' => 'Иван',
//                'second_name' => 'Владимирович',
//                'last_name' => 'Петров',
                'photo' => 'doctor-02.jpg',
                'price' => 800,
                'category_id' => $category->id,
                'user_id' => $doctor->id
            ]);

/*
*
*/
        $category = Category::query()
            ->firstOrCreate([
                'name' => 'Терапия'
            ]);

        $doctor = Doctor::query()
            ->create([
                'name' => 'Иван',
                'second_name' => 'Владимирович',
                'surname' => 'Иванов',
                'email' => 'doctor7@host.ru',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_doctor' => true,
            ]);

        Specialist::query()
            ->firstOrCreate([
//                'first_name' => 'Иван',
//                'second_name' => 'Владимирович',
//                'last_name' => 'Иванов',
                'photo' => 'doctor-03.jpg',
                'price' => 800,
                'category_id' => $category->id,
                'user_id' => $doctor->id
            ]);
        /*
        *
        */
        $category = Category::query()
            ->firstOrCreate([
                'name' => 'Педиатрия'
            ]);

        $doctor = Doctor::query()
            ->create([
                'name' => 'Роман',
                'second_name' => 'Владимирович',
                'surname' => 'Петров',
                'email' => 'doctor8@host.ru',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_doctor' => true,
            ]);

        Specialist::query()
            ->firstOrCreate([
//                'first_name' => 'Роман',
//                'second_name' => 'Владимирович',
//                'last_name' => 'Петров',
                'photo' => 'doctor-04.jpg',
                'price' => 800,
                'category_id' => $category->id,
                'user_id' => $doctor->id
            ]);
    }
}
