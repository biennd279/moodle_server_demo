<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function (User $user, $key) {
            $profile = Profile::factory()->create([
                "account_id" => $user->id,
            ]);

            $profile->user()->associate($user)->save();
        });
    }
}
