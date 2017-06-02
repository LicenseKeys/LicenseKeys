<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
         'fname' => 'Kenny',
         'lname' => 'Lindelof',
         'username'	=> 'kluser',
         'email'	=> 'test@local.com',
         'password'	=> bcrypt('password'),
         'created_at'	=> date("Y-m-d H:i:s"),
         'updated_at'	=> date("Y-m-d H:i:s"),
       ]);
    }
}