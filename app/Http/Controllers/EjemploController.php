<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    //

public function index(){
    //return"Hola esto es usuarios contolador";
    return view('index');
}
public function create(){
   // return "Hola esto es usuarios crear controller";
   return view('create');
}

public function show($idusuario, $nombreusuario=null){

    return view('show',['IDusuario'=>$idusuario,'nombreusuario'=>$nombreusuario]);
}
}
