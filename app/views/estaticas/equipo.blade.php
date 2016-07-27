@extends ('layouts.otras')

@section ('title') 
	Equipo
@stop

@section ('content')
	{{-- {{ HTML::image('assets/images/equipo/cabecera.jpg',
    	$alt="imagen 1", $attributes = array('width' => '100%', 'height' => 236,'class' => 'img-responsive')) }} --}}
    <div id="equipo">
    	<div class="container">
    		<div class="row experiencia">
				<div class="col-md-12 hidden-xs">
					<div class="descripcion">
						<p class="text-left">
							En BIOSOFT trabajamos especialistas en las áreas de Ingeniería
							de Software y Sistemas de Información, con formación de 4to y 5to
							nivel y una extensa experiencia académica y profesional.
							La mayoría de nuestro equipo son parte del plantel profesoral
							de una de las mejores universidades venezolanas, <span>La Universidad de Los Andes</span>
						</p>
					</div>
				</div>
			</div>
    	</div>
    	<div class="fotos">
			<div class="container">
				<div class="row">
					<div class="texto-equipo col-md-12">
						<h2 class="titulo-seccion">Nuestro <span>Equipo</span></h2>
					</div>
				</div>

				<!-- Francisco Zerpa -->
				<div class="row integrante">
					<div class="col-md-4 col-md-offset-2 col-sm-12 col-xs-12">
						<div class="avatar img-responsive" style="background-image: url(assets/images/equipo/fz-picture.jpg)"></div>
						{{-- {{ HTML::image('assets/images/equipo/fz-picture.jpg', $alt="Francisco Zerpa P.", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }} --}}
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="nombre">
                            <div class="linkedin">
                                <a href="https://ve.linkedin.com/in/jon%C3%A1s-montilva-a04b9a8a" target="_blank"> 
                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                </a>
                            </div>
    						<p class="text-left">Francisco Zerpa P. <br/>
                               <span>Presidente y Gerente de Desarrollo</span></p>
    					</div>
                        <hr>
    					<div class="descripcion">
    						<p class="text-justify text-left">
    							Ingeniero de Sistemas (Universidad de Los Andes ULA, Venezuela),
    							MSc en Computación (ULA, Venezuela) Magister en Manejo Forestal
    							(ULA, Venezuela)Fue profesor contratado de la Facultad de Ciencias
    							Forestales de la ULA. <br/>
    							Fue Jefe de la Sección de Información Ambiental
    							de CVG EDELCA. Líder de varios proyectos de desarrollo de software.
    							Consultor Nacional de la ONU-FAO.  <br/>
    							Extensa experiencia en desarrollo de software. <br/></p>
    					</div>
    				</div>
   				</div>
   				<hr><br><br><hr><br><br>
                <!-- Jonas Montilva -->
                <div class="row integrante">
                    <div class="col-md-6 col-md-push-6">
                        <div class="nombre">
                            <div class="linkedin">
                                <a href="https://ve.linkedin.com/in/jon%C3%A1s-montilva-a04b9a8a" target="_blank"> 
                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                </a>
                            </div>
                            <p class="text-left">Jonás A. Montilva C. <br/>
                               <span>Vicepresidente y Gerente de Consultoría</span></p>
                        </div>
                        <hr>
                        <div class="descripcion">
                            <p class="text-justify text-left">
                                Profesor titular del Departamento de Computación de la Facultad
                                de Ingeniería de la Universidad de Los Andes. Ingeniero de Sistemas
                                (ULA, Venezuela) M.Sc. en Computación, Ph.D. en Ciencias de la
                                Computación (University of Leeds, Inglaterra). <br/>
                                Miembro Fundador
                                del Postgrado en Computación y del Consejo de Computación Académica
                                de la ULA. <br/>
                                Sitio:
                                <a href="http://www.webdelprofesor.ula.ve/ingenieria/jonas" target="_blank">
                                Web del Profesor</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-8">
                        <div class="avatar img-responsive" style="background-image: url(assets/images/equipo/jm-picture.jpg)"></div>
                        {{--{{ HTML::image('assets/images/equipo/jm-picture.jpg', $alt="Jonás A. Montilva C.", $attributes = array('width' => 397, 'height' => 399, 'class' => 'img-responsive')) }} --}}
                    </div>
                </div>
                <hr><br><br><hr><br><br>
                <!-- Judith Barrios -->
                <div class="row integrante">
                    <div class="col-md-4 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="avatar img-responsive" style="background-image: url(assets/images/equipo/jr-picture.jpg)"></div>
                        {{--{{ HTML::image('assets/images/equipo/jr-picture.jpg', $alt="Judith del R. Barrios A.", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}--}}
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="nombre">
                            <div class="linkedin">
                                <a href="" target="_blank"> 
                                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                 </a>
                            </div>
                            <p class="text-left">Judith del R. Barrios A <br/>
                               <span>Consultora</span></p>
                        </div>
                        <hr>
                        <div class="descripcion">
                            <p class="text-justify text-left">
                                Profesora titular del Departamento de Computación de la Facultad de Ingeniería de la Universidad de Los Andes (ULA).Ingeniera de Sistemas (ULA, Venezuela).<br/> Magister en Sistemas de Información (Instituto Tecnológico de Monterrey, México).D.E.A. en Bases de Datos. Dra. en Informática .Fue Coordinadora del Laboratorio de Sistemas Computacionales del Dpto. de Computación de la ULA. <br/> Miembro del Grupo de Investigación en Ingeniería de Datos y Conocimiento de la ULA. <br/>Es, actualmente, Coordinadora del Postgrado en Computación de la Facultad de Ingeniería de la ULA. <br/>Sitio:
                                <a href="http://www.webdelprofesor.ula.ve/ingenieria/ijudith/" target="_blank">
                                Web del Profesor</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
                <hr><br><br><hr><br><br>

   				