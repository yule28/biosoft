@extends ('layouts.master')

@section ('title') 
	Bienvenido a Biosoft
@stop

@section ('content')
	<div id="gestion">
		<div class="container">
			<div class="row indicadores">
				<div class="col-md-3">
                    {{ HTML::image('assets/images/inicio/anos.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
				    <div class="text-center text-indicadores">Más de 9 años de experiencia</div>
				</div>
				<div class="col-md-3">
                    {{ HTML::image('assets/images/inicio/aplicacion.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
				    <div class="text-center text-indicadores">Más de 17 aplicaciones desarrolladas</div>
				</div>
				<div class="col-md-3">
                    {{ HTML::image('assets/images/inicio/proyectos.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
				    <div class="text-center text-indicadores">21 proyectos desarrollados</div>
				</div>
				<div class="col-md-3">
                    {{ HTML::image('assets/images/inicio/grupo.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
				    <div class="text-center text-indicadores">12 profesionales a su dispocición</div>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
	<div class="por-que">
		<div class="container">
		<div class="titulo text-center">Por que nosotros</div>
			<div class="row">
                <div class="col-md-1">
                    {{ HTML::image('/assets/images/inicio/consultoria.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
                </div>
				<div class="col-md-3">
					<h4>CONSULTORÍA </h4>
					<ul class="check-list">
					    <li>Alineamos las TIC al negocio</li>
					    <li>Tenemos alta experiencia profesional y estudios de 4to y 5to nivel</li>
					    <li>Asesoramos a grandes empresas nacionales e internacionales</li>
					    <li>Nos enfocamos en tecnologías de punta: BPM, SOA, Arquitecturas empresariales</li>
					</ul>
				</div>

				<div class="col-md-1">
                    {{ HTML::image('assets/images/inicio/capacitacion.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
                </div>
				<div class="col-md-3">
					<h4>CAPACITACIÓN</h4>
					<ul class="check-list">
					    <li>Contamos con profesores de 4to y 5to nivel académico</li>
					    <li>Tenemos experiencia de 20 años en formación de profesionales en Ingeniería de Software</li>
					    <li>Orientamos la capacitación a la práctica profesional</li>
					    <li>Capacitamos para que seas competitivo en tecnologías de información</li>
					</ul>
				</div>
                <div class="col-md-1">
                    {{ HTML::image('assets/images/inicio/desarrollo.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
                </div>
				<div class="col-md-3">
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
	<div id="clientes">
		<div class="container">
			<div class="row">
				<h2>Nuestros <span>Clientes</span></h2>
			</div>
			<div class="row">
				<div class="col-md-12">
                <section class="regular ">
                    <div>
                        <img src="assets/images/clientes/cencoex.jpg" alt="">
                    </div>
                    <div>
                        <img src="assets/images/clientes/bod.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/univ-lisandro.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/enelven.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/ceisoft.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/bcv.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/ula.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/gasprom.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/caf.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/smurfit.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/pdvsa.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/min-ambiente.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/seniat.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/cvg.jpg">
                    </div>
                    <div>
                        <img src="assets/images/clientes/ena-for.jpg" alt="">
                    </div>
                    <div>
                        <img src="assets/images/clientes/farmatodo.jpg" alt="">
                    </div>
                    <div>
                        <img src="assets/images/clientes/mad-orinoco.jpg" alt="">
                    </div>
                    <div>
                        <img src="assets/images/clientes/intt.jpg" alt="">
                    </div>
                    <div>
                        <img src="assets/images/clientes/va-isid.jpg" alt="">
                    </div>
                    <div>
                        <img src="assets/images/clientes/guardianes.jpg" alt="">
                    </div>
                </section>
				</div>
			</div>
		</div>
	</div>
@stop