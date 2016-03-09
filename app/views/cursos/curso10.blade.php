@extends ('layouts.cursos')

@section ('title')
Gestión de Riesgos, Configuración y Calidad
@stop

@section('img')
{{ HTML::image('assets/images/curso/gest-riesg.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Gestión de Riesgos, Configuración y Calidad
@stop
@section('descripcion')
La Gestión de los Riesgos, de la Configuración y de la Calidad son tres procesos en los que se apoya el desarrollo de software. La Gestión de Riesgos se encarga del manejo de todos aquellos factores que pueden afectar negativamente un proyecto de software. La Gestión de la Configuración lleva un control de los cambios que pueden ocurrir a los productos que se generan durante el desarrollo de una aplicación. La Gestión de la Calidad garantiza que los productos elaborados a lo largo del proyecto tengan la calidad requerida. En este curso, se estudian los conceptos, métodos, técnicas y mejores prácticas que se emplean, en la Ingeniería del Software, para gestionar estos tres aspectos de todo proyecto de software.
@stop
@section('objetivos')
<ul>
	<li>Planificar, identificar, analizar, monitorear y controlar los riesgos que pueden afectar la normal ejecución de un proyecto de software.</li>
	<li>Planificar las respuestas que hay que activar cuando ocurran riesgos que afecten el proyecto.</li>
	<li>Controlar los cambios y mantener la integridad de los productos que forman la configuración de una aplicación.</li>
	<li>Planificar, asegurar, verificar y monitorear la calidad de los productos que se generan durante el desarrollo de una aplicación, así como de los procesos empleados para elaborar tales productos.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>Gestión de Riesgos en proyectos de software
		<ul>
			<li>Conceptos fundamentales</li>
			<li>Importancia de la Gestión de Riesgos</li>
			<li>El proceso de Gestión de Riesgos</li>
			<li>Técnicas, métodos y mejores prácticas de la Gestión de Riesgos</li>
		</ul>
	</li>
	<li>Gestión de la Configuración del Software
		<ul>
			<li>Conceptos fundamentales</li>
			<li>Elementos de la configuración del software</li>
			<li>El proceso de configuración del software</li>
			<li>Técnicas, métodos y mejores prácticas empleadas en la Gestión de la Configuración.</li>
		</ul>
	</li>
	<li>Gestión de la Calidad del Software
		<ul>
			<li>Conceptos fundamentales</li>
			<li>Calidad del producto y calidad del proceso</li>
			<li>Sistemas de Gestión de la Calidad</li>
			<li>El proceso de Gestión de la Calidad del Software</li>
			<li>Modelos, técnicas, métodos y mejores prácticas de Gestión de la Calidad</li>
		</ul>
	</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en el análisis y diseño de software, sistemas de información u otras aplicaciones y que deseen mejorar sus conocimientos de gestión de riesgos, gestión de configuración y gestión de calidad y capacitarse como Líder de Proyectos de software.
@stop
@section('horas')
Experiencia en el desarrollo de software (aplicaciones, bases de datos y/o sistemas de información). Conocimientos generales de métodos de desarrollo de software.
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Gestión de Riesgos, Configuración y Calidad') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso10') }}
@stop