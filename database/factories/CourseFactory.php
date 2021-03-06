<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\TeacherProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "teacher_id" => TeacherProfile::firstOrFail()->id,
            "name" => $this->faker->name,
            "school" => $this->faker->name,
        ];
    }
}
