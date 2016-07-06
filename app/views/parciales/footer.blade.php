<div class="row">
	<div class="col-md-6">
		{{ HTML::image('assets/images/layout/footer_bio-logo.png', $alt="Logo") }}
		<br>
		Gestión Informática e Ingeniería de Software a su medida. Prestamos servicios de Desarrollo, Capacitación y Consultoría generándole valor a su compañía.
		<br>
		<p class="text-left" id="text-derechos">
			derechos reservados &copy; Copyright 2015
		</p>
	</div>
	<div class="col-md-6 hidden-xs hidden-sm paginas">
		<ul class="list-inline text-right listapaginas">
			<li>{{ HTML::link('empresa', 'Empresa') }}</li>
			<li class="dropdown">{{ HTML::link('#', 'Servicios', $attributes = array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown", 'role' => "button", 'aria-haspopup' => "true", 'aria-expanded' => "false")); }}
				<ul class="dropdown-menu">
						<li>{{ HTML::link('consultoria', 'Consultoría'); }}</li>
						<li>{{ HTML::link('capacitacion', 'Capacitación'); }}</li>
						<li>{{ HTML::link('desarrollo', 'Desarrollo'); }}</li>
				</ul>
			<li>{{ HTML::link('portafolio', 'Portafolio') }}</li>
			<li>{{ HTML::link('equipo', 'Equipo') }}</li>
			<li>{{ HTML::link('contacto', 'Contacto') }}</li>
		</ul>
	</div>
	
</div>