@extends ('layouts.cursos')
@section ('title')
Arquitecturas de Software y Patrones de Diseño
@stop
@section('img')
{{ HTML::image('assets/images/curso/arq-soft.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Arquitecturas de Software y Patrones de Diseño
@stop
@section('descripcion')
Una arquitectura de software es una descripción de la estructura que tiene o debe tener una aplicación. Esta arquitectura consta de componentes arquitectónicos, conexiones entre estos componentes y una justificación de la estructura concebida por el arquitecto. Los patrones de diseño, por su parte, son una ayuda invalorable para diseñar los componentes de la arquitectura. En este curso, se describen los conceptos fundamentales de las arquitecturas de software, incluyendo modelos, estilos, vistas, lenguajes y patrones usados para diseñar este tipo de arquitecturas. Se discute, también, los principales patrones de diseño que son utilizados para definir la estructura interna de un programa.
@stop
@section('objetivos')
<ul>
	<li>Diseñar la arquitectura de una aplicación haciendo uso del lenguaje UML 2.5.</li>
	<li>Documentar la arquitectura de una aplicación a través de diferentes vistas arquitectónicas: funcional, estructural, de uso, de comportamiento y de implementación.</li>
	<li>Usar patrones de diseño para elaborar la estructura y comportamiento de un programa, así como otros aspectos relacionados, tales como la creación de objetos y la concurrencia.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>Arquitecturas de software:
		<ul>
			<li>Definición y usos</li>
			<li>El modelo 4+1</li>
			<li>Vistas, estilos y patrones arquitectónicos </li>
		</ul>
	</li>
	<li>Diseño arquitectónico
		<ul>
			<li>El proceso de diseño arquitectónico</li>
			<li>Métodos de diseño arquitectónico</li>
			<li>UML 2.5 como lenguaje de diseño arquitectónico</li>
			<li>Documentación del diseño arquitectónico</li>
			<li>Relaciones con la Ingeniería de Requisitos y el Diseño Detallado</li>
		</ul>
	</li>
	<li>Patrones de diseño:
		<ul>
			<li>Definición y usos</li>
			<li>Patrones de creación</li>
			<li>Patrones estructurales</li>
			<li>Patrones de comportamiento</li>
			<li>Otros tipos de patrones</li>
			<li>Ejemplos de uso de patrones</li>
		</ul>
	</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en el análisis y diseño de software, sistemas de información u otras aplicaciones y que deseen mejorar sus conocimientos en el proceso de diseño arquitectónico y deseen capacitarse como arquitectos de software.
@stop
@section('horas')
Cuatro (4) días (28 horas).
@stop
@section('requisitos')
<p><h4>Requisitos:</h4>Conocimientos básicos de programación orientada a objetos.  Experiencia en el uso de: UML, herramientas de modelado con UML y lenguajes de programación OO.</p>
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Arquitecturas de Software y Patrones de Diseño') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso5') }}
@stop