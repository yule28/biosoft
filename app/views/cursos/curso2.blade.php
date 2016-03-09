@extends ('layouts.cursos')
@section ('title')
Desarrollo de Software: Métodos Ágiles y Balanceados
@stop
@section('img')
{{ HTML::image('assets/images/curso/des-soft.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive'))}}
@stop
@section('curso-tit')
Desarrollo de Software: Métodos Ágiles y Balanceados
@stop
@section('descripcion')
La calidad de los productos de software está determinada por los procesos que se emplean para producirlo. En este curso, se describe el desarrollo de software como un proceso de negocios que involucra actividades técnicas, de gestión y de soporte. Se discuten los principales enfoques metodológicos, haciendo énfasis en los enfoques ágiles y balanceados. Se discuten las prácticas y procesos ágiles más conocidos y se describe, en detalle, un método balanceado (ágil + disciplinado) orientado al desarrollo de aplicaciones web y a pequeños grupos de trabajo.
@stop
@section('objetivos')
<ul>
	<li>Caracterizar el desarrollo de software como un proceso de negocio.</li>
	<li>Seleccionar los métodos que mejor se apliquen al desarrollo de sus aplicaciones y a las características de su empresa.</li>
	<li>Utilizar métodos ágiles y balanceados para desarrollar aplicaciones.</li>
	<li>Emplear las mejores prácticas ágiles durante el desarrollo de aplicaciones.</li>
</ul>
@stop
@section('contenidos')
<ul>
	<li>Diferencias entre el desarrollo de software artesanal y el ingenieril.</li>
	<li>El proceso de desarrollo de software.
		<ul>
			<li>Características del desarrollo de software</li>
			<li>Un modelo del proceso de desarrollo de software</li>
			<li>El modelo de las 6P: Problema, Productos, Proceso, Proyecto, Prácticas y Personal.</li>
		</ul>
	</li>
	<li>Enfoques y orientaciones del desarrollo de software. 
		<ul>
			<li>Ciclos de vida, modelos de procesos y métodos de desarrollo de software.</li>
			<li>Enfoques disciplinados, ágiles y balanceados.</li>
		</ul>
	</li>
	<li>El enfoque ágil:</li>
	<ul>
		<li>Las mejores prácticas ágiles.</li>
		<li>Los métodos XP y SCRUM.</li>
	</ul>
	<li>El enfoque balanceado (ágil + disciplinado):
		<ul>
			<li>Combinando agilidad y disciplina.</li>
			<li>El método Blue WATCH.</li>
			<li>El modelo de productos
				<ul>
					<li>Productos técnicos</li>
					<li>Productos de gestión</li>
				</ul>
			<li>El modelo de procesos
				<ul>
					<li>Cadena de valor del desarrollo de SW</li>
					<li>Procesos técnicos</li>
					<li>Procesos de gestión del proyecto</li>
					<li>Procesos de soporte</li>
				</ul>
			</li>
			<li>El modelo de actores
				<ul>
					<li>Roles y responsabilidades</li>
					<li>Estructuras organizacionales ágiles y disciplinadas para los equipos de desarrollo</li>
				</ul>
			</li>
			<li>Cómo adaptar el método Blue WATCH a su empresa.</li>
			</li>
		</ul>
	</li>
</ul>
@stop
@section('dirigido')
Este curso está dirigido a todos aquellos profesionales que participan en el desarrollo y mantenimiento de software, sistemas de información u otras aplicaciones y que deseen actualizar sus conocimientos y adquirir competencias en el uso de métodos y prácticas ágiles y balanceadas.
@stop
@section('horas')
Cuatro (4) días (28 horas)
@stop
@section('requisitos')

@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Desarrollo de Software: Métodos Ágiles y Balanceados') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso2') }}
@stop