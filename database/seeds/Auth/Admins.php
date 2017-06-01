<?php

use Illuminate\Database\Seeder;

class Admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('admins')->insert([
         'name' => 'Kenny Lindelof',
         'username'	=> 'kladmin',
         'email'	=> 'test@local.com',
         'password'	=> bcrypt('password'),
         'created_at'	=> date("Y-m-d H:i:s"),
         'updated_at'	=> date("Y-m-d H:i:s"),
       ]);
    }
}
