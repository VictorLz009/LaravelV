<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//   return view('welcome');
    return "vista bienvenida";
});

Route::get('/usuarios',[EjemploController::class,'index']);
Route::get('/usuarios/create',[EjemploController::class,'create']);
Route::get('/usuarios/{id}/{nombre?}',[EjemploController::class,'show']);
/*
Route::get('/usuarios',function(){
    return "Hola estos son los usuarios";
});

Route::get('/usuarios/create',function(){
    return "Hola estos son los usuarios para crear";
});

Route::get('/usuarios/{id}/{nombre}', function($idusuario,$nombreusuario=null){
    if($nombreusuario){
        return "Hola usuario "  .$nombreusuario ." tu id es " .$idusuario;
    }
    else{
        return "Hola tu id es:" .$idusuario;
    }
    
});*/



