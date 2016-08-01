@extends ('layouts.diplomados')

@section ('title') 
	Diplomado en Análisis de Negocios, Procesos y Requisitos
@stop

@section ('content')
<div class="row text-center">
	<h1 class="hidden-xs hidden-sm titulo-md">Cursos Certificados y Diplomado en Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos</h1>
	<h1 class="hidden-xs hidden-md hidden-lg titulo-sm">Cursos Certificados y Diplomado en Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos</h1>
	<h1 class="hidden-sm hidden-md hidden-lg titulo-xs">Cursos Certificados y Diplomado en Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos</h1>
	<a href="http://www.va-isid.org/course/index.php?categoryid=33" class="descr-dip-link"><h2 class="hidden-xs hidden-sm  sub-titulo-md"><span>Inscripciones abiertas todo el año.<br>Comience  ahora</span></h2></a>
	<h2 class="hidden-xs hidden-sm  sub-titulo-md">En <span>alianza</span> con el Instituto Superior de Investigación y Desarrollo <span><a href="http://www.va-isid.org/" style="color:#3594D6; text-decoration: none;">VA-ISID</a></span><br> y la Universidad de Nueva Esparta <span>UNE</span></h2>
	<a href="http://www.va-isid.org/course/index.php?categoryid=33" class="descr-dip-link"><h2 class="hidden-xs hidden-md hidden-lg sub-titulo-sm"><span>Inscripciones abiertas todo el año.<br>Comience  ahora</span></h2></a>
	<h2 class="hidden-xs hidden-md hidden-lg sub-titulo-sm">En <span>alianza</span> con el Instituto Superior de Investigación y Desarrollo <span><a href="http://www.va-isid.org/" style="color:#3594D6; text-decoration: none;">VA-ISID</a></span><br> y la Universidad de Nueva Esparta <span>UNE</span></h2>
	<a href="http://www.va-isid.org/course/index.php?categoryid=33" class="descr-dip-link"><h2 class="hidden-sm hidden-md hidden-lg sub-titulo-xs"><span>Inscripciones abiertas todo el año.<br>Comience  ahora</span></h2></a>
	<h2 class="hidden-sm hidden-md hidden-lg sub-titulo-xs">En <span>alianza</span> con el Instituto Superior de Investigación y Desarrollo <span><a href="http://www.va-isid.org/" style="color:#3594D6; text-decoration: none;">VA-ISID</a></span> y la Universidad de Nueva Esparta <span>UNE</span></h2>
</div>
<div id="">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
				<a href="Certificado-BPM" class="link-bloq-cap">
					<div class="col-md-11 col-md-offset-1 bloq-cap">
						{{ HTML::image('assets/images/diplomados/certificado-bpm.jpg',
						'',  $attributes = array('class' => 'img-responsive', 'style' => 'margin: 0 auto;')) }}
						<div class="bloq-cap-tit">Certificado en BPM<br><br></div>
					</div>
				</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
				<a href="Certificado-IR" class="link-bloq-cap">
					<div class="col-md-11 col-md-offset-1 bloq-cap">
						{{ HTML::image('assets/images/diplomados/certificado-ir.jpg',
						'',  $attributes = array('class' => 'img-responsive', 'style' => 'margin: 0 auto;')) }}
						<div class="bloq-cap-tit">Certificado en Ingeniería de Requisitos</div>
					</div>
				</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
				<a href="Diplomado-BPM-IR" class="link-bloq-cap">
					<div class="col-md-11 col-md-offset-1 bloq-cap">
						{{ HTML::image('assets/images/diplomados/diplomado-gpn.jpg',
						'',  $attributes = array('class' => 'img-responsive', 'style' => 'margin: 0 auto;')) }}
						<div class="bloq-cap-tit">Diplomado en BPM &amp; Ingeniería de Requisitos</div>
					</div>
				</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<h2>&nbsp;</h2>
</div>
<div id="#descripcion" class="row">
	<a href="Metodología-Enseñanza" class="descr-dip-link">
		<div class="col-md-4">
			{{ HTML::image('assets/images/diplomados/img-d1/metodologia.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'dip-icons')) }}
			<p class="eslogan">
				Metodología
			</p>
			<p class="text-center">
				Ofrecido bajo la modalidad interactiva a distancia usando una plataforma tecnológica de última generación.
			</p>
		</div>
	</a>
	<a href="Certificación-Evaluación" class="descr-dip-link">
		<div class="col-md-4">
			{{ HTML::image('assets/images/diplomados/img-d1/certificacion.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'dip-icons')) }}
			<p class="eslogan">
				Certificación y evaluación
			</p>
			<p class="text-center">
				Certificado y avalado por instituciones educacionales nacionales y latinoamericanas de prestigio.
			</p>
		</div>
	</a>
	<a href="Requisitos" class="descr-dip-link">
		<div class="col-md-4">
			{{ HTML::image('assets/images/diplomados/img-d1/requisitos.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'dip-icons')) }}
			<p class="eslogan">
				Requisitos
			</p>
			<p class="text-center">
				Formación de pregrado, a nivel de técnico superior, licenciatura o equivalente, en las áreas de Computación, Informática o Administración de Empresas.<br><br>
			</p>
		</div>
	</a>
	<a href="" class="descr-dip-link">
		<div class="col-md-4">
			{{ HTML::image('assets/images/diplomados/img-d1/inscripcion.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'dip-icons')) }}
			<p class="eslogan">
				Preinscripción
			</p>
			<p class="text-center">
				No pierdas la oportunidad de crecer en tu carrera profesional, preinscríbete y reserva tu cupo ya.
			</p>
		</div>
	</a>
	<a href="http://www.va-isid.org/course/index.php?categoryid=33" class="descr-dip-link">
		<div class="col-md-4">
			{{ HTML::image('assets/images/diplomados/img-d1/inscripcion.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'dip-icons')) }}
			<p class="eslogan">
				Inscripción
			</p>
			<p class="text-center">
				Formaliza tu inscripción a través del portal de<br> VA ISID.
			</p>
		</div>
	</a>
	<a href="Diplomado-Contácto" class="descr-dip-link">
		<div class="col-md-4">
			{{ HTML::image('assets/images/diplomados/img-d1/informacion.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'dip-icons')) }}
			<p class="eslogan">
				Mayor información
			</p>
			<p class="text-center">
				Para aclarar tus inquietudes no dudes en contactarnos a través de nuestro formulario de contacto e inmediatamente<br>
				te responderemos.
			</p>
		</div>
	</a>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <a href="https://vimeo.com/159283568" target="_blank" class="descr-dip-link"><h2 class="hidden-xs hidden-sm  sub-titulo-md"><span>Ver video introductorio</span></h2></a>
        <a href="https://vimeo.com/159283568" target="_blank" class="descr-dip-link"><h2 class="hidden-xs hidden-md hidden-lg sub-titulo-sm"><span>Ver video introductorio</span></h2></a>
        <a href="https://vimeo.com/159283568" target="_blank" class="descr-dip-link"><h2 class="hidden-sm hidden-md hidden-lg sub-titulo-xs"><span>Ver video introductorio</span></h2></a>
    </div>
</div>
@stop
<!-- Enlace para regresar -->
@section('atras', 'capacitacion#ofrecemos')
@stop

@section('enlace')
	{{ HTML::link('http://www.va-isid.org/course/index.php?categoryid=33', 'INSCRÍBETE YA!', array('class'=>'', 'role'=>'button'));}}
@stop