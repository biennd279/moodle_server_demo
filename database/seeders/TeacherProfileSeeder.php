<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\TeacherProfile;
use Illuminate\Database\Seeder;

class TeacherProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherProfile::factory()->createOne()->save();
    }
}
