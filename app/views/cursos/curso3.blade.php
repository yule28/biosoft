@extends ('layouts.cursos')
@section ('title')
Modelado de Negocios usando UML y BPMN
@stop
@section('img')
{{ HTML::image('assets/images/curso/mod-neg.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Modelado de Negocios usando UML y BPMN
@stop
@section('descripcion')
El Modelado de Negocios es un proceso técnico-gerencial que permite modelar y relacionar los elementos más importantes de una empresa, esto es: sus objetivos, procesos de negocio, reglas de negocio, objetos de negocio, actores, estructura organizativa, entre otros. El Modelado de Negocios ayuda a ganar conocimiento de una empresa y de sus procesos de negocio. Es utilizado en amplia variedad de actividades profesionales, entre las que se destacan: Gestión de Procesos de Negocio (BPM), Reingeniería de Procesos, Diseño Organizacional, Desarrollo de Sistemas de Información, Automatización Industrial y Arquitecturas Empresariales. En este curso, se discute la importancia del modelado de negocios en una empresa y se analizan los conceptos, modelos, procesos, técnicas y herramientas del Modelado de Negocios y sus aplicaciones en el contexto empresarial. Se describe un método para elaborar modelos de negocio que utiliza los lenguajes UML 2.5 y BPMN 2.0 para representar distintos aspectos de una empresa.
@stop
@section('objetivos')
<ul>
	<li>Comprender la importancia del modelado de negocios en las empresas modernas.</li>
	<li>Utilizar los conceptos, procesos, métodos y técnicas de Modelado de Negocios para conocer y modelar un sistema de negocios.</li>
	<li>Aplicar los lenguajes UML 2.5 y BPMN 2.0 para elaborar modelos de negocio.</li>
	<li>Utilizar los modelos de negocios como medios para la identificación de los requisitos de una aplicación.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>El Modelado de Negocios
		<ul>
			<li>Conceptos fundamentales</li>
			<li>Sistemas de negocios</li>
			<li>Modelo conceptual de una empresa</li>
			<li>El proceso de Modelado de Negocios</li>
		</ul>
	</li>
	<li>Notaciones y lenguajes para el Modelado de Negocios 
			<ul>
				<li>UML 2.5 y sus variantes para modelado de negocios (UML Business)</li>
				<li>La notación BPMN (Business Process Management Notation) 2.0.</li>
			</ul>
	</li>
	<li>El Método de Modelado de Negocios:
			<ul>
				<li>Modelado de objetivos</li>
				<li>Modelado de procesos de negocio</li>
				<li>Modelado de actividades (flujos de trabajo)</li>
				<li>Modelado de objetos de negocio</li>
				<li>Modelado de actores y estructuras organizativas</li>
				<li>Modelado de reglas de negocio</li>
				<li>Modelado de eventos</li>
				<li>Integración de modelos</li>
			</ul>
	</li>
	<li>Aplicaciones del modelado de negocios</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en actividades de diseño organizacional, reingeniería de procesos, desarrollo de sistemas de información, arquitecturas empresariales y otras actividades técnicas o gerenciales que involucren el modelado de una empresa o de una parte de ella.  Este curso es fundamental para la capacitación de analistas de negocios y analistas de sistemas.
@stop
@section('horas')
Cuatro (4) días (28 horas).
@stop
@section('requisitos')
<p><h4>Requisitos:</h4>Conocimientos básicos de sistemas de información y de los procesos de una empresa. Es deseable tener conocimientos generales de UML y BPMN.</p>
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Modelado de Negocios usando UML y BPMN') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso3') }}
@stop