@extends ('layouts.otras')

@section ('title') 
	Equipo
@stop

@section ('content')
	{{ HTML::image('assets/images/equipo/cabecera.jpg',
    	$alt="imagen 1", $attributes = array('width' => '100%', 'height' => 236,
    	'class' => 'img-responsive')) }}
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
				<div class="row integrante">
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/jm-picture.jpg',
    	$alt="Jonás A. Montilva C.", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">Jonás A. Montilva C. <br/>
                               <span>Presidente y Gerente de <br/>Consultoría</span></p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Profesor titular del Departamento de Computación de la Facultad
    							de Ingeniería de la Universidad de Los Andes. Ingeniero de Sistemas
    							(ULA, Venezuela) M.Sc. en Computación, Ph.D. en Ciencias de la
    							Computación (University of Leeds, Inglaterra). <br/>
    							Miembro Fundador
    							del Postgrado en Computación ytt del Consejo de Computación Académica
    							de la ULA. <br/>
    							Presidente de BIOSOFT C.A. <br/>
    							Gerente de Consultoría en Ingeniería
    							de Software y Sistema de Información de BIOSOFT <br/>
    							Sitio:
    							<a href="http://www.webdelprofesor.ula.ve/ingenieria/jonas" target="_blank">
    							Web del Profesor</a>
    						</p>
    					</div>
					</div>
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/fz-picture.jpg',
    	$alt="Francisco Zerpa P.", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">Francisco Zerpa P. <br/>
                               <span>Vicepresidente y Gerente de <br/>
                               Desarrollo</span>
							</p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Ingeniero de Sistemas (Universidad de Los Andes ULA, Venezuela),
    							MSc en Computación (ULA, Venezuela) Magister en Manejo Forestal
    							(ULA, Venezuela)Fue profesor contratado de la Facultad de Ciencias
    							Forestales de la ULA. <br/>
    							Fue Jefe de la Sección de Información Ambiental
    							de CVG EDELCA. Líder de varios proyectos de desarrollo de software.
    							Consultor Nacional de la ONU-FAO.  <br/>
    							Extensa experiencia en desarrollo de software. <br/>
    							Vicepresidente de BIOSOFT C.A. Gerente de Desarrollo de Software de BIOSOFT C.A
    						</p>
    					</div>
					</div>
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/ib-picture.jpg',
    	$alt="Isabel M. Besembel C.", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">Isabel M. Besembel C. <br/>
    						<span>Consultora</span>
							</p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
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
				</div>
				<div class="row integrante">
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/jr-picture.jpg',
    	$alt="Judith del R. Barrios A.", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">Judith del R. Barrios A.<br/>
                               <span>Consultora</span>
							</p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Profesora titular del Departamento de Computación de la Facultad de Ingeniería de la Universidad de Los Andes (ULA).Ingeniera de Sistemas (ULA, Venezuela).<br/> Magister en Sistemas de Información (Instituto Tecnológico de Monterrey, México).D.E.A. en Bases de Datos. Dra. en Informática .Fue Coordinadora del Laboratorio de Sistemas Computacionales del Dpto. de Computación de la ULA. <br/> Miembro del Grupo de Investigación en Ingeniería de Datos y Conocimiento de la ULA. <br/>Es, actualmente, Coordinadora del Postgrado en Computación de la Facultad de Ingeniería de la ULA. <br/>Sitio:
    							<a href="http://www.webdelprofesor.ula.ve/ingenieria/ijudith/" target="_blank">
    							Web del Profesor</a>
    						</p>
    					</div>
					</div>
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/dm-picture.jpg',
    	$alt="Dulce Milagro Rivero A.", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Dulce Milagro Rivero A. <br/>
                                <span>Consultora</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
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
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/wm-picture.jpg',
    	$alt="Dulce Milagro Rivero A.", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							William J. Montilva C. <br/>
								<span>Consultor</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
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
				</div>
				<div class="row integrante">
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/jp-picture.jpg',
    	$alt="Juanpablo Gómez W.", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Juanpablo Gómez W.<br/>
								<span>Gerente/Consultor de Mercadeo</span>
							</p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							M.B.A (Instituto ITEAP España)
                                Diplomado en Alta Gerencia y en Entrenamiento Ejecutivo (UDES Cúcuta-Colombia)
                                Socio-Fundador / Gerente General del Instituto Virtual de Tecnología,
                                Educación y Gerencial Global IVITEG (Mérida-Venezuela www.iviteg.com)
                                Fue el Director Ejecutivo del Instituto Politécnico Humboldt IPHUM
                                (Mérida-Venezuela)Facilitador-Conferenciasta en áreas de Gerencia. <br/>
                                Ha realizado diferentes cursos de entrenamiento ejecutivo y gerencial
                                en el  IESA (Instituto de Estudios Superiores de Administración -
                                Caracas-Venezuela) Actualmente también se desempeña como el
                                socio-fundador CEO del portal gowiico.com (aún en construcción)
    						</p>
    					</div>
					</div>
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/jn-picture.jpg',
    	$alt="Javier Nava", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Javier Nava <br/>
                                <span>Programador</span>
							</p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							T.S.U. en Informática, egresado del Instituto Universitario
    							Dr. Cristóbal Mendoza, experiencia en desarrollo web con
    							los lenguajes: PHP, Javascript, Mootools, Jquery,
    							CoffeScript, SQL, XML, CSS, SCSS, Ruby on Rails. <br/>
    							Instalación y desarrollo en los CMS: Joomla,
    							Wordpress. <br/>
    							Diseño y Animación en: Photoshop,
    							Illustrator, Maya, After Effects, Flash. <br/>
    							Base de datos:
    							MYSQL, Postgre. Actualmente trabaja en Biosoft C.A.
    						</p>
    					</div>
					</div>
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/js-picture.jpg',
    	$alt="Jesus Salcedo", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Jesus Salcedo <br/>
                                <span>Programador</span>
							</p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Ingeniero de Sistemas con mención en Control y Automatización. <br/>
    							Actualmente trabajando como programador probador 1 en Biosoft. <br/>
    							Con gran disposición, responsabilidad y siempre ganas de aprender. <br/>
    							Inspector de seguridad industrial,  Auditor de sistemas de Gestión
    							S.I.H.A.O. y Cisco Network Associate. <br/>
    							 Con conocimientos en la elaboración
    							de programas de distinta índole, como en C, C++, Java, JavaScript, HTML,
    							XHTML, PHP, Ruby on Rails, CSS, manejo de bases de datos y paginas web
    							estáticas y dinámicas. <br/>
    							Maneja programas de edición de imágenes, sonido y
    							video además de desenvolverse bien con el inglés.
    						</p>
    					</div>
					</div>
				</div>
				<div class="row integrante">
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/jo-picture.jpg',
    	$alt="Jessie Osorio", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Jessie Osorio <br/>
                                <span>Diseño Grafico/Web</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Diseñador Gráfico, Graduado en ITT Technical Institute, Duluth, GA, EEUU. <br/>
    							Especialista en multimedia que incluye video imágenes y sonido. Diseño de interfaces/páginas web,
    							diseño de logos, animaciones interactivas. <br/>
                                Imagen Gráfica <br/>
                                Imagen Corporativa: papeleria, sobres, hoja membreteada <br/>
                                Publicidad: tripticos, flyers <br/>
                                Publicidad Exterior: Pendones, pancartas, vallas <br/>
                                Programación Web (HTML y CSS)
    						</p>
    					</div>
					</div>
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/er-picture.jpg',
    	$alt="Emperatriz Ramirez", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Emperatriz Ramirez <br/>
                                <span>Programador</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Ingeniero de Sistemas (Universidad de los Andes ULA, Venezuela). <br/>
    							Especialista en Gerencia Pública. <br/>
    							Experiencia en Analisis y Desarrollo
    							de Sistemas, Programación web ( Dominio HTML, CSS, PHP, Ruby on Rails,
    							Base de Datos: MySQL, PostgreSQL). <br/>
                                                                                                    Estudiante de Postgrado de Computación en la ULA.<br />
    							Actualmente Programador de BIOSOFT.
    						</p>
    					</div>
					</div>
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/lr-picture.jpg',
    	$alt="Luigi Romano", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Luigi Romano <br/>
                                <span>Programador</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Ingeniero de Sistemas Mención Sistemas Computacionales (Universidad de los Andes). Programador. <br/>
    							Experiencia laboral  como Desarrollador en el área de Producción de
    							PDVSA Industrial" Guardián del Alba" en el  HMI SCADA-GALBA. <br/>
    							Preparador de Programación durante 3 años en el Área de Computación de la Escuela de Sistemas
    							(Universidad de los Andes). <br/>
    							Conocimientos en Java, Ruby on Rails, Desarrollo en
    							Java Para Android,  C/C++, PHP, JavaScript, Python. <br/>
    							Actualmente Desarrollador en
    							BioSoft C.A.
    						</p>
    					</div>
					</div>
				</div>
				<div class="row integrante">
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/rg-picture.jpg',
    	$alt="Ricardo Graterol", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Ricardo Graterol <br/>
                                <span>Programador</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Ingeniero de Sistemas (ULA 2014) mención Control y Automatización,
    							 desarrollador web en Ruby on Rails y PHP, con experiencia avanzada en html,
    							 css, bases de datos postgresql, sqlite, mysql. <br/>
    							 Guitarrista y gamer en tiempos
    							 libres, con afición por la buena comida y los buenos juegos.
    						</p>
    					</div>
					</div>
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/jg-picture.jpg',
    	$alt="Juan de Dios Goméz F.", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Juan de Dios Goméz F. <br/>
                                <span>Programador/Webmaster</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							T.S.U en Informática, graduado del IUFRONT, con 7 años de experiencia en el desarrollo de software y 
    							aplicaciones web, Actualmente trabaja como Programador en BIOSOFT. <br/>
                                Conocimiento avanzado en la maquetación web y Responsive Design, utiliza las herramientas y frameworks de estilos,
                                actuales en el desarrollo frontend como: Bootstrap, Sass, Less y Coffeescript. <br/>
                                Manejo de  frameworks en desarrollo como: YII, LARAVEL, CODEIGNITER (PHP), SPRING (JAVA) y Ruby on Rails. <br/>
                                Apasionado por la programación y electrónica. <br/>
                                Sitio: <a href="http://websoftmerida.com.ve/" target="_blank">Websoftmerida</a>

    						</p>
    					</div>
					</div>
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/vm-picture.jpg',
    	$alt="Viviana Mendez", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Viviana Mendez <br/>
                                <span>Analista de Sistemas</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Ingeniero de Sistemas egresada de la Universidad de los Andes. <br/>
    							Con conocimientos en Desarrollo Web con lenguaje html, stylesheet CSS, y
								además conocimientos en redes y enrutamiento formada por CISCO
								NETWORKING ACADEMY. <br/>
								Nivel de inglés intermedio. Actualmente Analista
								de sistemas en BIOSOFT.
    						</p>
    					</div>
					</div>
				</div>
				<div class="row integrante">
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/pc-picture.jpg',
    	$alt="Viviana Mendez", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							María Patricia Chourio <br/>
								<span>Contadora-Administradora</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Contadora-Administradora. <br/>
                                Especialista en Aduanas y Comercio Exterior (I.E.C.E.X). <br/>
                                Lic. Administración (ULA). <br/>
                                Lic. Contador Público (ULA). <br/>
                                TSU. Informática (IUTE). <br/>
                                Diplomado en Componente Docente (UNEFA). <br/>
    						</p>
    					</div>
					</div>
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/paola-picture.jpg',
    	$alt="Viviana Mendez", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Paola Chacon <br/>
                                <span>Asistente Administrativo</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
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
					<div class="col-md-4">
						{{ HTML::image('assets/images/equipo/rd-picture.jpg',
    	$alt="Rayde Marquez.", $attributes = array('width' => 397, 'height' => 399,
    	'class' => 'img-responsive')) }}
    					<div class="nombre">
    						<p class="text-left">
    							Rayde Marquez. <br/>
                                <span>Consultora</span>
                            </p>
    					</div>
    					<div class="descripcion">
    						<p class="text-justify">
    							Ingeniero de Sistemas (Universidad de Los Andes ULA, Venezuela),
    							Experta en Medios Digitales y Experto en Educación Virtual – Elearning
    							(FATLA, Fundación para la actualización tecnológica de
                                Latinoamérica). <br/>
                                Experiencia laboral en las siguientes empresas e instituciones:
                                LaMia - Línea Aérea Mérida Internacional de Aviación C.A.,
                                Corporación Parque Tecnológico de Mérida – Proyecto CEISoft,
                                MPPEU(Ministerio del Poder Popular para la Educación Universitaria)
                                y la OPSU, Universidad Nacional Abierta Centro Local Mérida,
                                SITEC Sistemas Integrados de Tecnología Mérida, DEL SUR EAP,
                                MERENAP EAP, INGEDIGIT, Banco Provincial, Banco Popular, Banco Andino. <br/>
                                Actualmente curso estudio de “Experta en Comercio Electrónico – Cash OnLine-“ en FATLA.
    						</p>
    					</div>
					</div>
				</div>
			</div>
    	</div>
    </div>
@stop