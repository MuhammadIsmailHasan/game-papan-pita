<?php

use App\Libs\Traits\RefreshRolePermission;
use Illuminate\Database\Seeder;
use App\User;
use App\Admin;

class DatabaseSeeder extends Seeder
{
    use RefreshRolePermission;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->refreshRolePermission();
        $appAdmin = User::create([
            'name' => 'appadmin',
            'password' => bcrypt('adm-ismail-123'),
        ]); 
        $appAdmin->assignRole(config('rolepermission.roles.administrator.name'));


        $adminUser = User::create([
            'name' => 'amrina',
            'password' => bcrypt('123456'),
            'person_type' => 'admin'
        ]); 
        $adminUser->assignRole(config('rolepermission.roles.admin.name'));

        
    }
}
