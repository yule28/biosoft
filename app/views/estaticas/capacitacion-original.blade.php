@extends ('layouts.otras')

@section ('title') 
	Capacitación
@stop

@section ('content')
	{{ HTML::image('assets/images/capacitacion/cabecera.jpg', 
	$alt="imagen 1", $attributes = array('width' => '100%', 'height' => 241,
	'class' => 'img-responsive')) }}
	<div id="epraxis">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					{{ HTML::image('assets/images/capacitacion/logo-epraxis.png', 
					$alt="imagen 1", $attributes = array('width' => 371, 'height' => 90, 
					'class' => 'img-responsive')) }}
					<p class="text-justify">
						En BioSoft hemos capacitado a más de <span class="mayus">500 profesionales</span> de diferentes empresas públicas y privadas en Venezuela. Actualmente prestamos este servicio a través de nuestro novedoso portal educativo www.e-praxis.org, así como también de manera presencial bajo el programa <span class="color">InCompany</span> o <span class="color">Semipresencial</span> para empresas 
					</p>
					<p class="text-right">
					    {{ HTML::link('contacto', 'Solicitar mas información', array('class' => 'btn btn-success btn-sm','role'=>'button')); }}
					</p>
				</div>
				<div class="col-md-6">
					{{ HTML::image('assets/images/capacitacion/laptop.png', 
					$alt="imagen 1", $attributes = array('width' => 713, 'height' => 482, 
					'class' => 'img-responsive')) }}
				</div>
			</div>
		</div>
	</div>
	<div id="ofrecemos">
		<div class="container">
			<div class="row titulo">
				<div class="col-md-12">
					<h2>Que Ofrecemos</h2>
				</div>
			</div>
			<div class="row descripcion">
				<div class="col-md-offset-1 col-md-11">
					<p>El portal instruccional E-Praxis ofrece a sus usuarios registrados un conjunto de servicios de capacitación profesional en dos de las disciplinas básicas de la Computación: Ingeniería del Software y Sistemas de Información.</p>
					<p>Cada área de capacitación consta de un conjunto de programas y módulos instruccionales que permiten el desarrollo de competencias en función de los roles asociados a estas dos disciplinas</p>
				</div>
			</div>
			<div class="row lista">
				<div class="col-md-offset-2 col-md-10">
					<div class="row">
						<div class="col-md-2">
							{{ HTML::image('assets/images/capacitacion/ingenieria.png', 
							$alt="imagen 1", $attributes = array('width' => 120, 'height' => 96, 
							'class' => 'img-responsive')) }}
						</div>
						<div class="col-md-10">
							<h2>Ingeniería del Software</h2>
							<p>Líderes de proyectos, analistas, diseñadores, programadores, especialistas en pruebas, expertos en mantenimiento, gestores de configuración y gestores de calidad</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							{{ HTML::image('assets/images/capacitacion/sistema.png', 
							$alt="imagen 1", $attributes = array('width' => 120, 'height' => 96, 
							'class' => 'img-responsive')) }}
						</div>
						<div class="col-md-10">
							<h2>Sistemas de Información</h2>
							<p>Gerente de Informática, gestores de proyectos, arquitectos empresariales, analistas de procesos de negocio e ingenieros de métodos</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="areas">
		<div class="container">
			<div class="row titulo">
				<div class="col-md-12">
					<h2>Areas de <span>Capacitación</span></h2>
				</div>
			</div>
			<div class="row cuadro">
				<div class="col-md-offset-1 col-md-11" id="accordion">
					<h3>
						<div class="row">
							{{ HTML::image('assets/images/capacitacion/area-titulo.png',
							$alt="imagen 1", $attributes = array('width' => 272, 'height' => 67,
							'class' => 'img-responsive titulo')) }}
							<div class="col-md-2 imagenes">
								{{ HTML::image('assets/images/capacitacion/lenguaje.png',
								$alt="imagen 1", $attributes = array('width' => 91, 'height' => 106,
								'class' => 'img-responsive')) }}
							</div>
							<div class="col-md-10 descripcion">
								<h2>Lenguajes y Métodos de Ingeniera de Software </h2>
								<p class="text-justify">Capacitación en el uso de dos de los lenguajes de modelado de software más utilizados actualmente: UML y BPMN,  la aplicación de modelos y métodos ágiles de desarrollo y mantenimiento de software. </p>
							</div>
						</div>
					</h3>
					<div class="lista">
						<ul>
							<li>Ingeniero de Métodos</li>
						</ul>
					</div>
					<h3>
						<div class="row">
						<div class="col-md-2 imagenes">
							{{ HTML::image('assets/images/capacitacion/desarrollo.png',
							$alt="imagen 1", $attributes = array('width' => 91, 'height' => 106,
							'class' => 'img-responsive')) }}
						</div>
						<div class="col-md-10 descripcion">
							<h2>Desarrollo de Software </h2>
							<p class="text-justify">Esta área está dirigida a la capacitación de especialistas en desarrollo de software en cada uno de los procesos fundamentales del desarrollo de software.</p>
						</div>
					</div>
					</h3>
					<div class="lista">
						<ul>
							<li>Analista de Negocios</li>
                            <li>Analista de Requisitos</li>
                            <li>Arquitecto de Software</li>
                            <li>Diseñador/Programador</li>
                            <li>Experto en  Pruebas de Software</li>

						</ul>
					</div>
					<h3>
						<div class="row">
						<div class="col-md-2 imagenes">
							{{ HTML::image('assets/images/capacitacion/mantenimiento.png',
							$alt="imagen 1", $attributes = array('width' => 91, 'height' => 106,
							'class' => 'img-responsive')) }}
						</div>
						<div class="col-md-10 descripcion">
							<h2>Mantenimiento de Software</h2>
							<p class="text-justify">Contempla un conjunto de procesos, métodos, técnicas y prácticas dirigidas a la capacitación de especialistas en mantenimiento de software.</p>
						</div>
					</div>
					</h3>
					<div class="lista">
						<ul>
							<li>Ingeniero de Mantenimiento de SW</li>
						</ul>
					</div>
					<h3>
						<div class="row">
						<div class="col-md-2 imagenes">
							{{ HTML::image('assets/images/capacitacion/proyectos.png',
							$alt="imagen 1", $attributes = array('width' => 91, 'height' => 106,
							'class' => 'img-responsive')) }}
						</div>
						<div class="col-md-10 descripcion">
							<h2>Gestión de Proyectos</h2>
							<p class="text-justify">Cubre los procesos de Gestión de Proyectos de Software, Gestión de la Calidad del Software y Gestión de la Configuración. </p>
						</div>
					</div>
					</h3>
					<div class="lista">
						<ul>
							<li>Líder de Proyecto Informático</li>
							<li>Gestión de Calidad</li>
							<li>Gestión de Configuración</li>
							<li>Ingeniero de Métodos de Software</li>
						</ul>
					</div>
					<h3>
						<div class="row">
						<div class="col-md-2 imagenes">
							{{ HTML::image('assets/images/capacitacion/informatica.png',
							$alt="imagen 1", $attributes = array('width' => 91, 'height' => 106,
							'class' => 'img-responsive')) }}
						</div>
						<div class="col-md-10 descripcion">
							<h2>Gestión Informática</h2>
							<p class="text-justify">Área orientada a la capacitación de gerentes informáticos, arquitectos empresariales e ingenieros de métodos.</p>
						</div>
					</div>
					</h3>
					<div class="lista">
						<ul>
							<li>Especialista en SOA</li>
							<li>Arquitectura Empresarial</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="cursos">
		<div class="container">
			<div class="row titulo">
				<div class="col-md-12">
					<h2>Cursos</h2>
				</div>
			</div>
			<div class="row cuadro">
				{{ HTML::image('assets/images/capacitacion/curso-titulo.png', 
						$alt="imagen 1", $attributes = array('width' => 272, 'height' => 67, 
						'class' => 'img-responsive titulo')) }}
				<div class="col-md-12 lista">
					<div class="row">
                        <div class="col-md-11 titulo">
                           <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Lenguaje UML 2.4</p>
                        </div>
                           <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>BPMN y BPEL</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Modelado de Procesos y Métodos con UML y BPMN</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Métodos de Desarrollo</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Métodos de Mantenimiento</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Análisis y Resolución de Problemas</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Modelado de Negocios</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Desarrollo de Requisitos</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Gestión de Requisitos</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Diseño Arquitectónico</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Diseño de Interfaces</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Diseño de Datos</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Diseño de Software Orientado a Objetos</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Diseño de Servicios Web</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Técnicas de Programación</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Pruebas Unitarias</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Pruebas de Integración</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Pruebas del Sistema</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Gestión de Pruebas</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Verificación & Validación de Software</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Análisis de Cambios</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Implementación de Cambios</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Pruebas de Cambios</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Técnicas de Mantenimiento de Software</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Introducción a la Gestión de Proyectos</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Planificación y Control de Proyectos</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Dirección de Proyectos</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Gestión de Riesgos</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Gestión de la Calidad del SW</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Gestión de la Configuración del SW</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Gestión Informática</p></p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>Arquitectura Empresarial con TOGAF</p>
                        </div>   <div class="col-md-1 imagen hidden-xs">
                           {{ HTML::image('assets/images/capacitacion/curso.png',
                           $alt="imagen 1", $attributes = array('width' => 54, 'height' => 54,
                           'class' => 'img-responsive')) }}
                        </div>
                        <div class="col-md-11 titulo">
                           <p>SOA y BPM</p>
                        </div>

					</div>
				</div>
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