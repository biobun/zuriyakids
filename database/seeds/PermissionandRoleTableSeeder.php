<?php

use Illuminate\Database\Seeder;
use zuriyakids\Role;
use zuriyakids\Permission;
use zuriyakids\User;
class PermissionandRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name         = 'Admin';
        $admin->display_name = 'Administrator'; // optional
        $admin->save();

        $agen = new Role();
        $agen->name         = 'Agen';
        $agen->display_name = 'Agen'; // optional
        $agen->save();
        
        $reseller = new Role();
        $reseller->name         = 'Reseller';
        $reseller->display_name = 'Reseller'; // optional
        $reseller->save();

        $manageAgen = new Permission();
        $manageAgen->name = 'manage_agen';
        $manageAgen->display_name = 'Manage Agen';
        $manageAgen->save();

        $manageReseller = new Permission();
        $manageReseller->name = 'manage_reseller';
        $manageReseller->display_name = 'Manage Reseller';
        $manageReseller->save();
      
        $viewData = new Permission();
        $viewData->name = 'view_data_barang';
        $viewData->display_name = 'View data barang';
        $viewData->save();
      
        $admin->attachPermission($manageAgen);
        $admin->attachPermission($manageReseller);
        $admin->attachPermission($viewData);
        $agen->attachPermission($manageReseller);
        $agen->attachPermission($viewData);
        $reseller->attachPermission($viewData);
     
        $adminRole = DB::table('roles')->where('name', '=', 'Admin')->pluck('id');
      
        $user1 = User::where('username','=','admin')->first();
        $user1->roles()->attach($adminRole);
    }
}
