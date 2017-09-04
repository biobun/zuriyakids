<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = array(
  array('id' => '1','username' => 'admin','email' => 'admin@admin.com','password' => '$2y$10$r7mT7a000R8/fJvQveuwxOjumCjf4XU53Kgyfqi3FZT5Ch5s5je1C','remember_token' => '9uahOAF4fLB5GVuusqJxeiLEMtkYRFtI9NXsynZdbr97U3G1mC24ozBnY7AJ'),
  array('id' => '2','username' => 'biobun','email' => 'biobun@gmail.com','password' => '$2y$10$oD249oUfrITjehm3N5s2GO7gLLXduiP0FSrGhR.5lYsRc1fh.Pq12','remember_token' => NULL),
  array('id' => '3','username' => 'maryam','email' => 'imaadalhamas@gmail.com','password' => '$2y$10$4dgETW0VocpqYlNeUqPGlOT.5wDwMCbqdIBoz/pqAyBsP8CZz1luK','remember_token' => NULL),
  array('id' => '4','username' => 'rosilawati','email' => 'rozgea@gmail.com','password' => '$2y$10$ieusYORVvZoa3mXkpRhWGuKJZPyPTlAGiRlFdBnMoAdNEOpNK9aWm','remember_token' => NULL),
  array('id' => '5','username' => 'nikmahsakinah','email' => 'nikmahsakinah2015@gmail.com','password' => '$2y$10$aduCxdODcPz1fR419gbp8Oq9ny0Ad5mVVRXCjuainMjU1jt.SNr6O','remember_token' => NULL),
  array('id' => '6','username' => 'lilis','email' => 'zaid.cyber@gmail.com','password' => '$2y$10$HbxCVXu1cNhZoDWuxuls1ehVmnR3HRQI2Gq.zEs6t.K.bO1wjI6LK','remember_token' => NULL),
  array('id' => '7','username' => 'Yuliafp.zuriyakids.com','email' => 'Taryn.Ardya@gmail.com','password' => '$2y$10$QbUMc68v.ZaIn9bJTeq9Wu7c//e/twBIPUomrQDcI5KuUddTHuQGu','remember_token' => NULL)
);
        DB::table('users')->insert($users);
    }
}
