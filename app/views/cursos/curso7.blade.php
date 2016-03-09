@extends ('layouts.cursos')
@section ('title')
Diseño de Software Basado en Servicios
@stop
@section('img')
{{ HTML::image('assets/images/curso/dis-soft.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Diseño de Software Basado en Servicios
@stop
@section('descripcion')
La Arquitectura Basada en Servicios (SOA) es un nuevo paradigma para el desarrollo de aplicaciones empresariales en plataformas heterogéneas. SOA se apoya en varios conceptos fundamentales: servicios, interoperabilidad, bajo acoplamiento y reutilización. En este curso, se discute los aspectos conceptuales, tecnológicos y metodológicos del desarrollo de software basado en servicios y, particularmente, en la arquitectura SOA. Se hace énfasis en el análisis y diseño de servicios y aplicaciones basadas en servicios usando el lenguaje UML 2.5.
@stop
@section('objetivos')
<ul>
	<li>Aplicar las prácticas, modelos de procesos y métodos de la Ingeniería de Software Basada en Componentes y Servicios.</li>
	<li>Utilizar el lenguaje UML 2.5 para especificar y diseñar servicios web.</li>
	<li>Especificar y diseñar aplicaciones empresariales basadas en la arquitectura SOA.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>Conceptos fundamentales
		<ul>
			<li>Reutilización de software, componentes distribuidos, interoperabilidad, bajo acoplamiento, servicios y procesos de negocio.</li>
			<li>Servicios Web (Web Services)</li>
			<li>La Arquitectura SOA (Service Oriented Architecture)
					<ul>
						<li>Componentes de SOA: WSDL, SOAP, UDDI</li>
					</ul>
			</li>
			<li>Gestión de Procesos de Negocio (BPM-Business Process Management)</li>
		</ul>
	</li>
	<li>Modelos de Procesos de Desarrollo de Software Distribuido
		<ul>
			<li>Modelos basados en la reutilización de componentes</li>
			<li>Modelos basados en líneas de productos</li>
			<li>Modelos basados en servicios</li>
		</ul>
	</li>
	<li>Desarrollo de Servicios Web
			<ul>
				<li>Procesos de desarrollo de software basado en servicios</li>
				<li>Métodos de desarrollo de servicios web</li>
				<li>Diseño de servicios web usando UML 2.5</li>
			</ul>
	</li>
	<li>Diseño de aplicaciones basadas en servicios
			<ul>
				<li>Composición, coreografía y orquestación de servicios</li>
				<li>Métodos de diseño de aplicaciones basadas en servicios</li>
				<li>Diseño de aplicaciones basadas en servicios usando UML 2.5 y BPMN.</li>
			</ul>
	</li>
	<li>Aspectos gerenciales del desarrollo de software basado en servicios</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en el desarrollo y mantenimiento de software, sistemas de información u otras aplicaciones y que deseen familiarizarse y adquirir nuevos conocimientos sobre los paradigmas de producción de software basados en la arquitectura SOA y la reutilización de componentes distribuidos, particularmente,  servicios web.
@stop
@section('horas')
Tres (3) días (20 horas).
@stop
@section('requisitos')
<p><h4>Requisitos:</h4>Conocimientos básicos de sistemas distribuidos.  Conocimientos y experiencia práctica en el uso del Lenguaje UML y de herramientas de modelado con UML.</p>
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Diseño de Software Basado en Servicios') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso7') }}
@stop