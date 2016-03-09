@extends ('layouts.cursos')
@section ('title')
Ingeniería de Requisitos usando UML
@stop
@section('img')
{{ HTML::image('assets/images/curso/ing-req.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Ingeniería de Requisitos usando UML
@stop
@section('descripcion')
En el desarrollo de software, la Ingeniería de Requisitos provee los procesos de identificación, análisis, especificación, validación y gestión de los requisitos que una aplicación debe cumplir. En este curso, se discuten los conceptos fundamentales, las técnicas y las mejores prácticas de la Ingeniería de Requisitos y se explican, en detalle, cómo llevar a cabo los procesos mencionados usando diferentes tipos de diagramas del lenguaje UML 2.5.
@stop
@section('objetivos')
<ul>
	<li>Aplicar los conceptos, principios, procesos, prácticas de la Ingeniería de Requisitos durante el desarrollo de software.</li>
	<li>Descubrir, analizar, especificar y validar los requisitos de una aplicación, utilizando métodos, técnicas, notaciones y herramientas de la Ingeniería de Requisitos</li>
	<li>Gestionar los requisitos de una aplicación mediante el control de cambios y el seguimiento de sus requisitos.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>La Ingeniería de Requisitos
			<ul>
				<li>Objetivos y procesos de la Ingeniería de Requisitos</li>
				<li>El rol de la Ingeniería de Requisitos en el desarrollo de software</li>
			</ul>
	</li>
	<li>Requisitos
			<ul>
				<li>Definición</li>
				<li>Problemas</li>
				<li>Clasificación</li>
			</ul>
	</li>
	<li>Notaciones para Ingeniería de Requisitos
		<ul>
			<li>Casos de uso en UML</li>
			<li>Descripción de casos de uso</li>
		</ul>
	</li>
	<li>Herramientas para la Ingeniería de Requisitos</li>
	<li>El proceso detallado de la Ingeniería de Requisitos
		<ul>
			<li>Descubrimiento de Requisitos</li>
			<li>Análisis de Requisitos</li>
			<li>Especificación de Requisitos</li>
			<li>Validación de Requisitos</li>
			<li>Gestión de Requisitos</li>
		</ul>
	</li>
	<li>Relaciones entre el Modelado de Negocios y la Ingeniería de Requisitos</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en el análisis y diseño de software, sistemas de información u otras aplicaciones y que deseen mejorar sus conocimientos en los procesos de descubrimiento, análisis, especificación, validación y gestión de requisitos de software y deseen capacitarse como analistas de requisitos.
@stop
@section('horas')
Cuatro (4) días (28 horas).
@stop
@section('requisitos')
<p><h4>Requisitos:</h4>Experiencia en el desarrollo de aplicaciones o sistemas de información. Es deseable tener conocimientos del lenguaje UML.</p>
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Ingeniería de Requisitos usando UML') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso4') }}
@stop