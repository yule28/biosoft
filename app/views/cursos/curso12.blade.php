@extends ('layouts.cursos')

@section ('title')
Taller de Modelado de Arquitecturas Empresariales usando ArchiMate 2.0
@stop

@section('img')
{{ HTML::image('assets/images/curso/tall-mod-arq.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Taller de Modelado de Arquitecturas Empresariales usando ArchiMate 2.0
@stop
@section('descripcion')
Una arquitectura empresarial describe los procesos de negocio de una empresa, los sistemas de información que apoyan tales procesos y las tecnologías de información y comunicación (TIC) sobre las que se implementan dichos sistemas. El desarrollo de una arquitectura de una empresa es un proceso complejo que requiere la elaboración de un amplio conjunto de modelos. ArchiMate 2.0 es un lenguaje especialmente diseñado para elaborar estos modelos. Permite representar una arquitectura empresarial en cada uno de sus niveles o capas: negocio, sistemas de información y tecnologías IC.<br>
En este taller, de carácter práctico, el participante adquiere las bases conceptuales, metodológicas e instrumentales para utilizar ArchiMate 2.0 en el modelado de arquitecturas empresariales.
@stop
@section('objetivos')
<ul>
	<li>Elaborar la arquitectura empresarial de una organización o de un área de ella.</li>
	<li>Modelar arquitecturas de negocio, de sistemas de información y de TIC, usando el lenguaje ArchiMate 2.0 y una herramienta de modelado apropiada.</li>
	<li>Modelar aspectos de la implementación y migración de una arquitectura empresarial</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>Revisión de los fundamentos de las arquitecturas empresariales</li>
	<li>El método ADM de TOGAF 9.1</li>
	<li>El lenguaje de modelado Archimate 2.0
		<ul>
			<li>Características</li>
			<li>Sintaxis y semántica</li>
			<li>Núcleo del lenguaje</li>
			<li>Extensión motivacional</li>
			<li>Extensión de implementación y migración</li>
		</ul>
	</li>
	<li>Modelado de la visión arquitectónica</li>
	<li>Modelado de la arquitectura de negocio</li>
	<li>Modelado de la arquitectura de datos</li>
	<li>Modelado de la arquitectura de aplicaciones</li>
	<li>Modelado de la arquitectura tecnológica</li>
	<li>Modelado de aspectos de la implementación y migración</li>
</ul>
@stop
@section('dirigido')
Este taller está dirigido a todos aquellos profesionales que participan en la gestión informática de una empresa y que requieren planificar, desarrollar, modelar y evaluar la arquitectura empresarial de su organización.
@stop
@section('horas')
Cuatro (4) días (28 horas).
@stop
@section('requisitos')
<p><h4>Requisitos:</h4>Conocimientos de arquitecturas empresariales y del marco de trabajo TOGAF 9.1 o haber tomado previamente el curso de Arquitecturas Empresariales con TOGAF 9.1.</p>
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Taller de Modelado de Arquitecturas Empresariales usando ArchiMate 2.0') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso12') }}
@stop