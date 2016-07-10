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
					<div class="col-md-6">
						<div class="nombre">
    						<p class="text-left">Jonás A. Montilva C. <br/>
                               <span>Presidente y Gerente de Consultoría</span></p>
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
					<div class="col-md-6">
						{{ HTML::image('assets/images/equipo/jm-picture.jpg',$alt="Jonás A. Montilva C.", $attributes = array('width' => 397, 'height' => 399,'class' => 'img-responsive')) }}
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
