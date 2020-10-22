<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Permisos\Models\Role;
use App\Permisos\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\cliente;
use PhpParser\Node\Stmt\Return_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/Home', function () {
    return view('1_Inicio');
});
Route::get('/Sesion', function () {
    return view('0_Sesion');
});
Route::get('/Usuario', function () {
    return view('8_Usuario');
});
Route::get('/Formas', function () {
    return view('Formas');
});
Route::resource('/Cliente', 'ClienteController');
Route::resource('/Empleado', 'EmpleadoController');
Route::resource('/Estandar_de_produccion', 'Estandar_de_produccionController');
Route::resource('/Gerente', 'GerenteController');
Route::resource('/Maquinaria', 'MaquinariaController');
Route::resource('/Materia_prima', 'Materia_primaController');
Route::resource('/Oreden_detrabajo', 'Oreden_detrabajoController');
Route::resource('/Oreden_detrabajodescrip', 'Oreden_detrabajodescripController');
Route::resource('/Producto', 'ProductoController');
Route::resource('/Venta_descripcion', 'Venta_descripcionController');
Route::resource('/Venta', 'VentaController');
Route::get('/ReporteC', 'PDFController@PDFCliente' );
Route::get('/ReporteE', 'PDFController@PDFEmpleado' );
Route::get('/ReporteEs', 'PDFController@PDFEstandar' );
Route::get('/ReporteG', 'PDFController@PDFGerente' );
Route::get('/ReporteMq', 'PDFController@PDFMaquinaria' );
Route::get('/ReporteMt', 'PDFController@PDFMariaPrima' );
Route::get('/ReporteOt', 'PDFController@PDFOrdenDeTrabajo' );
Route::get('/ReporteOtDes', 'PDFController@PDFOrdenDeTrabajoDes' );
Route::get('/ReporteP', 'PDFController@PDFProductos' );
Route::get('/ReporteV', 'PDFController@PDFVentas' );
Route::get('/ReporteVDes', 'PDFController@PDFVentasDescrip' );
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/role', 'RoleController')->names('role');
Route::resource('/user', 'UserController', ['except'=>[
    'create', 'store']])->names('user');

/*Route::get('/test', function () {
    /*
        return Role::create([
        'name'=>'Admin',
        'slug'=>'admin',
        'description'=>'Administrador',
        'full-access'=>'yes'
        ]);
        return Role::create([
        'name'=>'Guest',
        'slug'=>'guest',
        'description'=>'guest',
        'full-access'=>'no'
        ]);
        return Role::create([
        'name'=>'Test',
        'slug'=>'test',
        'description'=>'test',
        'full-access'=>'no'
        ]);
    
        $user=User::find(1);
        //$user->roles()->attach([1,3]);
        //$user->roles()->detach([1]);
        //$user->roles()->sync([1,2]);
        return $user->roles;
    
        return Permission::create([
        'name'=>'List Product',
        'slug'=>'product.index',
        'description'=>'A user can list a permissions',
        ]);
        $role=Role::find(2);
        //$role->permissions()->sync([1,2]);
        return $role->permissions;
    
    $clientes=cliente::whereIn('cli_id', [2])->get();
    return $clientes;
});*/
Route::get('/test', function () {
    $user=User::find(1);
    //$user->roles()->sync([1]);
    Gate::authorize('haveaccess','role.show');
    return $user;
    //return $user->havePermission('role.create');
});