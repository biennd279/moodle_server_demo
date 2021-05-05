<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account = new Account([
            "user_name" => "biennd3",
            "email" => "bien@mail.com",
            "password" => Hash::make("password"),
        ]);
        $account->save();
        Account::factory(10)->create();
    }
}
