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
				  array('id' => '1','username' => 'admin','email' => 'admin@admin.com','password' => '$2y$10$r7mT7a000R8/fJvQveuwxOjumCjf4XU53Kgyfqi3FZT5Ch5s5je1C','remember_token' => 'YSvQrWG1ZCACR4RT96AroAnLe9wwgBH8N51AJUS3tcm9wE5IHGJ6XZirUUUB'),
                  array('id' => '2','username' => 'biobun','email' => 'biobun@gmail.com','password' => '$2y$10$uLcB8bWSmP6EKVUVfJ61TeD4rpmoZhG0HxenYl6v4lJ.JlGgwxz0q','remember_token' => 'GuQHMPB6twxqK3RnmeQpjTZw3Ckas5pK3bv4I7Gbp8xW8TcgDTDRxegXcPMt')
				);

        DB::table('users')->insert($users);
    }
}
