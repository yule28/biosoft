@extends ('layouts.cursos')
@section ('title')
Análisis y Diseño de Software Orientado a Objetos
@stop
@section('img')
{{ HTML::image('assets/images/curso/anal-dis-soft.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Análisis y Diseño de Software Orientado a Objetos
@stop
@section('descripcion')
La Orientación a Objetos es el paradigma dominante en el desarrollo de aplicaciones web. En este curso, se revisan los conceptos fundamentales de la Orientación a Objetos desde la perspectiva de la Programación. Se discute, además, como especificar y diseñar la estructura y el comportamiento de un programa usando el lenguaje UML 2.5. Se hace énfasis en el modelado estructural y dinámico de un programa a través del Análisis y Diseño Orientado a Objetos.
@stop
@section('objetivos')
<ul>
	<li>Describir y utilizar los principios, conceptos, procesos y mejores prácticas del análisis y diseño empleados en la Ingeniería de Software para desarrollar aplicaciones web orientadas a objetos (OO).</li>
	<li>Analizar aplicaciones orientadas a objetos usando diagramas de casos de uso y diagramas de clases del lenguaje UML 2.5.</li>
	<li>Diseñar aplicaciones orientadas a objetos usando los diagramas de clases, de estado y de secuencias del lenguaje UML 2.5.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>Conceptos fundamentales de diseño de software</li>
	<li>El proceso de diseño de software:
	<ul>
		<li>Diseño de la arquitectura de una aplicación</li>
		<li>Diseño de la interfaz gráfica</li>
		<li>Diseño de las bases de datos</li>
		<li>Diseño de los programas</li>
	</ul>
	</li>
	<li>Fundamentos de la Orientación a Objetos (OO)</li>
	<li>Análisis Orientado a Objetos usando UML 2.5
		<ul>
			<li>Modelado funcional de una aplicación con casos de uso</li>
			<li>Modelado estructural de una aplicación usando diagramas de clase</li>
		</ul>
	</li>
	<li>Diseño Orientado a Objetos usando UML 2.5
		<ul>
			<li>Diseño de la base de datos de una aplicación usando diagramas de clases.</li>
			<li>Modelado dinámico de una aplicación con diagramas de estado, de secuencias y de vista general de la interacción (interaction overview).</li>
			<li>Modelado de la implementación de una aplicación con diagramas de componentes y despliegue.</li>
		</ul>
	</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en el desarrollo y mantenimiento de software, sistemas de información u otras aplicaciones y que deseen adquirir nuevos conocimientos en los procesos de análisis y diseño de software orientado a objetos usando el lenguaje UML y deseen capacitarse como diseñadores de software.
@stop
@section('horas')
Cuatro (4) días (28 horas).
@stop
@section('requisitos')

@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Análisis y Diseño de Software Orientado a Objetos') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso6') }}
@stop