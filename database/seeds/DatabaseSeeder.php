<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BarangTableSeeder::class);
        $this->call(PaketTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionandRoleTableSeeder::class);
        $this->call(AgenTableSeeder::class);
        $this->call(KonfirmasiPembayaranTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
    }
}
