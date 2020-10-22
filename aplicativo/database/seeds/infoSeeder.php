<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Permisos\Models\Role;
use App\Permisos\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class infoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //trucate table
        DB::statement("SET foreign_key_checks = 0");
            DB::table('role_user')->truncate();
            DB::table('permission_role')->truncate();
            Permission::truncate();
            Role::truncate();
        DB::statement("SET foreign_key_checks=1");


        $useradmin= User::where('email','admin@mail.com')->first();
        if($useradmin){
            $useradmin->delete();
        }
        $useradmin= User::create([
            'name'      => 'admin',
            'email'     => 'admin@mail.com',
            'password'  => Hash::make('admin')
        ]);
        
        //rol Admin
        $roladmin = Role::create([
            'name'=>'Admin',
            'slug'=>'admin',
            'description'=>'Administrador',
            'full-access'=>'yes'
        ]);
        //rol Gerente
        $rolgerente = Role::create([
            'name'=>'Gerente',
            'slug'=>'gerente',
            'description'=>'Es un usuario que trabaja en la empresa y ademas es jefe',
            'full-access'=>'no'
        ]);
        //rol Empleado
        $rolempleado = Role::create([
            'name'=>'Empleado',
            'slug'=>'empleado',
            'description'=>'Es un usuario que trabaja en la empresa',
            'full-access'=>'no'
        ]);
        //rol Cliente
        $rolcliente = Role::create([
            'name'=>'Cliente',
            'slug'=>'cliente',
            'description'=>'Es un usuario que no trabaja en la empresa',
            'full-access'=>'no'
        ]);
        //table role_user
        $useradmin->roles()->sync([$roladmin->id]);
        
        //permission
        $permission_all=[];
        //permission role
        $permission = Permission::create([
                'name'=>'List role',
                'slug'=>'role.index',
                'description'=>'A user can list a role',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
                'name'=>'Show role',
                'slug'=>'role.show',
                'description'=>'A user can see a role',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
                'name'=>'Create role',
                'slug'=>'role.create',
                'description'=>'A user can creat a role',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
                'name'=>'Edit role',
                'slug'=>'role.edit',
                'description'=>'A user can edit a role',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
                'name'=>'Destroy role',
                'slug'=>'role.destroy',
                'description'=>'A user can destroy a role',
            ]);
        $permission_all[] = $permission->id;
        //permission user
        $permission = Permission::create([
            'name'=>'List user',
            'slug'=>'user.index',
            'description'=>'A user can list a user',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Show user',
            'slug'=>'user.show',
            'description'=>'A user can see a user',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Create user',
            'slug'=>'user.create',
            'description'=>'A user can creat a user',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Destroy user',
            'slug'=>'user.destroy',
            'description'=>'A user can destroy a user',
            ]);
        $permission_all[] = $permission->id;

        //Datos de Permisos de las tablas Cliente
        $permission = Permission::create([
            'name'=>'Crear Cliente',
            'slug'=>'c.add',
            'description'=>'El usuario puede crear Clientes',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Cliente',
            'slug'=>'c.index',
            'description'=>'El usuario puede ver Clientes',
            ]);
        $permission_all[] = $permission->id;
        //Datos de Permisos de las tablas Empleado
        $permission = Permission::create([
            'name'=>'Crear Empleado',
            'slug'=>'e.add',
            'description'=>'El usuario puede crear Empleado',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Empleado',
            'slug'=>'e.index',
            'description'=>'El usuario puede ver Empleados',
            ]);
        $permission_all[] = $permission->id;
        //Datos de Permisos de las tablas Estandares de produccion
        $permission = Permission::create([
            'name'=>'Crear Estandares de Producion',
            'slug'=>'es.add',
            'description'=>'El usuario puede crear los Estandares de Producion',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Estandares de Producion',
            'slug'=>'es.index',
            'description'=>'El usuario puede ver los Estandares de Producion',
            ]);
        $permission_all[] = $permission->id;
        //Datos de Permisos de las tablas Gerentes
        $permission = Permission::create([
            'name'=>'Crear Gerente',
            'slug'=>'g.add',
            'description'=>'El usuario puede crear Gerentes',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Gerente',
            'slug'=>'g.index',
            'description'=>'El usuario puede ver Gerentes',
            ]);
        $permission_all[] = $permission->id;
        //Datos de Permisos de las tablas Maquinaria
        $permission = Permission::create([
            'name'=>'Crear Maquinaria',
            'slug'=>'mq.add',
            'description'=>'El usuario puede crear Maquinarias',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Maquinaria',
            'slug'=>'mq.index',
            'description'=>'El usuario puede ver Maquinarias',
            ]);
        $permission_all[] = $permission->id;
        //Datos de Permisos de las tablas Materia Prima
        $permission = Permission::create([
            'name'=>'Crear Materia prima',
            'slug'=>'mt.add',
            'description'=>'El usuario puede crear Materia prima',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Materia prima',
            'slug'=>'mt.index',
            'description'=>'El usuario puede ver Materia prima',
            ]);
        $permission_all[] = $permission->id;
        //Datos de Permisos de las tablas Ordenes de trabajo
        $permission = Permission::create([
            'name'=>'Crear Orden de trabajo',
            'slug'=>'ot.add',
            'description'=>'El usuario puede crear Crear Ordenes de trabajo',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Orden de trabajo',
            'slug'=>'ot.index',
            'description'=>'El usuario puede ver Ordenes de trabajo',
            ]);
        $permission_all[] = $permission->id;
        //Datos de Permisos de las tablas Orednens de trabajo descripcion
        $permission = Permission::create([
            'name'=>'Crear Orden de trabajo descripcion',
            'slug'=>'otdes.add',
            'description'=>'El usuario puede crear Orden de trabajo descripciones',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Orden de trabajo descripcion',
            'slug'=>'otdes.index',
            'description'=>'El usuario puede ver Orden de trabajo descripciones',
            ]);
        $permission_all[] = $permission->id;
        //Datos de Permisos de las tablas Productos
        $permission = Permission::create([
            'name'=>'Crear Producto',
            'slug'=>'p.add',
            'description'=>'El usuario puede crear Productos',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Producto',
            'slug'=>'p.index',
            'description'=>'El usuario puede ver Productos',
            ]);
        $permission_all[] = $permission->id;
        //Datos de Permisos de las tablas Ventas
        $permission = Permission::create([
            'name'=>'Crear Venta',
            'slug'=>'v.add',
            'description'=>'El usuario puede crear Ventas',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Venta',
            'slug'=>'v.index',
            'description'=>'El usuario puede ver Ventas',
            ]);
        $permission_all[] = $permission->id;
        //Datos de Permisos de las tablas Venta descripcion
        $permission = Permission::create([
            'name'=>'Crear Venta descripcion',
            'slug'=>'vdes.add',
            'description'=>'El usuario puede crear Venta descripciones',
            ]);
        $permission_all[] = $permission->id;
        $permission = Permission::create([
            'name'=>'Ver Venta descripcion',
            'slug'=>'vdes.index',
            'description'=>'El usuario puede ver Venta descripciones',
            ]);
        $permission_all[] = $permission->id;
        /*
            //permission user
            $permission = Permission::create([
                'name'=>'Edit user',
                'slug'=>'user.edit',
                'description'=>'A user can edit a user',
            ]);
            $permission_all[] = $permission->id;
        */
        //table permission_role
        //$roladmin->permissions()->sync($permission_all);
    }
}
