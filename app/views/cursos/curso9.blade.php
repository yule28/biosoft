@extends ('layouts.cursos')
@section ('title')
Gestión de Proyectos de Software bajo el PMBOK
@stop
@section('img')
{{ HTML::image('assets/images/curso/gest-proy.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Gestión de Proyectos de Software bajo el PMBOK
@stop
@section('descripcion')
Para manejar la complejidad del desarrollo de software es indispensable que cada desarrollo sea gestionado como un proyecto de ingeniería. Los proyectos de ingeniería permiten controlar diferentes variables del desarrollo de software, particularmente, el costo del desarrollo, el tiempo empleado para producir la solución y la calidad que ella debe tener. Este curso, se concentra en la gestión de proyectos de software basado en el cuerpo de conocimientos de la Dirección de Proyectos PMBOK. Se discute como iniciar un proyecto de software, cómo planificarlo, cómo dirigir su ejecución, controlarlo y cerrarlo.
@stop
@section('objetivos')
<ul>
	<li>Caracterizar el proceso de gestión de proyectos según el cuerpo de conocimientos PMBOK del Instituto de Gestión de Proyectos (PMI).</li>
	<li>Aplicar, en un proyecto de desarrollo de software, los procesos de inicio (constitución), planificación, ejecución, seguimiento, control y cierre.</li>
	<li>Planificar el alcance, los tiempos, los costos, los recursos humanos y las adquisiciones de un proyecto de desarrollo de software.</li>
	<li>Utilizar una herramienta de software para la planificación y control de un proyecto.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>Conceptos fundamentales de Gestión de Proyectos.</li>
	<li>El ciclo de vida de un proyecto de software.</li>
	<li>El cuerpo de conocimientos de la Dirección de Proyectos PMBOK.</li>
	<li>El plan del proyecto: estructura y componentes.</li>
	<li>Los procesos de gestión de proyectos de software
		<ul>
			<li>Inicio de un proyecto</li>
			<li>Planificación</li>
			<li>Dirección</li>
			<li>Seguimiento y control</li>
			<li>Cierre del proyecto</li>
		</ul>
	</li>
	<li>La planificación de un proyecto
		<ul>
			<li>Planificación del alcance</li>
			<li>Planificación de tiempos</li>
			<li>Estimación de costos</li>
			<li>Planificación de recursos humanos</li>
		</ul>
	</li>
	<li>Herramientas para la gestión de proyectos</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en el análisis y diseño de software, sistemas de información u otras aplicaciones y que deseen mejorar sus conocimientos en la gestión de proyectos de desarrollo de software o capacitarse como líderes de proyectos de software.
@stop
@section('horas')
Cuatro (4) días (28 horas)
@stop
@section('requisitos')
<p><h4>Requisitos:</h4>Experiencia en el desarrollo de software (aplicaciones, bases de datos y/o sistemas de información). Conocimientos generales de métodos de desarrollo de software.</p>
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Gestión de Proyectos de Software bajo el PMBOK') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso9') }}
@stop