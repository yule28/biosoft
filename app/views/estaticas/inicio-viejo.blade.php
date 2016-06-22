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
						<p class="text-right">{{ HTML::link('equipo', 'conozcanos', array('class' => 'btn btn-success btn-sm','role'=>'button')); }}</p>
					</div>
					<div class="col-md-8">
						{{ HTML::image('assets/images/inicio/gestion.png',
						$alt="imagen 1", $attributes = array('width' => 784, 'height' => 464,
						'class' => 'img-responsive')) }}
					</div>

			</div>
		</div>
	</div>
	<div id="desarrollo">
		<div class="container">
			<div class="row des">
				<div class="col-md-4">
					<h2>Servicios en <span>Desarrollo</span></h2>
					<h4>Tomamos las ideas y las transformamos en software de calidad </h4>
					<p class="text-justify">Creamos aplicaciones y sistemas
					acorde a las necesidades de cada empresa. Métodos ágiles y
					disciplinados que se traducen en desarrollo de software rápido,
					ordenado y eficaz.</p>
					<p>Conoce más acerca de nuestro método de desarrollo.</p>
					<p class="text-right">
						{{ HTML::link('desarrollo', 'más', array('class' => 'btn btn-default btn-sm','role'=>'button')); }}
					</p>
				</div>
				<div class="col-md-8">
					{{ HTML::image('assets/images/inicio/herramientas.png',
					$alt="imagen 1", $attributes = array('width' => 600, 'height' => 370,
					'class' => 'img-responsive')) }}
				</div>
			</div>
		</div>
	</div>
	<div id="capacitacion">
		<div class="container">
			<div class="row">
				<div class="col-md-4 info">
					<h2>Servicios en <span>Capacitación</span></h2>
					<h4>BioSoft también es Capacitación Profesional</h4>
					<p class="text-justify">En BioSoft compartimos nuestros 
					conocimientos y nuestras ideas. La capacitación de más de 
					<span>500</span> profesionales de empresas públicas y privadas así 
					lo comprueban. Descubra nuestro novedoso programa de capacitación 
					que ahora ofrecemos de manera 100% virtual. Mantener empresas de 
					vanguardia implica tener personal capacitado e instruido. Elimine 
					la barrera de sus conocimientos y lleve a su empresa a otro nivel.</p>
					<p class="text-right">
						{{ HTML::link('capacitacion', 'más', array('class' => 'btn btn-warning btn-sm','role'=>'button')); }}
					</p>
				</div>
				<div class="col-md-8">
					{{ HTML::image('assets/images/inicio/laptop.png', 
					$alt="imagen 1", $attributes = array('width' => 878, 'height' => 566, 
					'class' => 'img-responsive')) }}
				</div>
			</div>
		</div>
	</div>
	<div id="consultoria">
		<div class="container">
			<h2>Servicios en <span>Consultoria</span></h2>
			<div class="row">
			  	<div class="col-sm-5 col-md-3">
					<div class="thumbnail">
					  {{ HTML::image('assets/images/inicio/modelado.png', 
					  $alt="imagen 1", $attributes = array('width' => 238, 'height' => 168, 
					  'class' => 'img-responsive')) }}	
					  <div class="caption">
					    <h4>Modelado y Gestion de
							Procesos de Negocio</h4>
					    <p class="text-justify">Analice, modele, mejore y automatice
					     los procesos de su empresa. Represente gráficamente los 
					     procesos de negocio, los objetivos del negocio, las actividades, 
					     las reglas del negocio, la estructura organizacional, entre otros, 
					     para una mejor toma de decisiones</p>
					    <p class="text-right">
							{{ HTML::link('consultoria', 'más', array('class' => 'btn btn-primary btn-sm','role'=>'button')); }}
					    </p>
					  </div><!-- end caption -->
					</div><!-- end thumbnail -->
				</div><!-- end col-sm-6 col-md-4 -->

			    <div class="col-sm-5 col-md-3">
			      <div class="thumbnail">
			        {{ HTML::image('assets/images/inicio/arquitectura.png', 
			        $alt="imagen 1", $attributes = array('width' => 238, 'height' => 168, 
			        'class' => 'img-responsive')) }}	
			        <div class="caption">
			          <h4>Arquitectura Orientada
						a Servicios SOA</h4>
			          <p class="text-justify">Soluciones informáticas basadas en el 
			          concepto de servicio. Establezca una mejor alineación entre los 
			          procesos del negocio y los sistemas de información. Mejore la 
			          interoperabilidad de sus aplicaciones y desarrolle soluciones en el 
			          mejor tiempo posible</p>
			          <p class="text-right">
			          	{{ HTML::link('consultoria', 'más', array('class' => 'btn btn-primary btn-sm','role'=>'button')); }}
			          </p>
			        </div><!-- end caption -->
			      </div><!-- end thumbnail -->
			    </div><!-- end col-sm-6 col-md-4 -->

		        <div class="col-sm-5 col-md-3">
		          <div class="thumbnail">
		            {{ HTML::image('assets/images/inicio/planificacion.png', 
		            $alt="imagen 1", $attributes = array('width' => 238, 'height' => 168, 
		            'class' => 'img-responsive')) }}	
		            <div class="caption">
		              <h4>Planificación de 
						Arquitectura Empresarial</h4>
		              <p class="text-justify">Elabore la planificación de la Arquitectura 
		              Empresarial de su compañía con métodos de vanguardia y envergadura. 
		              Lleve a cabo la alineación de los procesos de negocio, los sistemas 
		              de información, las bases de datos y las tecnologías de la información 
		              y comunicación de su empresa</p>
		              <p class="text-right">
		              	{{ HTML::link('consultoria', 'más', array('class' => 'btn btn-primary btn-sm','role'=>'button')); }}
		              </p>
		            </div><!-- end caption -->
		          </div><!-- end thumbnail -->
		        </div><!-- end col-sm-6 col-md-4 -->

                <div class="col-sm-5 col-md-3">
                  <div class="thumbnail">
                    {{ HTML::image('assets/images/inicio/desarrollo.png', 
                    $alt="imagen 1", $attributes = array('width' => 238, 'height' => 168, 
                    'class' => 'img-responsive')) }}	
                    <div class="caption">
                      <h4>Desarrollo <span>Ágil</span> y Balanceado de Aplicaciones Empresariales</h4>
                      <p class="text-justify">Conozca el método <span>Blue WATCH</span> y 
                      disponga de aplicaciones de calidad en el menor tiempo posible. 
                      Desarrollo de software rápido, ordenado y eficaz.</p>
                      <p class="text-right">
                      	{{ HTML::link('desarrollo', 'más', array('class' => 'btn btn-primary btn-sm','role'=>'button')); }}
                      </p>
                    </div><!-- end caption -->
                  </div><!-- end thumbnail -->
                </div><!-- end col-sm-6 col-md-4 -->
			</div>
		</div>
	</div>
	<div id="clientes">
		<div class="container">
			<div class="row">
				<h2>Nuestros <span>Clientes</span></h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<p class="text-justify">En BioSoft contamos con una cartera de <span>clientes</span> amplia de <span>empresas</span> públicas y privadas, que nos han escogido para suplir sus necesidades en la Gestión Informática de su compañía y que dan aval de nuestro trabajo.</p>
				</div>
				<div class="col-md-8">
					{{ HTML::image('assets/images/inicio/clientes.png', 
						$alt="imagen 1", $attributes = array('width' => 729, 'height' => 420, 
						'class' => 'img-responsive')) }}
				</div>
			</div>
		</div>
	</div>
@stop