<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        //$roleCliente = Role::create(['name' => 'cliente']);

        $roleUser = Role::create(['name' => 'Registered User']);
        
        $permission = Permission::create(['name' => 'admin.home'])->assignRole($roleAdmin);
        $permission = Permission::create(['name' => 'user.home'])->assignRole($roleUser);
        $permission = Permission::create(['name' => 'ver:role']);
        $permission = Permission::create(['name' => 'crear:role']);
        $permission = Permission::create(['name' => 'editar:role']);
        $permission = Permission::create(['name' => 'eliminar:role']);

        $permission = Permission::create(['name' => 'ver:permiso']);

        $permission = Permission::create(['name' => 'ver:usuario']);
        $permission = Permission::create(['name' => 'crear:usuario']);
        $permission = Permission::create(['name' => 'editar:usuario']);
        $permission = Permission::create(['name' => 'eliminar:usuario']);
        
        $user = new User;
        $user->name = 'Kristtian';
        $user->email = 'camilomeres.13@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole($roleAdmin);
        //$user->hasAllPermissions($roleAdmin);

        $user = new User;
        $user->name = 'cliente';
        $user->email = 'cliente@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole($roleUser);

    }
}
