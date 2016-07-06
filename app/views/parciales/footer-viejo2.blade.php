<div class="row">
	<div class="col-md-4" >
		{{ HTML::image('assets/images/layout/footer_bio-logo.png', $alt="Logo") }}
		<br>
		Gestión Informática e Ingeniería de Software a su medida. Prestamos servicios de Desarrollo, Capacitación y Consultoría generándole valor a su compañía.
		<br>
		<p class="text-left" id="text-derechos">
			derechos reservados &copy; Copyright 2015
		</p>
	</div>
	<div class="col-md-4 hidden-xs hidden-sm paginas">
		<span class="titulo">Páginas</span><br><br>
		{{ HTML::link('consultoria', 'Consultoria') }}<br>
		{{ HTML::link('capacitacion', 'Capacitación') }}<br>
		{{ HTML::link('desarrollo', 'Desarrollo') }}<br>
		{{ HTML::link('equipo', 'Equipo') }}<br>
		{{ HTML::link('contacto', 'Contacto') }}
	</div>
	<div class="col-md-4 hidden-xs hidden-sm">
	<div class="row">
		<div class="col-md-3 enlaces">
		<div class="row">
                    <!--correo-->
						<a href="contacto">
						{{ HTML::image('assets/images/contacto/email.png', 
			$alt="imagen 1", $attributes = array('width' => 60, 'height' => 58, 
			'class' => 'img-responsive')) }}
					</a>
					</div>
					<div class="row">
					<!--facebook-->
						<a href="https://www.facebook.com/Biosoftca-1622725348051680/" target="_blank">
						{{ HTML::image('assets/images/contacto/face.png', 
			$alt="imagen 1", $attributes = array('width' => 60, 'height' => 53, 
			'class' => 'img-responsive')) }}
					</a>
					</div>
					<div class="row">
					<!--twitter-->
						<a href="https://twitter.com/biosoftca" target="_blank">
						{{ HTML::image('assets/images/contacto/twitter.png', 
			$alt="imagen 1", $attributes = array('width' => 60, 'height' => 54, 
			'class' => 'img-responsive')) }}
					</a>
					</div>
					<div class="row">
					<!--instagram-->
						<a href="https://www.instagram.com/biosoftca/" target="_blank">
						{{ HTML::image('assets/images/contacto/link.png', 
			$alt="imagen 1", $attributes = array('width' => 60, 'height' => 53, 
			'class' => 'img-responsive')) }}
					</a>
		</div>
		</div>
		<div class="col-md-9 telefonos">
			<br><br><br>
			<p>Telf: (+58) 274-7892669</p>
			<p>Fax: (+58) 274-2459702</p>
			<p>atencion@biosoftca.com</p>
		</div>
	</div>
	</div>
</div>