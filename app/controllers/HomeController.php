<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function sendEmail()
	{
		$data = array(
			'nombre' => Input::get('nombre'),
			'empresa' => Input::get('empresa'),
			'telefono' => Input::get('telefono'),
			'correo' => Input::get('correo'),
			'informacion' => Input::get('informacion'),
//			'area' => Input::get('area'),
			'mensaje' => Input::get('mensaje')
		);

		$fromEmail = 'atencion@biosoftca.com';
		$fromName = 'Consulta Web Biosoft';

		$email = Input::get('correo');

		Mail::send('emails.contacto',$data, function($message) use ($fromName,$fromEmail)
		{
			$message->to($fromEmail,$fromName);
			$message->subject('Nueva consulta web biosofca');
		});
		
		$mensaje = '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<div class="text-info">Mensaje enviado con exito</div>
					</div>';

		return View::make('estaticas.contacto',array('mensaje' => $mensaje));
	}
	public function mandarEmail()
	{
		$data = array(
			'curso' => Input::get('tit-curso'),
			'nombre' => Input::get('nombre'),
			'empresa' => Input::get('empresa'),
			'correo' => Input::get('correo'),
			'asunto' => Input::get('asunto'),
//			'area' => Input::get('area'),
			'mensaje' => Input::get('mensaje')
		);

		$fromEmail = 'atencion@biosoftca.com';
		$fromName = 'Consulta Web Biosoft';
		$subject = 'Consulta desde el curso '.Input::get('tit-curso');
		$email = Input::get('correo');
		//ruta para regresar al curso luego de enviar el correo
		$regreso = Input::get('ruta');

		Mail::send('emails.consulta',$data, function($message) use ($fromName,$fromEmail,$subject)
		{
			$message->to($fromEmail,$fromName);
			$message->subject($subject);
		});

		$mensaje = '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<div class="text-info">Mensaje enviado con exito</div>
					</div>';

		return View::make($regreso,array('mensaje' => $mensaje));
	}
	public function mandarEmailDiplomado()
	{
		$data = array(
			'curso' => Input::get('tit-curso'),
			'nombre' => Input::get('nombre'),
			'empresa' => Input::get('empresa'),
			'correo' => Input::get('correo'),
			'asunto' => Input::get('asunto'),
//			'area' => Input::get('area'),
			'mensaje' => Input::get('mensaje')
		);

		$fromEmail = 'atencion@biosoftca.com';
		$fromName = 'Consulta Web Biosoft';
		$subject = 'Consulta desde el '.Input::get('tit-curso');
		$email = Input::get('correo');
		//ruta para regresar al curso luego de enviar el correo
		$regreso = Input::get('ruta');

		Mail::send('emails.consulta-dip',$data, function($message) use ($fromName,$fromEmail,$subject)
		{
			$message->to($fromEmail,$fromName);
			$message->subject($subject);
		});

		$mensaje = '<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<div class="text-info">Mensaje enviado con exito</div>
					</div>';

		return View::make($regreso,array('mensaje' => $mensaje));
	}
}
