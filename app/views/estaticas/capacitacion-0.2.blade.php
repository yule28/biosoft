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
					<a href="#anc-ofrecemos" class="link-bloq-cap">
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
					<a href="#anc-mooc" class="link-bloq-cap">
						<div class="col-md-11 col-md-offset-1 bloq-cap">
							{{ HTML::image('assets/images/capacitacion/logo-epraxis-azul.jpg',
							'',  $attributes = array('class' => 'img-responsive')) }}
							<div class="bloq-cap-tit">Cursos en Línea Masivos y Abiertos (MOOC)</div>
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
					<a href="#anc-cursos" class="link-bloq-cap">
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
	<div id="anc-ofrecemos"></div>
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
<!-- 					<h2><br>{{ HTML::link('Analisis-Negocios', 'Diplomado en Análisis de Negocios, Procesos y Requisitos')}}</h2>
<h3>{{"Fecha de Inicio: 11 de enero de 2016"}}</h3>
<iframe width="854" height="480" src="https://www.youtube.com/embed/G8mdx7mP3dI" frameborder="0" allowfullscreen></iframe>
<br><a href="assets/images/diplomados/DIPLOMADO-ANALISIS-DE-NEGOCIOS.pdf" target="_blank">{{ HTML::image('assets/images/diplomados/pdf.jpg', $alt="pdf") }} Ver folleto de descripción del diplomado.</a>
<div style="float: right;"><h3>{{ HTML::link('http://www.va-isid.org/course/index.php?categoryid=33', 'Inscripciones y mayor información')}}</h3></div> -->
				</div>
			</div>
			<div class="row">
			  	<div class="col-sm-5 col-md-3">
					<div class="thumbnail">
					
					<iframe width="252" height="168" src="https://www.youtube.com/embed/G8mdx7mP3dI" frameborder="0" allowfullscreen style="float:left;"></iframe>
					<a href="https://www.youtube.com/embed/G8mdx7mP3dI" target="_blank">
					<div style="float: left; background-color: rgba(255,255,255,0.1); width:252px; height:168px; margin: -168px 0px 10px 0px; display: inline-block;"></div>
					</a>
					<div class="caption">
						<h4>Diplomado en Análisis de Negocios, Procesos y Requisitos</h4>
						<h4><span>Inscripciones abiertas.<br>Inicio: 11 de enero de 2016</span></h4>
						<p class="text-justify">Capacítate en las disciplinas de mayor demanda laboral, para que
						puedas ejercer los cargos o roles de Analista de Negocios, Analista de Procesos o Ingeniero de Requisitos. Aprendiendo los lenguajes de modelado, modelos de referencia, técnicas, métodos, mejores prácticas y las herramientas de mayor uso y reconocimiento mundial.</p>
						<p class="text-right">
							{{ HTML::link('Analisis-Negocios', 'más', array('class' => 'btn btn-primary btn-sm','role'=>'button')); }}
						</p>
					  </div><!-- end caption -->
					</div><!-- end thumbnail -->
				</div><!-- end col-sm-6 col-md-4 -->
				<div class="col-sm-5 col-md-3">
				</div><!-- end col-sm-6 col-md-4 -->
				<div class="col-sm-5 col-md-3">
				</div><!-- end col-sm-6 col-md-4 -->
				<div class="col-sm-5 col-md-3">
				</div><!-- end col-sm-6 col-md-4 -->
			</div>
		</div>
	</div>
	<div id="anc-mooc"></div>
	<div id="mooc">
		<div class="container">
			<div class="row titulo">
				<div class="col-sm-8 col-md-8">
					<h2>Cursos en Línea Masivos y Abiertos (MOOC)</h2>
					<p>Como aporte al desarrollo de la Ingeniería de Software en Venezuela, y demás países de habla hispana, BIOSOFT ofrece un programa de cursos masivos abiertos y en línea (MOOC - acrónimo en inglés de Massive Open Online Course), completamente gratuitos. Estos cursos están dirigidos, principalmente, a estudiantes y profesionales que deseen mejorar sus conocimientos en diversas áreas de la Ingeniería del Software.</p>
					<p class="text-right">
						{{ HTML::link('Analisis-Negocios', 'más', array('class' => 'btn btn-primary btn-sm','role'=>'button')); }}
					</p>
				</div>
				<div class="hidden-xs col-sm-4 col-md-4">
					<div class="row">
					<a href="http://e-praxis.com.ve/" class="link-bloq-cap">
						<div class="col-md-11 col-md-offset-1">
							{{ HTML::image('assets/images/capacitacion/logo-epraxis-azul.jpg',
							'',  $attributes = array('class' => 'img-responsive', 'style' => 'margin-top:10%;')) }}
						</div>
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="anc-cursos"></div>
	<div id="cursos">
		<div class="container">
			<div class="row titulo">
				<div class="col-sm-12 col-md-12">
					<h2>Cursos y Talleres In Company</h2>
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