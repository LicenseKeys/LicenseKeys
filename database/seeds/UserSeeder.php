<?php

use Illuminate\Database\Seeder;
use App\User;
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
     $user = new User();
     $user->name = "Kenny Lindelof";
     $user->email = "dev@mylicensekeys.co";
     $user->password = Hash::make("password");
     $user->email_confirmed = true;
     $user->save();
    }
}
