<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Vérifier et créer les rôles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Vérifier et créer les permissions spécifiques aux jeux
        $permissions = [
            'create games',
            'edit games',
            'delete games',
            'view games',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assigner les permissions aux rôles
        $adminRole->givePermissionTo($permissions);
        $userRole->givePermissionTo('view games');
    }
}