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
                    {{ HTML::image('assets/images/inicio/cliente.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
				    <div class="text-center text-indicadores">Más de 50 clientes felices</div>
				</div>
				<div class="col-md-3">
                    {{ HTML::image('assets/images/inicio/proyectos.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
				    <div class="text-center text-indicadores">100 proyectos desarrollados</div>
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
                <div class="col-md-2">
                    {{ HTML::image('assets/images/inicio/check.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
                </div>
				<div class="col-md-4">
					<h4>Tomamos las ideas y las transformamos en software de calidad </h4>
					<p class="text-justify">Creamos aplicaciones y sistemas
					acorde a las necesidades de cada empresa. Métodos ágiles y
					disciplinados que se traducen en desarrollo de software rápido,
					ordenado y eficaz.</p>
				</div>

				                <div class="col-md-2">
                    {{ HTML::image('assets/images/inicio/check.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
                </div>
				<div class="col-md-4">
					<h4>Tomamos las ideas y las transformamos en software de calidad </h4>
					<p class="text-justify">Creamos aplicaciones y sistemas
					acorde a las necesidades de cada empresa. Métodos ágiles y
					disciplinados que se traducen en desarrollo de software rápido,
					ordenado y eficaz.</p>
				</div>
			</div><br><br>
			<div class="row">
                <div class="col-md-2">
                    {{ HTML::image('assets/images/inicio/check.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
                </div>
				<div class="col-md-4">
					<h4>Tomamos las ideas y las transformamos en software de calidad </h4>
					<p class="text-justify">Creamos aplicaciones y sistemas
					acorde a las necesidades de cada empresa. Métodos ágiles y
					disciplinados que se traducen en desarrollo de software rápido,
					ordenado y eficaz.</p>
				</div>

				                <div class="col-md-2">
                    {{ HTML::image('assets/images/inicio/check.png', $alt='15 años de experiencia', $attributes = array('title' => '9 años de experiencia', 'class' => 'img-responsive')) }} 
                </div>
				<div class="col-md-4">
					<h4>Tomamos las ideas y las transformamos en software de calidad </h4>
					<p class="text-justify">Creamos aplicaciones y sistemas
					acorde a las necesidades de cada empresa. Métodos ágiles y
					disciplinados que se traducen en desarrollo de software rápido,
					ordenado y eficaz.</p>
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
                <section class="regular slider">
                    <div>
                        <img src="http://placehold.it/350x300?text=1">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=2">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=3">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=4">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=5">
                    </div>
                    <div>
                        <img src="http://placehold.it/350x300?text=6">
                    </div>
                </section>
				</div>
			</div>
		</div>
	</div>
@stop