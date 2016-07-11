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
    	<div class="fotos2">
			<div class="container">
		
				<div class= "row integrante2">
					<div class="col-md-6">
						<p class="text-left"> Francisco Zerpa P. <br/>
                            <span>Presidente y Gerente de Desarrollo</span>
						</p>
						<div class="descripcion2">
    						<p class="text-justify">
    							Ingeniero de Sistemas (Universidad de Los Andes ULA, Venezuela),
    							MSc en Computación (ULA, Venezuela) Magister en Manejo Forestal
    							(ULA, Venezuela)Fue profesor contratado de la Facultad de Ciencias
    							Forestales de la ULA. <br/>
    							
    						</p>
    					</div>
					</div>
					<div class="col-md-6">
						{{ HTML::image('assets/images/equipo/fz-picture.jpg', $alt="Francisco Zerpa P.", $attributes = array('width' => 320, 'height' => 280,'class' => 'img-responsive')) }}
					</div>
				</div>
				<div class="row infadicional">
					<div class="col-md-12">
						<p class="text-justify">
							Fue Jefe de la Sección de Información Ambiental
	    					de CVG EDELCA. Líder de varios proyectos de desarrollo de software.
	    					Consultor Nacional de la ONU-FAO.  <br/>
	    					Extensa experiencia en desarrollo de software. <br/>
	    				</p>
					</div>
				</div>
			</div>
