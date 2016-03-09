@extends ('layouts.descrip-diplomados')

@section ('title')
	Mayor Información
@stop

@section('titulo')
@stop

@section('descripcion')
@section('campos')
	{{ Form::hidden('tit-curso', 'Diplomado en Análisis de Negocios, Procesos y Requisitos') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'diplomados.descrip-d1.contacto') }}
@stop

<div id="formulario3" style="display: inline; color: #333333;">
	<?php echo View::make('parciales.formdiplomado') ?>
</div>
@stop
