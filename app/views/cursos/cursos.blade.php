@extends ('layouts.otras')

@section ('title') 
	Cursos In Company
@stop

@section ('content')
	{{ HTML::image('assets/images/curso/cabecera-cursos.jpg',
	$alt="imagen 1", $attributes = array('class' => 'img-responsive')) }}
	<div id="cursos" style="margin-top: 0px;">
		<div class="container">
			<div class="row titulo">
				<div class="col-sm-12 col-md-12">
					<h2>Cursos y Talleres <i>In Company</i></h2>
					<p>Para las empresas e instituciones interesadas en capacitar a su personal, bajo la modalidad presencial In Company, BIOSOFT ofrece  una amplia  variedad de cursos y talleres en las áreas de Ingeniería de Software y Gerencia Informática. Estos cursos se pueden adaptar  a las necesidades y requisitos particulares de su empresa y se dictan de acuerdo a una programación conveniente para ambas partes.</p>
				</div>
			</div>
			<div class="row lista">
				<div class="hidden-xs col-sm-1 col-md-1">
					{{ HTML::image('assets/images/capacitacion/is.fw.png', 
						$alt="imagen 1", $attributes = array('class' => 'img-responsive')) }}
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 is">
				<div class="hidden-xs iconos-cursos">
					{{ HTML::image('assets/images/capacitacion/cursos-is.jpg', 
						$alt="imagen 1", $attributes = array('class' => 'img-responsive')) }}
				</div>
				<h2 class="visible-xs">Ingeniería del Software</h2>
					<ul>
						<li><a href="UML">Lenguaje de Modelado de Software: UML 2.5</a></li>
						<li><a href="Metodos-Agiles">Desarrollo de Software: Métodos Ágiles y Balanceados (Scrum, XP y Blue WATCH)
						</a></li>
						<li><a href="Modelado-Negocios">Modelado de Negocios con UML 2.5 y BPMN 2.0
						</a></li>
						<li><a href="Ingenieria-Requisitos">Ingeniería de Requisitos con UML
						</a></li>
						<li><a href="Arquitecturas-Software">Diseño de Arquitecturas de Software
						</a></li>
						<li><a href="Análisis-Diseño-Software">Análisis y Diseño de Software Orientado a Objetos</a>
						</li>
						<li><a href="Diseño-Software">Diseño de Software Basado en Servicios (SOA)
						</a></li>
						<li><a href="Pruebas-Software">Pruebas de Software: Técnicas y Gestión
						</a></li>
						<li><a href="Gestion-Proyectos">Gestión de Proyectos de Software con PMBOK
						</a></li>
					</ul>
				</div>
				<div class="hidden-xs col-sm-1 col-md-1 titulo">
					{{ HTML::image('assets/images/capacitacion/gi.fw.png', 
						$alt="imagen 1", $attributes = array('class' => 'img-responsive')) }}
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 gi">
				<div class="hidden-xs iconos-cursos">
					{{ HTML::image('assets/images/capacitacion/cursos-gi.jpg', 
						$alt="imagen 1", $attributes = array('class' => 'img-responsive')) }}
				</div>
				<h2 class="visible-xs">Gestión Informática</h2>
					<ul>
						<li><a href="Arquitecturas-Empresariales">Arquitecturas Empresariales con TOGAF 9.1</a></li>
						<li><a href="Taller-Modelado-Arquitecturas">Modelado de Arquitecturas Empresaiales con ArchiMate 2.0</a></li>
						<li><a href="Fundamentos-Gestion-Procesos">Fundamentos de Gestión de Procesos de Negocio - BPM
						</a></li>
						<li><a href="Taller-Modelado-BPMN">La Notación de Modelado de Procesos de Negocio - BPMN 2.0</a></li>
						<li><a href="Modelado-Negocios">Modelado de Negocios con UML 2.5 y BPMN 2.0</a>
</li>
						<li><a href="Gestión-Riesgos">Gestión de Riesgos, Configuración y Calidad
						</a></li>
						<li><a href="Gestion-Proyectos">Gestión de Proyectos Informáticos con PMBOK
						</a></li>
					</ul>
				</div>
			</div>
		<div class="row titulo">
			<div class="col-md-12">
				<h2>&nbsp;</h2>
				<a href="capacitacion">
					<div class="atras">{{ HTML::image('assets/images/diplomados/flecha-peq.png', $alt="Atrás") }}</div>
				</a>
			</div>
		</div>
	</div>
	<script src="assets/javascripts/jquery-ui.min.js"></script>
	<script>
	$(function() {
		$( "#accordion" ).accordion();
	});
	</script>
@stop