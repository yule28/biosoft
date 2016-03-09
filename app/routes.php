<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return Redirect::to('inicio/funcion');
	return View::make('estaticas.inicio');
});

Route::get('consultoria', function()
{
	//return Redirect::to('inicio/funcion');
	return View::make('estaticas.consultoria');
});

/*-------------- CAPACITACION --------------------*/

Route::get('capacitacion', 'CapacitacionController@index');

/*--------- SECCION DE DIPLOMADO ----------------*/
Route::get('Diplomados-Cursos', 'CapacitacionController@diplomados');

    /*-------------- CERTIFICADOS Y DIPLOMADOS ----------------*/

    Route::get('Certificado-BPM', 'DiplomadosController@certificadoBpm');

    Route::get('Certificado-IR', 'DiplomadosController@certificadoIr');

    Route::get('Diplomado-BPM-IR', 'DiplomadosController@diplomadoBpmIr');

    /*-------------- PAGINAS CON CONTENIDO GENERAL PARA LOS DIPLOMADOS Y CERTIFICADOS -----------------*/

    Route::get('Metodología-Enseñanza', 'DiplomadosController@metodologia');

    Route::get('Certificación-Evaluación', 'DiplomadosController@certificacion');

    Route::get('Requisitos', 'DiplomadosController@requisitos');

    Route::get('Plan-Estudio', 'DiplomadosController@plan');

    Route::get('Diplomado-Contácto', 'DiplomadosController@contacto');

/*-------- SECCION CURSOS IN COMPANY -----------*/

Route::get('Cursos-In-Company', 'CapacitacionController@cursosInCompany');

    /*------------- CURSOS -------------------------*/

    Route::get('UML', 'CursosController@uml');
    
    Route::get('Metodos-Agiles', 'CursosController@metodosAgiles');
    
    Route::get('Modelado-Negocios', 'CursosController@modeladoNegocios');
	
    Route::get('Ingenieria-Requisitos', 'CursosController@ingRequisitos');
	
    Route::get('Arquitecturas-Software', 'CursosController@arqSoftware');
	
    Route::get('Análisis-Diseño-Software', 'CursosController@analDisSoft');
	
    Route::get('Diseño-Software', 'CursosController@disenoSoft');
	
    Route::get('Pruebas-Software', 'CursosController@pruebSoft');
	
    Route::get('Gestion-Proyectos', 'CursosController@gestProy');
	
    Route::get('Gestión-Riesgos', 'CursosController@gestRiesgo');
	
    Route::get('Arquitecturas-Empresariales', 'CursosController@arqEmpres');
	
    Route::get('Taller-Modelado-Arquitecturas', 'CursosController@tallModArq');
	
    Route::get('Fundamentos-Gestion-Procesos', 'CursosController@fundGestProc');
	
    Route::get('Taller-Modelado-BPMN', 'CursosController@tallModBpmn');

/*--------------------------------------------------*/

Route::get('desarrollo', function()
{
	//return Redirect::to('inicio/funcion');
	return View::make('estaticas.desarrollo');
});

Route::get('equipo', function()
{
	//return Redirect::to('inicio/funcion');
	return View::make('estaticas.equipo');
});

Route::get('contacto', function()
{
	//return Redirect::to('inicio/funcion');
	$mensaje = null;
	return View::make('estaticas.contacto',array('mensaje' => $mensaje));
});
//FORMULARIO DE CONTACTO PARA CURSOS IN COMPANY
Route::post('mandarCorreo', array('uses' => 'HomeController@mandarEmail'));

//FORMULARIO DE CONTACTO PARA DIPLOMADOS
Route::post('CorreoDiplomado', array('uses' => 'HomeController@mandarEmailDiplomado'));

//FORMULARIO DE CONTACTO
Route::post('enviarCorreo', array('uses' => 'HomeController@sendEmail'));