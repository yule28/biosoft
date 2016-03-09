@extends ('layouts.cursos')

@section ('title')
Fundamentos de la Gestión de Procesos de Negocio BPM
@stop

@section('img')
{{ HTML::image('assets/images/curso/fund-gest-proces.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Fundamentos de la Gestión de Procesos de Negocio BPM
@stop
@section('descripcion')
Gestión de Procesos del Negocio (BPM- Business Process Management) es un enfoque disciplinado para identificar, diseñar, ejecutar, documentar, medir, monitorear y controlar procesos de negocio automatizados o no, que conlleva a alcanzar de manera consistente, resultados esperados y alineados con los objetivos estratégicos de una organización.En este curso, se introduce al participante en los aspectos conceptuales, gerenciales, metodológicos y tecnológicos de la Gestión de Procesos de Negocio (BPM).
@stop
@section('objetivos')
<ul>
	<li>Conocer los orígenes, la evolución y las tendencias de la Gestión de Procesos de Negocio</li>
	<li>Comprender la aplicación y la importancia de la Gestión de Procesos de Negocio en las organizaciones de  hoy día</li>
	<li>Conocer el conjunto de conceptos que se manejan y sobre los que se basa la Gestión de Procesos de Negocio</li>
	<li>Cuerpo común de conocimientos de BPM – CBOK</li>
	<li>Entender el ciclo de vida de la Gestión de Procesos de Negocio</li>
	<li>Reconocer que existen diversos lenguajes, notaciones, herramientas y metodologías implicadas en la implantación del BPM</li>
	<li>Comprender el alcance y las limitaciones de la implantación de BPM en las organizaciones</li>
	<li>Examinar casos de aplicación del BPM en diferentes categorías de organizaciones</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>Introducción  a la Gestión de Procesos de Negocio - BPM</li>
	<li>Definiciones básicas de la Gestión de Procesos de Negocio</li>
	<li>Cuerpo Común de Conocimientos de Gestión de Procesos de Negocio  - (BPM- CBOK)</li>
	<li>Lenguajes, Notaciones, Herramientas y Metodologías para la Gestión de Procesos de Negocio </li>
	<li>Estudios de casos exitosos de aplicación de la Gestión de Procesos de Negocio</li>
	<li>Alcances y limitaciones de la Gestión de Procesos de Negocio </li>
	<li>El modelo de madurez BPM y cómo introducir BPM en su organización</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en la gestión de las áreas funcionales de la empresa (incluyendo la Gestión Informática) que requieran modelar, automatizar y gestionar los procesos de negocio de la empresa.
@stop
@section('horas')
Tres (3) días (20 horas).
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Fundamentos de la Gestión de Procesos de Negocio BPM') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso13') }}
@stop