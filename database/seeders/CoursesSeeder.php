<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('courses')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $course = new Course();
        $course->title = 'PHP';
        $course->price = 789;
        $course->short_description = 'This is a PHP course';
        $course->image_url = 'https://i.ibb.co/mJJNkTJ/img2.jpg';
        $course->user_id = 2;
        $course->save();

        $course = new Course();
        $course->title = 'Mobile Development';
        $course->price = 789;
        $course->short_description = 'Fundamentals of mobile development';
        $course->image_url = 'https://i.ibb.co/mJJNkTJ/img2.jpg';
        $course->user_id = 2;
        $course->save();

        $course = new Course();
        $course->title = 'Software Development';
        $course->price = 789;
        $course->short_description = 'Fundamentals of software development';
        $course->image_url = 'https://i.ibb.co/mJJNkTJ/img2.jpg';
        $course->user_id = 2;
        $course->save();
    }
}
