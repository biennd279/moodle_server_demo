<?php

namespace Database\Factories;

use App\Models\TeacherProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeacherProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "first_name" => $this->faker->firstName,
            "last_name" => $this->faker->lastName,
            "date_of_birth" => $this->faker->date(),
            "address" => $this->faker->address,
            "phone" => $this->faker->phoneNumber,
        ];
    }
}
