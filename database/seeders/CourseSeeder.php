<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\TeacherProfile;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher_profile = TeacherProfile::firstOrFail();

        $course_ooad = new Course([
            "name" => "OOAD",
            "school" => "University of Engineering",
        ]);

        $course_mobile = new Course([
            "name" => "Mobile",
            "school" => "University of Engineering",
        ]);

        $course_e_commerce = new Course([
            "name" => "eCommerce",
            "school" => "University of Engineering",
        ]);

        $teacher_profile->courses()->saveMany([
           $course_ooad,
           $course_mobile,
           $course_e_commerce
        ]);

    }
}
