@extends ('layouts.cursos')

@section ('title')
Arquitecturas Empresariales con TOGAF 9.1
@stop

@section('img')
{{ HTML::image('assets/images/curso/arq-empres.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Arquitecturas Empresariales con TOGAF 9.1
@stop
@section('descripcion')
Un objetivo estratégico de la gestión de una empresa es la alineación de sus procesos de negocio con los sistemas de información y las tecnologías de información y comunicaciones (TIC) que les sirven de apoyo. Una arquitectura empresarial describe los procesos de negocio de una empresa, los sistemas de información que apoyan tales procesos y las TIC sobre las que se implementan dichos sistemas. El desarrollo y evolución de la arquitectura de una empresa es un proceso complejo que requiere una planificación de carácter estratégico. <br>
En este curso, se discuten los conceptos fundamentales de las arquitecturas empresariales, así como el marco de trabajo TOGAF 9.1 y el método ADM para el análisis, diseño y planificación de arquitecturas empresariales.
@stop
@section('objetivos')
<ul>
	<li>Describir los conceptos fundamentales de las Arquitecturas Empresariales.</li>
	<li>Explicar la importancia que una arquitectura empresarial tiene para su organización. </li>
	<li>Aplicar el marco TOGAF 9.1 y su método ADM para elaborar arquitecturas empresariales.</li>
	<li>Elaborar la arquitectura empresarial de una organización o de un área de ella.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>Fundamentos de las arquitecturas empresariales
		<ul>
			<li>Que es una arquitectura empresarial</li>
			<li>Importancia de las arquitecturas empresariales en la Gestión Informática</li>
			<li>Marcos de trabajo arquitectónicos</li>
			<li>Métodos de elaboración de arquitecturas empresariales</li>
		</ul>
	</li>
	<li>Introducción a TOGAF 9.1
		<ul>
			<li>El marco de trabajo TOGAF 9.1</li>
			<li>El método ADM</li>
		</ul>
	</li>
	<li>Modelado de las arquitecturas del negocio
		<ul>
			<li>Introducción al modelado de negocios con UML</li>
		</ul>
	</li>
	<li>Modelado de las arquitecturas de sistemas de información
		<ul>
			<li>Modelado de las arquitecturas de datos</li>
			<li>Modelado de las arquitecturas de aplicaciones</li>
		</ul>
	</li>
	<li>Modelado de las arquitecturas de tecnologías de información y comunicación</li>
	<li>Planificación de la migración y desarrollo de una arquitectura empresarial</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en la gestión de las áreas funcionales de la empresa (incluyendo la Gestión Informática) que requieran planificar, desarrollar, modelar y evaluar la arquitectura empresarial de su organización.
@stop
@section('horas')
Cuatro (4) días (28 horas)
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Arquitecturas Empresariales con TOGAF 9.1') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso11') }}
@stop