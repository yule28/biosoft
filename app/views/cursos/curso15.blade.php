@extends ('layouts.cursos')

@section ('title')
	Desarrollo de Software Guiado por Pruebas (TDD) con Ruby on Rails
@stop

@section('img')
	{{ HTML::image('assets/images/curso/ruby-tdd.jpg', $alt="Desarrollo de Software Guiado por Pruebas", $attributes = array('class' => 'img-responsive')) }}
@stop
@section('curso-tit')
	Desarrollo de Software Guiado por Pruebas (TDD) con Ruby on Rails
@stop
@section('descripcion')
	Este curso-taller de carácter totalmente práctico, le permitirá al participante adquirir los conceptos, procesos, técnicas, herramientas y tecnologías necesarias para desarrollar aplicaciones web, bajo el enfoque guiado por pruebas y guiado por modelos, utilizando la plataforma de desarrollo Ruby on Rails con PostgreSQL. Está enfocado a la programación de una aplicación web, partiendo de un diseño existente en UML que contiene la funcionalidad, estructura y comportamiento de la aplicación a través de los diagramas de casos de uso, casos de pruebas, clases (base de datos), interfaces gráficas y diagramas de secuencia. El participante, implementará este diseño en la plataforma de desarrollo web Ruby on Rails, centrando la programación en los casos de prueba y luego en la lógica de la aplicación.
@stop
@section('objetivos')
	<ul>
		<li>Implementar (programar) una aplicación web a partir del diseño expresado en diagramas UML.</li>
		<li>Desarrollar habilidades en la programación web bajo el patrón arquitectónico Model View Controller (MVC).</li>
		<li>Codificar en el framework de pruebas MiniTest y Capybara, las pruebas de unidad, integración y funcionales.</li>
		<li>Codificar en Ruby on Rails la lógica de la aplicación.</li>
		<li>Ejecutar pruebas automatizadas a nivel de unidad, integración y funcionales.</li>
		<li>Desplegar la aplicación en un servidor en la nube .</li>
	</ul>
@stop
@section('contenidos')
	<ul>
		<li>Fundamentos de pruebas de software.</li>
		<li>Caso de estudio: Diseño de la aplicación con UML.</li>
		<li>Caso de estudio: Implementación de la aplicación en Ruby on Rails.</li>
		<li>Diseño e Implementación de Pruebas de unidad.</li>
		<li>Diseño e Implementación de Pruebas de integración.</li>
		<li>Diseño e Implementación de Pruebas de  funcionales.</li>
		<li>Despliegue de la aplicación.</li>
	</ul>
@stop
@section('dirigido')
	Este curso está dirigido a arquitectos de software, específicamente diseñadores de pruebas, ejecutores de pruebas y programadores web que requieren diseñar las pruebas, usando técnicas, estrategias y  modelos UML y automatizarlas usando frameworks de pruebas.
@stop
@section('horas')
	Cuatro (5) días (35 horas).
	<br>
	Próximo curso: 20-24 JUNIO 2016
	<br>
	Inscripciones: atencion@biosoftca.com
	<br>
	Tlf: 0274 789 26 69
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Desarrollo de Software Guiado por Pruebas (TDD) con Ruby on Rails') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso15') }}
@stop