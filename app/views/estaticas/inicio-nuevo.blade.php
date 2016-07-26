@extends ('layouts.master-nuevo')

@section ('title') 
	Bienvenido a Biosoft
@stop

@section ('content')
	<div class="container">
	    <div class="row">
		    <div class="col-md-12">
			    <h2 class="titulo-seccion">Indicadores de calidad</h2>
			    <div class="row text-center">
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/numero.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo">
				            Experiencia
			            </p>
			            <p class="descripcion text-center">
				            Tenemos 10 años de trabajo en el área.
			            </p>
                    </div>
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/icon.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo">
				            Desarrollos
			            </p>
			            <p class="descripcion text-center">
				            Contamos con 17 aplicaciones creadas.
			            </p>
                    </div>
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/idea.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo">
				            Consultoría
			            </p>
			            <p class="descripcion text-center">
				            Hemos realizado 12 cosultorías a empresas.
			            </p>
                    </div>
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/grupo.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo">
				            Personal
			            </p>
			            <p class="descripcion text-center">
				            Somos un equipo de 12 expertos a su dispocición.
			            </p>
                    </div>
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/curso.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo">
				            Cursos
			            </p>
			            <p class="descripcion text-center">
				            Más de 100 cursos impartidos en el país.
			            </p>
                    </div>
			        <div class="col-xs-6 col-sm-4 col-md-2 modulos">
			        	{{ HTML::image('assets/images/inicio/multitud.png', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <p class="titulo">
				            Participantes
			            </p>
			            <p class="descripcion text-center">
				            Mas de 1000 participantes certificados.
			            </p>
                    </div>
			    </div>
			</div>
        </div>
        	    <div class="row">
		    <div class="col-md-12">
			    <h2 class="titulo-seccion">Por qué nosotros</h2>
			    <div class="row text-center">
			        <div class="col-md-4 porque">
			        	{{ HTML::image('assets/images/inicio/consultoria.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <h3 class="capacitacion">
				            CONSULTORÍA
			            </h3>
                       <ul class="check-list">
                            <li>Alineamos las TIC al negocio</li>
                            <li>Tenemos alta experiencia profesional y estudios de 4to y 5to nivel</li>
                            <li>Asesoramos a grandes empresas nacionales e internacionales</li>
                            <li>Nos enfocamos en tecnologías de punta: BPM, SOA, Arquitecturas empresariales</li>
                        </ul>
                        <hr>
                    </div>
			        <div class="col-md-4 porque">
			        	{{ HTML::image('assets/images/inicio/capacitacion.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <h3 class="capacitacion">
				            CAPACITACIÓN
			            </h3>
                        <ul class="check-list">
                            <li>Contamos con profesores de 4to y 5to nivel académico</li>
                            <li>Tenemos experiencia de 20 años en formación de profesionales en Ingeniería de Software</li>
                            <li>Orientamos la capacitación a la práctica profesional</li>
                            <li>Capacitamos para que seas competitivo en tecnologías de información</li>
                        </ul>
                        <hr>
                    </div>
			        <div class="col-md-4 porque">
			        	{{ HTML::image('assets/images/inicio/desarrollo.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'ind-icons')) }}
                        <hr>
			            <h3 class="capacitacion">
				            DESARROLLO DE SOFTWARE
			            </h3>
                        <ul class="check-list">
                            <li>Tenemos experiencia de 20 años en desarrollo de software</li>
                            <li>Nos especializamos en aplicaciones web para soportar procesos de negocio</li>
                            <li>Usamos métodos ágiles, herramientas CASE y lenguaje de modelado UML</li>
                            <li>Desarrollamos software guiado por pruebas</li>
                            <li>Programamos en Ruby on Rails</li>
                        </ul>
                        <hr>
                    </div>
			    </div>
			</div>
        </div>
    </div>
	<div id="clientes">
		<div class="container">
			<div class="row">
				<h2 class="titulo-seccion">Nuestros <span>Clientes</span></h2>
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