@extends ('layouts.otras')

@section ('title') 
	Sobre Biosoft
@stop

@section ('content')
	{{ HTML::image('assets/images/empresa/empresa-banner.jpg', $alt="imagen 1", $attributes = array('width' => "100%", 'height' => "241px", 'class' => 'img-responsive hidden-xs')) }}

	<div class="container sobre">
	<div class="text-center sub-menu">
        <div class="row">
            <a href="" style="color:#FFF;"><div class="col-md-4 "><h4 class="boton">Sobre Biosoft</h4></div></a>
            <a href="" style="color:#FFF;"><div class="col-md-4 "><h4 class="boton">Equipo</h4></div></a>
            <a href="" style="color:#FFF;"><div class="col-md-4 "><h4 class="boton">Metodología</h4></div></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"><h2 class="titulo-seccion">Sobre Biosoft</h2></div>
        <br>
        <p class="eslogan"><span class="naranja">"En BioSoft somos Talento Venezolano que da vida a sus proyectos."</span>
        </p>
        <p>BioSoft es Gestión Informática e Ingeniería de Software a su medida. Prestamos servicios de Desarrollo, Capacitación y Consultoría generándole valor a su compañía. Nuestro equipo multidisciplinario, con una enorme experiencia, le brinda soluciones rápidas, efectivas, eficaces y según sus necesidades.</p>
    </div>
		{{ HTML::image('assets/images/empresa/empresa-sobre.jpg', $alt="imagen 1", $attributes = array('width' => "100%", 'height' => "241px", 'class' => 'img-responsive hidden-xs')) }}
	</div>
	<div class="capacidad">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center naranja">Lo que sabemos</h2>
                    <ul class="check-list">
                        <li>Ruby On Rails</li>
                        <li>PHP y Laravel</li>
                        <li>HTML5, CSS y JavaScript</li>
                        <li>Bootstrap</li>
                        <li>Wordpress y Drupal</li>
                        <li>Modlee</li>
                        <li>Bases de datos & Integración BD</li>
                        <li>Métodos balanceados y agiles de desarrollo</li>
                        <li>Mejores prácticas y herramientas de desarrollo de software</li>
                        <li>Métodos de enseñanza-aprendizaje </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center verde">Hacemos</h2>
                </div>
            </div>
        </div>
    </div>	
	<div class="por-que">
		<div class="container">
		<div class="titulo text-center">Por que nosotros</div>
			<div class="row">
                <div class="hidden-xs col-sm-2 col-md-1">
                    {{ HTML::image('assets/images/inicio/consultoria.png', $alt='9 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
                </div>
				<div class="col-xs-offset-1 col-xs-9 col-sm-offset-0 col-sm-8 col-md-3">
					<h4>CONSULTORÍA </h4>
					<ul class="check-list">
					    <li>Alineamos las TIC al negocio</li>
					    <li>Tenemos alta experiencia profesional y estudios de 4to y 5to nivel</li>
					    <li>Asesoramos a grandes empresas nacionales e internacionales</li>
					    <li>Nos enfocamos en tecnologías de punta: BPM, SOA, Arquitecturas empresariales</li>
					</ul>
				</div>

				<div class="hidden-xs col-sm-2 col-md-1">
                    {{ HTML::image('assets/images/inicio/capacitacion.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
                </div>
				<div class="col-xs-offset-1 col-xs-9 col-sm-offset-0 col-sm-8 col-md-3">
					<h4>CAPACITACIÓN</h4>
					<ul class="check-list">
					    <li>Contamos con profesores de 4to y 5to nivel académico</li>
					    <li>Tenemos experiencia de 20 años en formación de profesionales en Ingeniería de Software</li>
					    <li>Orientamos la capacitación a la práctica profesional</li>
					    <li>Capacitamos para que seas competitivo en tecnologías de información</li>
					</ul>
				</div>
                <div class="hidden-xs col-sm-2 col-md-1">
                    {{ HTML::image('assets/images/inicio/desarrollo.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
                </div>
				<div class="col-xs-offset-1 col-xs-9 col-sm-offset-0 col-sm-8 col-md-3">
					<h4>DESARROLLO DE SOFTWARE</h4>
					<ul class="check-list">
					    <li>Tenemos experiencia de 20 años en desarrollo de software</li>
					    <li>Nos especializamos en aplicaciones web para soportar procesos de negocio</li>
					    <li>Usamos métodos ágiles, herramientas CASE y lenguaje de modelado UML</li>
					    <li>Desarrollamos software guiado por pruebas</li>
					    <li>Programamos en Ruby on Rails</li>
					</ul>
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