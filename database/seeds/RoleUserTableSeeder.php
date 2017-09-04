<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = array(
  array('user_id' => '2','role_id' => '2'),
  array('user_id' => '3','role_id' => '2'),
  array('user_id' => '4','role_id' => '2'),
  array('user_id' => '5','role_id' => '2'),
  array('user_id' => '6','role_id' => '2'),
  array('user_id' => '7','role_id' => '2')
);
       DB::table('role_user')->insert($role_user);
    }
}
