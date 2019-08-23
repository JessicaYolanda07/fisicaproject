<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
            //usuarios
        Permission::create(['name' => 'index user']);    
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'read user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);
            //roles
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'read roles']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);
            //asignados
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'read permissions']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);
            //materias
        Permission::create(['name' => 'index materia']); 
        Permission::create(['name' => 'create materia']);
        Permission::create(['name' => 'read materia']);
        Permission::create(['name' => 'update materia']);
        Permission::create(['name' => 'delete materia']);
            //horarios
        Permission::create(['name' => 'index horario']); 
        Permission::create(['name' => 'create horario']);
        Permission::create(['name' => 'read horario']);
        Permission::create(['name' => 'update horario']);
        Permission::create(['name' => 'delete norario']);
            //docentes
        Permission::create(['name' => 'index docente']); 
        Permission::create(['name' => 'create docente']);
        Permission::create(['name' => 'read docente']);
        Permission::create(['name' => 'update docente']);
        Permission::create(['name' => 'delete docente']);
            //programaciones_director
        Permission::create(['name' => 'index programacion']); 
        Permission::create(['name' => 'create programacion']);
        Permission::create(['name' => 'read programacion']);
        Permission::create(['name' => 'update programacion']);
        Permission::create(['name' => 'delete programacion']);
            //programacion_estudiante
        Permission::create(['name' => 'index progra_estudiante']); 
        Permission::create(['name' => 'create progra_estudiante']);
        Permission::create(['name' => 'read progra_estudiante']);
        Permission::create(['name' => 'update progra_estudiante']);
        Permission::create(['name' => 'delete progra_estudiante']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
            //rol para el director
        $role = Role::create(['name' => 'director']);
        $role->givePermissionTo('index programacion');
        $role->givePermissionTo('create programacion');
        $role->givePermissionTo('read programacion');
        $role->givePermissionTo('update programacion');
        $role->givePermissionTo('delete programacion');
            //rol para el docente
        $role = Role::create(['name' => 'docente']);
        $role->givePermissionTo('index programacion');
        $role->givePermissionTo('read programacion');
            //rol para el estudiante
        $role = Role::create(['name' => 'estudiante']);
        $role->givePermissionTo('index progra_estudiante');
        $role->givePermissionTo('create progra_estudiante');
        
        $role->givePermissionTo('update progra_estudiante');
        $role->givePermissionTo('delete progra_estudiante');    
    }
}
