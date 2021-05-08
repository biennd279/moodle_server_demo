<?php

namespace Database\Seeders;

use App\Models\AdminProfile;
use App\Models\StudentProfile;
use App\Models\TeacherProfile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            "user_name" => "biennd3",
            "email" => "bien@mail.com",
            "password" => Hash::make("password"),
        ]);
        $user->userable()->associate(StudentProfile::firstOrFail());
        $user->save();

        $user = new User([
            "user_name" => "teacher",
            "email" => "teacher@mail.com",
            "password" => Hash::make("password"),
        ]);
        $user->userable()->associate(TeacherProfile::firstOrFail());
        $user->save();

        $user = new User([
            "user_name" => "admin",
            "email" => "admin@mail.com",
            "password" => Hash::make("password"),
        ]);
        $user->userable()->associate(AdminProfile::firstOrFail());
        $user->save();
    }
}
