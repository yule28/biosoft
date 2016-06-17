@extends ('layouts.cursos')

@section ('title')
	Desarrollo de Software con UML
@stop

@section('img')
	{{ HTML::image('assets/images/curso/uml.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive')) }}
@stop
@section('curso-tit')
	Desarrollo de Software con UML
@stop
@section('descripcion')
	El desarrollo de software es un proceso que consta de diferentes actividades, entre las que se destacan: el modelado del negocio, el desarrollo de requisitos, el diseño arquitectónico, el diseño detallado, la programación y las pruebas de la aplicación. En cada una de estas actividades, el ingeniero de software debe elaborar diferentes tipos de modelos. El Lenguaje de Modelado Unificado (UML 2.5) y su extensión para modelado de negocios (UML Business) son los dos más utilizados en la Industria de Software para elaborar estos modelos, que son indispensables para analizar, diseñar, programar y probar una aplicación. Este curso discute estos dos lenguajes a la luz de su aplicabilidad en cada una de las actividades mencionadas.
@stop
@section('objetivos')
	<ul>
		<li>Utilizar el Lenguaje de Modelado Unificado - UML 2.5 y sus principales diagramas para modelar procesos de negocio, especificar requisitos, diseñar la arquitectura, la base de datos y los programas de una aplicación.</li>
		<li>Utilizar la extensión para negocios de UML (Extensión de Eriksson y Penker) para modelar sistemas de negocio y sus flujos de trabajo (workflow).</li>
		<li>Especificar los requisitos de una aplicación mediante casos de uso.</li>
		<li>Modelar la arquitectura de una aplicación empleando diagramas de componentes y diagramas de clases.</li>
		<li>Modelar el comportamiento de una aplicación usando diagramas de interacción y diagramas de estado.</li>
		<li>Modelar la implementación de una aplicación usando diagramas de despliegue.</li>
	</ul>
@stop
@section('contenidos')
	<ul>
		<li>Lenguajes de Modelado de Sistemas y Software</li>
		<li>El Proceso de Desarrollo de Software con UML y BPMN</li>
		<li>El Lenguaje UML 2.5: características, usos y tipos de diagramas</li>
		<li>La extensión para negocios del lenguaje UML de Eriksson y Penker (UML Business)</li>
		<li>Modelado de sistemas de negocios
			<ul>
				<li>Diagramas de UML Business</li>
			</ul>
		</li>
		<li>Modelado funcional de aplicaciones
			<ul>
				<li>Diagramas de Casos de Uso</li>
			</ul>
		</li>
		<li>Modelado estructural de aplicaciones
			<ul>
				<li>Diagramas de Clase</li>
			</ul>
		</li>
		<li>Modelado dinámico de aplicaciones
			<ul>
				<li>Diagramas de Secuencias</li>
				<li>Diagramas de Comunicación</li>
				<li>Diagramas de Estado</li>
				<li>Diagramas de Interacción</li>
			</ul>
		</li>
		<li>Modelado de componentes de software
			<ul>
				<li>Diagramas de componentes</li>
			</ul>
		</li>
		<li>Modelado de la implementación de aplicaciones
			<ul>
				<li>Diagramas de Despliegue</li>
			</ul>
		</li>
	</ul>
@stop
@section('dirigido')
	Este curso está dirigido a todos aquellos profesionales que participan en el desarrollo y mantenimiento de software, sistemas de información u otras aplicaciones y que deseen adquirir competencias en el modelado de sistemas de negocio y aplicaciones usando los lenguajes UML 2.5.
@stop
@section('horas')
	Cuatro (3) días (24 horas).
	<br>
	Próximo curso: 15-17 JUNIO 2016
	<br>
	Inscripciones: atencion@biosoftca.com
	<br>
	Tlf: 0274 789 26 69
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Desarrollo de Software con UML') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso1') }}
@stop