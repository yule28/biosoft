@extends ('layouts.master')

@section ('title') 
	Bienvenido a Biosoft
@stop

@section ('content')
	<div id="gestion">
		<div class="container">
			<div class="row">
				<h2>BioSoft Gestión <span>Informática</span> e Ingeniería de <span>Software</span></h2>
			</div>
			<div class="row gest">
					<div class="col-md-4">
						<p class="text-justify">
							BioSoft es Gestión Informática e Ingeniería de Software a su medida.
							Prestamos servicios de Desarrollo, Capacitación y Consultoría generándole
							valor a su compañía.
							Nuestro equipo multidisciplinario, con una enorme
							experiencia, le brinda soluciones rápidas, efectivas,
							eficaces y según sus necesidades.
						</p>
						<p class="eslogan">
							"En BioSoft somos Talento Venezolano que da vida a sus proyectos."
						</p>
				    </div>
					<div class="col-md-8">
						{{ HTML::image('assets/images/inicio/ing-soft.jpg',	$alt="imagen 1", $attributes = array('width' => 584, 'height' => 264, 'class' => 'img-responsive', 'style' => 'margin: 5% auto; border-radius:10px;')) }}
					</div>

			</div>
		</div>
	</div>
	<div id="indicadores">
		<div class="container">
			<div class="row indicadores"><br><br><br><br>
				<div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3 col-md-3">
                    {{ HTML::image('assets/images/inicio/anos.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
				    <div class="text-center text-indicadores">Más de 9 años de experiencia</div>
				</div>
				<div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3 col-md-3">
                    {{ HTML::image('assets/images/inicio/aplicacion.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
				    <div class="text-center text-indicadores">Más de 17 aplicaciones desarrolladas</div>
				</div>
				<div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3 col-md-3">
                    {{ HTML::image('assets/images/inicio/proyectos.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
				    <div class="text-center text-indicadores">21 proyectos desarrollados</div>
				</div>
				<div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3 col-md-3">
                    {{ HTML::image('assets/images/inicio/grupo.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
				    <div class="text-center text-indicadores">12 profesionales a su disposición</div>
				</div>
			</div>
			<br><br><br><br>
		</div>
	</div>
	<div class="por-que">
		<div class="container">
		<div class="titulo text-center">Por qué nosotros</div>
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
	<div id="clientes">
		<div class="container">
			<div class="row">
				<h2>Nuestros <span>Clientes</span></h2>
			</div>
			<div class="row">
				<div class=" col-md-offset-1 col-md-10">
                <section class="autoplay ">
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
    <div id="capacitacion">
        <div class="container">
        <div class="row info">
				<h2>Algunos de nuestros<span>Trabajos</span></h2>
		</div>
        <section class="Collage effect-parent">
            <div class="Image_Wrapper" data-caption="SHiMed es una aplicación web, bajo la plataforma Ruby on Rails y PostgreSQL, que  permite el registro de los actores de salud.">
                <a><img src="assets/collageplus/thumbs/SHIMED.png"></a>
            </div>
            <div class="Image_Wrapper" data-caption="SHiMed es una aplicación web, bajo la plataforma Ruby on Rails y PostgreSQL, que  permite el registro de los actores de salud.">
                <a><img src="assets/collageplus/thumbs/SHIMED2.png"></a>
            </div>
            <div class="Image_Wrapper" data-caption="SIGETT es un sistema de información empresarial que soporta los principales procesos del negocio del área de transporte público terrestre y de servicios conexos">
                <a><img src="assets/collageplus/thumbs/SIGTT.png"></a>
            </div>
            <div class="Image_Wrapper" data-caption="SIGETT es un sistema de información empresarial que soporta los principales procesos del negocio del área de transporte público terrestre y de servicios conexos">
                           <a><img src="assets/collageplus/thumbs/SIGTT2.png"></a>
            </div>
            <div class="Image_Wrapper" data-caption="El Sistema de Manejo Productivo del Bosque Tropical (SIMAPRO) es parte de un sistema de información empresarial que soporta los procesos del negocio de planificación, aprovechamiento y manejo forestal de la Empresa Nacional Forestal">
                <a><img src="assets/collageplus/thumbs/Simapro.png"></a>
            </div>
            <div class="Image_Wrapper" data-caption="El Sistema de Manejo Productivo del Bosque Tropical (SIMAPRO) es parte de un sistema de información empresarial que soporta los procesos del negocio de planificación, aprovechamiento y manejo forestal de la Empresa Nacional Forestal">
                <a><img src="assets/collageplus/thumbs/Simapro2.png"></a>
            </div>
            <div class="Image_Wrapper" data-caption="Rediseño de  la página web del Instituto Nacional de Transporte Terrestre.">
                <a><img src="assets/collageplus/thumbs/Web-INTT.png"></a>
            </div>
            <div class="Image_Wrapper" data-caption="Aplicación para la gestión de eventos de todo tipo.">
                <a><img src="assets/collageplus/thumbs/eventos.jpg"></a>
            </div>
            <div class="Image_Wrapper" data-caption="El Sistema para el Seguimiento y Evaluación de Proyectos (SSEP) es un sistema de información que apoya la gestión de los planes, proyectos y programas de la Dirección General de Cuencas Hidrográficas del MINEA.">
                <a><img src="assets/collageplus/thumbs/SSEP.jpg"></a>
            </div>
            <div class="Image_Wrapper" data-caption="Portal instruccional desarrollado con el apoyo técnico de Biosoft C.A., el apoyo académico del Grupo GIDyC de la ULA, y el FONACIT.">
                <a><img src="assets/collageplus/thumbs/e-praxis.jpg"></a>
            </div>
            <div class="Image_Wrapper" data-caption="Mall Rental es una aplicación web para la gestión de alquileres de centros comerciales que operan bajo el modelo de negocios de alquiler de locales.">
                <a><img src="assets/collageplus/thumbs/mallRenta.jpg"></a>
            </div>
            <div class="Image_Wrapper" >
                <a><img src="assets/collageplus/thumbs/blanco.jpg"></a>
            </div>
        </section>
	    </div>
    </div>
@stop