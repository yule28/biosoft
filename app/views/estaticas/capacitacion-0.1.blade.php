@extends ('layouts.otras')

@section ('title') 
	Capacitación
@stop

@section ('content')
	{{ HTML::image('assets/images/capacitacion/cabecera.jpg',
	$alt="imagen 1", $attributes = array('width' => 1600, 'height' => 241,
	'class' => 'img-responsive')) }}
	<div id="epraxis">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="row">
					<a href="#ofrecemos" class="link-bloq-cap">
						<div class="col-md-11 col-md-offset-1 bloq-cap">
							{{ HTML::image('assets/images/capacitacion/logo-vaisid.png',
							'',  $attributes = array('class' => 'img-responsive')) }}
							<div class="bloq-cap-tit">Diplomados y Cursos Certificados<br><br></div>
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
					<a href="http://e-praxis.com.ve/" class="link-bloq-cap">
						<div class="col-md-11 col-md-offset-1 bloq-cap">
							{{ HTML::image('assets/images/capacitacion/logo-epraxis-azul.jpg',
							'',  $attributes = array('class' => 'img-responsive')) }}
							<div class="bloq-cap-tit">Cursos en Línea Másivos y Abiertos (MOOC)</div>
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
					<a href="#cursos" class="link-bloq-cap">
						<div class="col-md-11 col-md-offset-1 bloq-cap">
							{{ HTML::image('assets/images/capacitacion/logo-incompany.jpg',
							'',  $attributes = array('class' => 'img-responsive')) }}
							<div class="bloq-cap-tit">Cursos y Talleres In Company<br><br></div>
						</div>
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="ofrecemos">
		<div class="container" id="vaisid">
			<div class="row titulo">
				<div class="col-md-12">
					<h2>Diplomados y Cursos Certificados</h2>
				</div>
			</div>
			<div class="row descripcion">
				<div class="col-md-offset-1 col-md-11">
					<p>Biosoft ofrece en alianza estratégica con el Instituto de Investigación y Desarrollo “Virtual Academic ISID (VA ISID)”,  una serie de diplomados y cursos certificados dirigidos especialmente a capacitar profesionales de las áreas de Ingeniería de Software y Gerencia Informática.</p>
					<p>Nuestros diplomados están basados en  tres estrategias novedosas y complementarias, ellas son:</p>
					<p><ul style="list-style-type: decimal;">
					<li>	<strong>La capacitación profesional basada en roles. </strong>
						Estos diplomados se orientan a la capacitación de profesionales que ejercen o desean ejercer aquellos roles o cargos que las gerencias de informática y las empresas que desarrollan software demandan con mayor frecuencia. </li>
					<li>	<strong>El desarrollo de competencias.</strong>
						El diseño de nuestros diplomados, y de cada uno de sus cursos en línea, está basado en el análisis de las competencias (conocimientos, habilidades y destrezas), que los profesionales de la Computación e Informática requieren dominar, para tener éxito en el ejercicio de los roles o cargos asociados a dichos diplomados. </li>
					<li>	<strong>Capacitación interactiva a distancia. </strong>
						Los cursos que integran cada diplomado están diseñados según los principios y mejores prácticas de la Educación a Distancia y el Aprendizaje Virtual (e-Learning). </li>
					</ul>
					<p>El diplomado, hasta ahora ofrecido, es el siguiente:</p>
					<!-- <h2><br>{{ HTML::link('http://www.va-isid.org/course/index.php?categoryid=33', 'Diplomado en Análisis de Negocios, Procesos y Requisitos')}}</h2> -->
					<h2><br>{{ HTML::link('Analisis-Negocios', 'Diplomado en Análisis de Negocios, Procesos y Requisitos')}}</h2>
					<h3>{{"Fecha de Inicio: 11 de enero de 2016"}}</h3>
					<iframe width="854" height="480" src="https://www.youtube.com/embed/G8mdx7mP3dI" frameborder="0" allowfullscreen></iframe>
					<br><a href="assets/images/diplomados/DIPLOMADO-ANALISIS-DE-NEGOCIOS.pdf" target="_blank">{{ HTML::image('assets/images/diplomados/pdf.jpg', $alt="pdf") }} Ver folleto de descripción del diplomado.</a>
					<div style="float: right;"><h3>{{ HTML::link('http://www.va-isid.org/course/index.php?categoryid=33', 'Inscripciones y mayor información')}}</h3></div>
				</div>
			</div>
		</div>
	</div>
	<div id="cursos">
		<div class="container">
			<div class="row titulo">
				<div class="col-md-12">
					<h2>&nbsp;</h2>
				</div>
			</div>
			<div class="row cuadro">
				{{ HTML::image('assets/images/capacitacion/curso-titulo.png', 
						$alt="imagen 1", $attributes = array('width' => 272, 'height' => 67, 
						'class' => 'img-responsive titulo')) }}
				<div class="col-md-12 lista">
					<div class="row">
                        <div class="col-md-11 titulo">
		<div class="row">
			<a href="UML"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Lenguajes de Modelado de Software: UML 2.5</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Metodos-Agiles"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Desarrollo de Software: Métodos Ágiles y Balanceados</p>
			</div></a>
		</div>
		<div class="row">
			<a href="Modelado-Negocios"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Modelado de Negocios usando UML y BPMN</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Ingenieria-Requisitos"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Ingeniería de Requisitos usando UML</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Arquitecturas-Software"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Arquitecturas de Software y Patrones de Diseño</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Análisis-Diseño-Software"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Análisis y Diseño de Software Orientado a Objetos</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Diseño-Software"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Diseño de Software Basado en Servicios</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Pruebas-Software"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Pruebas de Software: Técnicas y Gestión</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Gestion-Proyectos"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Gestión de Proyectos de Software bajo el PMBOK</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Gestión-Riesgos"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Gestión de Riesgos, Configuración y Calidad</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Arquitecturas-Empresariales"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Arquitecturas Empresariales con TOGAF 9.1</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Taller-Modelado-Arquitecturas"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Taller de Modelado de Arquitecturas Empresariales usando ArchiMate 2.0</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Fundamentos-Gestion-Procesos"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Fundamentos de la Gestión de Procesos de Negocio BPM</h3>
			</div></a>
		</div>
		<div class="row">
			<a href="Taller-Modelado-BPMN"><div class="col-md-2 imagen hidden-xs">
				{{ HTML::image('assets/images/capacitacion/cursos.png',
				$alt="imagen 1", $attributes = array('style' => 'width:55px; height:55px;margin-bottom:20px;',
				'class' => 'img-responsive')) }}
			</div>
			<div class="col-md-10 titulo">
				<h3 style="color: inherit;">Taller de Modelado con la Notación BPMN 2.0</h3>
			</div></a>
		</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row titulo">
			<div class="col-md-12">
				<h2>&nbsp;</h2>
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