@extends ('layouts.cursos')
@section ('title')
Pruebas de Software: Técnicas y Gestión
@stop
@section('img')
{{ HTML::image('assets/images/curso/prueb-soft.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Pruebas de Software: Técnicas y Gestión
@stop
@section('descripcion')
Las pruebas de una aplicación se realizan a tres niveles diferentes: pruebas unitarias, pruebas de integración y pruebas del sistema. Las pruebas de unidad verifican la calidad de los componentes de software que los programadores elaboran. Las pruebas de integración verifican que la integración de estos componentes no produzca errores. Las pruebas del sistema verifican dinámicamente el cumplimiento de los requisitos funcionales y no funcionales de la aplicación.  En este curso, se discuten las técnicas más utilizadas en la Industria del Software para realizar las pruebas unitarias, de integración y del sistema. Se describen, también, diferentes procesos de pruebas, las mejores prácticas  y los aspectos gerenciales necesarios para realizar pruebas efectivas.
@stop
@section('objetivos')
<ul>
	<li>Utilizar los conceptos, principios y mejores prácticas empleadas en la Industria del Software para realizar pruebas de software.</li>
	<li>Diseñar y ejecutar pruebas de unidad e integración de una aplicación utilizando técnicas y estrategias eficaces.</li>
	<li>Diseñar y ejecutar las pruebas funcionales y no-funcionales de un sistema.</li>
	<li>Planificar, organizar y controlar el proceso de pruebas de una aplicación.</li>
	<li>Utilizar los principios y mejores prácticas empleadas en la Industria de Software para administrar las pruebas de aplicaciones.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>Verificación y Validación de Software</li>
	<li>Las pruebas y el proceso de desarrollo de software
		<ul>
			<li>El proceso de pruebas de software</li>
			<li>Programación guiada por las pruebas</li>
		</ul>
	</li>
	<li>Niveles de pruebas</li>
	<li>Pruebas de unidades
		<ul>
			<li>Técnicas fundamentales de pruebas de software</li>
			<li>Técnicas de pruebas caja negra y caja blanca</li>
			<li>Pruebas de unidades orientadas a objetos (OO)</li>
		</ul>
	</li>
	<li>Pruebas de integración
		<ul>
			<li>Técnicas de pruebas de integración</li>
			<li>Pruebas de integración orientadas a objetos</li>
		</ul>
	</li>
	<li>Pruebas del sistema
		<ul>
			<li>Técnicas de pruebas del sistema</li>
			<li>Pruebas funcionales, no-funcionales y de aceptación</li>
			<li>Pruebas de interfaces gráficas</li>
		</ul>
	</li>
	<li>Actividades gerenciales de las pruebas de software
		<ul>
			<li>Planificación y control de las pruebas</li>
			<li>Organización de grupos de pruebas</li>
			<li>Documentación de las pruebas</li>
		</ul>
	</li>
	<li>Principios y mejores prácticas de pruebas</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en los procesos de desarrollo de software, sistemas de información y otras aplicaciones que deseen conocer o dominar los procesos técnicos y gerenciales, las estrategias, las técnicas y las mejores prácticas de las pruebas de software.
@stop
@section('horas')
Cuatro (4) días (28 horas)
@stop
@section('requisitos')
<p><h4>Requisitos:</h4>Conocimientos básicos de programación orientada a objetos. Experiencia en el uso del lenguaje UML.</p>
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Pruebas de Software: Técnicas y Gestión') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso8') }}
@stop