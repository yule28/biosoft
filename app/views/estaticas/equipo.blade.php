@extends ('layouts.otras')

@section ('title') 
	Equipo
@stop

@section ('content')
	{{ HTML::image('assets/images/equipo/cabecera.jpg',
    	$alt="imagen 1", $attributes = array('width' => '100%', 'height' => 236,'class' => 'img-responsive')) }}
    <div id="equipo">
    	<div class="container">
    		<div class="row experiencia">
				<div class="col-md-12">
					<div class="descripcion">
						<p class="text-left">
							En BIOSOFT trabajamos especialistas en las áreas de Ingeniería
							de Software y Sistemas de Información, con formación de 4to y 5to
							nivel y una extensa experiencia académica y profesional.
							La mayoría de nuestro equipo son parte del plantel profesoral
							de una de las mejores universidades venezolanas <span>La Universidad de Los Andes</span>
						</p>
					</div>
				</div>
			</div>
    	</div>
    	<div class="fotos">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Nuestro <span>Equipo</span></h2>
					</div>
				</div>

				<!-- Francisco Zerpa -->
				<div class="row integrante">
					<div class="col-md-6 col-sm-12">
						<div class="nombre">
    						<p class="text-left">Francisco Zerpa P. <br/>
                               <span>Presidente y Gerente de Desarrollo</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Ingeniero de Sistemas (Universidad de Los Andes ULA, Venezuela),
    							MSc en Computación (ULA, Venezuela) Magister en Manejo Forestal
    							(ULA, Venezuela)Fue profesor contratado de la Facultad de Ciencias
    							Forestales de la ULA. <br/>
    							Fue Jefe de la Sección de Información Ambiental
    							de CVG EDELCA. Líder de varios proyectos de desarrollo de software.
    							Consultor Nacional de la ONU-FAO.  <br/>
    							Extensa experiencia en desarrollo de software. <br/>
    					</div>
    				</div>
					<div class="col-md-6 col-sm-12 imagen">
						{{ HTML::image('assets/images/equipo/fz2-picture.jpg', $alt="Francisco Zerpa P.", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
					</div>
   				</div>
   				<!-- Jonas Montilva -->
   				<div class="row integrante">
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">Jonás A. Montilva C. <br/>
                               <span>Vicepresidente y Gerente de Consultoría</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Profesor titular del Departamento de Computación de la Facultad
    							de Ingeniería de la Universidad de Los Andes. Ingeniero de Sistemas
    							(ULA, Venezuela) M.Sc. en Computación, Ph.D. en Ciencias de la
    							Computación (University of Leeds, Inglaterra). <br/>
    							Miembro Fundador
    							del Postgrado en Computación ytt del Consejo de Computación Académica
    							de la ULA. <br/>
    							Sitio:
    							<a href="http://www.webdelprofesor.ula.ve/ingenieria/jonas" target="_blank">
    							Web del Profesor</a>
    						</p>
    					</div>
    				</div>
					<div class="col-md-6 imagen">
						{{ HTML::image('assets/images/equipo/jm2-picture.jpg', $alt="Jonás A. Montilva C.", $attributes = array('width' => 397, 'height' => 399, 'class' => 'img-responsive')) }}
					</div>
				</div>
				<!-- Judith Barrios -->
				<div class="row integrante">
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">Judith del R. Barrios A <br/>
                               <span>Consultora</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Profesora titular del Departamento de Computación de la Facultad de Ingeniería de la Universidad de Los Andes (ULA).Ingeniera de Sistemas (ULA, Venezuela).<br/> Magister en Sistemas de Información (Instituto Tecnológico de Monterrey, México).D.E.A. en Bases de Datos. Dra. en Informática .Fue Coordinadora del Laboratorio de Sistemas Computacionales del Dpto. de Computación de la ULA. <br/> Miembro del Grupo de Investigación en Ingeniería de Datos y Conocimiento de la ULA. <br/>Es, actualmente, Coordinadora del Postgrado en Computación de la Facultad de Ingeniería de la ULA. <br/>Sitio:
    							<a href="http://www.webdelprofesor.ula.ve/ingenieria/ijudith/" target="_blank">
    							Web del Profesor</a>
    						</p>
    					</div>
    				</div>
					<div class="col-md-6 imagen">
						{{ HTML::image('assets/images/equipo/jr-picture.jpg', $alt="Judith del R. Barrios A.", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
					</div>
				</div>
				<!-- Dulce Rivero -->
				<div class="row integrante">
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">Dulce Milagro Rivero A. <br/>
                               <span>Consultora</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Profesora titular del Departamento de Computación de la
    							Facultad de Ingeniería de la Universidad de Los Andes Ingeniera de
    							Sistemas (ULA, Venezuela) MSc en Computación (ULA, Venezuela)D.E.A. en
    							Automatización (Universidad Carlos III de Madrid, España)Doctorado en
    							Informática (Universidad Carlos III de Madrid, España). <br/>
    							Miembro del
    							Grupo de Investigación de Ingeniería de Datos y Conocimientos
    							(GIDYC)Profesora del Postgrado en Computación de la ULA. <br/>
    							 Directora de
    							la Escuela de Ingeniería de Sistemas de la Facultad de Ingeniería de la ULA.
    						</p>
    					</div>
    				</div>
					<div class="col-md-6 imagen">
					{{ HTML::image('assets/images/equipo/dm-picture.jpg',$alt="Dulce Milagro Rivero A.", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
					</div>
				</div>
				<!-- Isabel Besembel -->
				<div class="row integrante">
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">Isabel M. Besembel C. <br/>
                               <span>Consultora</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Profesora titular del Departamento de Computación de la Facultad
    							de Ingeniería de la Universidad de Los Andes. Ingeniera de Sistemas
    							(ULA, Venezuela),D.E.A. en Sistemas Informáticos Ph.D. en Estudios
    							de Computación. <br/>
    							Profesora del Postgrado en Computación de la ULA en
    							las asignaturas de Bases de Datos Avanzadas, Análisis y Diseño de
    							Algoritmos, Sistemas Multimedia y Seminario de Nuevas Tecnologías. <br/>
    							Coordinadora del Grupo de Investigación en Ingeniería de Datos y
    							Conocimientos (GIDyC) del Departamento de Computación de la ULA. <br/>
    							Secretaria de la Junta Directiva de BIOSOFT C.A. <br/>
    							 Sitio:
    							<a href="http://www.webdelprofesor.ula.ve/ingenieria/ibc/" target="_blank">Web del Profesor</a>
    						</p>
    					</div>
    				</div>
					<div class="col-md-6 imagen">
					{{ HTML::image('assets/images/equipo/ib-picture.jpg',$alt="Isabel M. Besembel C.", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
					</div>
				</div>
				<!-- William Montilva -->
				<div class="row integrante">
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">William J. Montilva C. <br/>
                               <span>Consultor</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Ingeniero de Sistemas (ULA, Venezuela)Personal Profesional
    							Jubilado de la Dirección de Servicios de Información
    							Administrativa (antiguo Centro de Computación) de la
    							Universidad de Los Andes, Venezuela. <br/>
    							Líder de proyectos
    							de desarrollo de software.  <br/>
    							Especialista en el Desarrollo
    							de Software.  <br/>
    							Consultor Senior de BIOSOFT. Administrador
    							del sitio instruccional de e-Praxis (BIOSOFT).
    						</p>
    					</div>
    				</div>
					<div class="col-md-6 imagen">
					{{ HTML::image('assets/images/equipo/wm-picture.jpg',$alt="William J. Montilva C", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
					</div>
				</div>
				<!-- Marina Emperatriz -->
				<div class="row integrante">
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">Emperatriz Ramirez  <br/>
                               <span>Programador</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Ingeniero de Sistemas (Universidad de los Andes ULA, Venezuela). <br/>
    							Especialista en Gerencia Pública. <br/>
    							Experiencia en Analisis y Desarrollo
    							de Sistemas, Programación web (Dominio HTML, CSS, PHP, Ruby on Rails,
    							Base de Datos: MySQL, PostgreSQL). <br/>
    						</p>
    					</div>
    				</div>
					<div class="col-md-6 imagen">
					{{ HTML::image('assets/images/equipo/er-picture.jpg',$alt="Emperatriz Ramirez", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
					</div>
				</div>
				<!-- Yuleima Uzcategui -->
				<div class="row integrante">
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">Yuleima Uzcátegui T.  <br/>
                               <span>Analista de Sistemas</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Ingeniero de Sistemas. <br/>
    							Especialista en Análisis de Negocio y Requisitos <br/>
    							Programación web (Dominio HTML, CSS, PHP, Laravel,
    							Base de Datos: MySQL, PostgreSQL). <br/>
    						</p>
    					</div>
    				</div>
					<div class="col-md-6 imagen">
					{{ HTML::image('assets/images/equipo/yu2-picture.jpg',$alt="Yuleima Uzcátegui T", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
					</div>
				</div>
				<!-- Jhean Guerrero-->
				<div class="row integrante">
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">Jhean Carlos Guerrero.  <br/>
                               <span>Programador</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Ingeniero de Sistemas. <br/>
    							Especialista en Análisis de Negocio y Requisitos <br/>
    							Programación web (Dominio HTML, CSS, PHP, Laravel,
    							Base de Datos: MySQL, PostgreSQL). <br/>
    						</p>
    					</div>
    				</div>
					<div class="col-md-6 imagen">
					{{ HTML::image('assets/images/equipo/yu-picture.jpg',$alt="Jhean Carlos Guerrero", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
					</div>
				</div>
				<!-- Patricia Chouriuo -->
				<div class="row integrante">
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">Patricia Chourio <br/>
                               <span>Contadora-Administradora</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Contadora-Administradora. <br/>
                                Especialista en Aduanas y Comercio Exterior (I.E.C.E.X). <br/>
                                Lic. Administración (ULA). <br/>
                                Lic. Contador Público (ULA). <br/>
                                TSU. Informática (IUTE). <br/>
                                Diplomado en Componente Docente (UNEFA). <br/>
    						</p>
    					</div>
    				</div>
					<div class="col-md-6 imagen">
						{{ HTML::image('assets/images/equipo/pc-picture.jpg',$alt="María Patricia Chourio", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
					</div>
				</div>
				<!-- Paola Chacon -->
				<div class="row integrante">
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">Paola Chacon <br/>
                               <span>Asistente Administrativo</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							TSU en administración de empresas mención Gerencias
    							egresada de Instituto Universitario "Dr.Cristobal Mendoza". <br/>
    							Diplomado en Derecho Internacional y aduanas en la
    							Universidad de los Andes. <br/>
    							Cursando actualmente Master
    							en Ciencias Gerenciales en el Centro Internacional de
    							Educación Continua.
    						</p>
    					</div>
    				</div>
					<div class="col-md-6 imagen">
					{{ HTML::image('assets/images/equipo/paola2-picture.jpg',$alt="Paola chacon", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
					</div>
				</div>
   			</div>
  		</div>
  	</div>