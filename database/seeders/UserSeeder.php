<?php

namespace Database\Seeders;

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
        $user->save();
        User::factory(10)->create();
    }
}
