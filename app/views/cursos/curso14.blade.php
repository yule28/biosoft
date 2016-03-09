@extends ('layouts.cursos')

@section ('title')
Taller de Modelado con la Notación BPMN 2.0
@stop

@section('img')
{{ HTML::image('assets/images/curso/tall-mod-bpmn.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Taller de Modelado con la Notación BPMN 2.0
@stop
@section('descripcion')
Uno de los procesos fundamentales de la Gestión de Procesos del Negocio (BPM- Business Process Management) es el modelado de los procesos de una empresa y de sus interrelaciones. BPMN 2.0 es, hoy en día, considerado el estándar de facto para el modelado de procesos de negocio.<br>
En este taller, de naturaleza completamente práctica, el participante adquiere los conocimientos y habilidades necesarias para aplicar BPMN 2.0 en su empresa u organización, haciendo uso de una herramienta de modelado BPMN.
@stop
@section('objetivos')
<ul>
	<li>Aplicar la notación BPMN 2.o en el contexto de la Gestión de Procesos de Negocio BPM.</li>
	<li>Modelar procesos de negocio usando la notación BPMN 2.0.</li>
	<li>Elaborar, usando una herramienta de modelado BPMN, los siguientes tipos de diagramas:
		<ul>
			<li>Diagramas de procesos</li>
			<li>Diagramas de colaboración</li>
			<li>Diagramas de conversación</li>
			<li>Diagramas de coreografía</li>
		</ul>
	</li>
	<li>Utilizar mejores prácticas reconocidas (mejores prácticas) durante el modelado de sus procesos de negocio.</li>
	<li>Documentar modelos de procesos de negocio utilizando la herramienta de modelado BPMN.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>La Gestión de Procesos de Negocio - BPM y sus relaciones con la notación BPMN</li>
	<li>Técnicas y prácticas de modelado de procesos de negocio</li>
	<li>Características, sintaxis y semántica de la Notación BPMN 2.0</li>
	<li>Herramientas de modelado con BPMN 2.0</li>
	<li>Modelado de procesos de negocio usando:
		<ul>
			<li>Diagramas de procesos de negocio simples (no automatizables)</li>
			<li>Diagramas de procesos de negocio complejos (automatizables)</li>
		</ul>
	</li>
	<li>Modelado de relaciones entre procesos de negocio con:
		<ul>
			<li>Diagramas de colaboración</li>
			<li>Diagramas de conversación</li>
			<li>Diagramas de coreografía</li>
		</ul>
	</li>
</ul>
@stop
@section('dirigido')
Este taller está dirigido a todos aquellos profesionales que participan en la gestión de las áreas funcionales de la empresa (incluyendo la Gestión Informática) que requieran modelar, automatizar y gestionar los procesos de negocio de la empresa.
@stop
@section('horas')
Cuatro (4) días (28 horas).
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Taller de Modelado con la Notación BPMN 2.0') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso14') }}
@stop