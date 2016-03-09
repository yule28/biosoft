@extends ('layouts.diplomados')

@section ('title') 
	Diplomado en Análisis de Negocios, Procesos y Requisitos
@stop

@section ('content')
<div class="row text-center">
	<h1 class="hidden-xs hidden-sm titulo-md">Cursos Certificados y Diplomado en Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos</h1>
	<h1 class="hidden-xs hidden-md hidden-lg titulo-sm">Cursos Certificados y Diplomado en Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos</h1>
	<h1 class="hidden-sm hidden-md hidden-lg titulo-xs">Cursos Certificados y Diplomado en Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos</h1>
	<a href="http://www.va-isid.org/course/index.php?categoryid=33" class="descr-dip-link"><h2 class="hidden-xs hidden-sm  sub-titulo-md"><span>Inscripciones abiertas.<br>Inicio: 04 de abril de 2016</span></h2></a>
	<h2 class="hidden-xs hidden-sm  sub-titulo-md">En <span>alianza</span> con el Centro de Investigación y Desarrollo <span>VA-ISID</span> ISID y <br>la Universidad de Nueva Esparta <span>UNE</span></h2>
	<a href="http://www.va-isid.org/course/index.php?categoryid=33" class="descr-dip-link"><h2 class="hidden-xs hidden-md hidden-lg sub-titulo-sm"><span>Inscripciones abiertas.<br>Incio: 11 de enero de 2016</span></h2></a>
	<h2 class="hidden-xs hidden-md hidden-lg sub-titulo-sm">En <span>alianza</span> con el Centro de Investigación y Desarrollo <span>VA-ISID</span> ISID y <br>la Universidad de Nueva Esparta <span>UNE</span></h2>
	<a href="http://www.va-isid.org/course/index.php?categoryid=33" class="descr-dip-link"><h2 class="hidden-sm hidden-md hidden-lg sub-titulo-xs"><span>Inscripciones abiertas.<br>Incio: 11 de enero de 2016</span></h2></a>
	<h2 class="hidden-sm hidden-md hidden-lg sub-titulo-xs">En <span>alianza</span> con el Centro de Investigación y Desarrollo <span>VA-ISID</span> ISID y <br>la Universidad de Nueva Esparta <span>UNE</span></h2>
</div>
<div class="row">
	<h2>&nbsp;</h2>
</div>
<div id="#descripcion" class="row">
	<a href="Disciplinas-Areas" class="descr-dip-link">
		<div class="col-md-4">
			{{ HTML::image('assets/images/diplomados/img-d1/areas.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'dip-icons')) }}
			<p class="eslogan">
				Disciplinas y áreas que cubre
			</p>
			<p class="text-center">
				Capacítate en las disciplinas de mayor demanda laboral: Análisis de Negocios, Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos.
			</p>
		</div>
	</a>
	<a href="Orientacion-Roles" class="descr-dip-link">
		<div class="col-md-4">
			{{ HTML::image('assets/images/diplomados/img-d1/roles.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'dip-icons')) }}
			<p class="eslogan">
				Orientación a roles y competencias
			</p>
			<p class="text-center">
				El objetivo de este diplomado es actualizar o capacitar a quienes ejerzan, o deseen ejercer, cargos o roles de Analista de Negocios, Analista de Procesos o Ingeniero de Requisitos.
			</p>
		</div>
	</a>
	<a href="Contenidos-Diplomado" class="descr-dip-link">
		<div class="col-md-4">
			{{ HTML::image('assets/images/diplomados/img-d1/contenido.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'dip-icons')) }}
			<p class="eslogan">
				Estructura y contenidos
			</p>
			<p class="text-center">
				Cubre los modelos de referencia, lenguajes de modelado, métodos, técnicas, mejores prácticas y herramientas de mayor uso y reconocimiento mundial: BPM, BPMN 2, UML 2.5, TOGAF 9.5, BABOK, SWEBOK, SEMAT, SCRUM, Blue WATCH, etc.
			</p>
		</div>
	</a>
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
	<a href="Plan-Estudio" class="descr-dip-link">
		<div class="col-md-4">
			{{ HTML::image('assets/images/diplomados/img-d1/plan.jpg', $alt="Disciplinas y áreas que cubre", $attributes = array('class' => 'dip-icons')) }}
			<p class="eslogan">
				Plan  de estudio
			</p>
			<p class="text-center">
				El diplomado esta conformado por un conjunto de cursos de alto nivel académico, que cubren las áreas de Análisis de Negocios, Gestión de Procesos de Negocios e Ingeniería de Requisitos. 
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
				No pierdas la oportunidad de crecer en tu carrera laboral  e inscríbete a través del portal de<br> VA ISID.
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
@stop
<!-- Enlace para regresar -->
@section('atras', 'capacitacion#ofrecemos')
@stop

@section('enlace')
	{{ HTML::link('http://www.va-isid.org/course/index.php?categoryid=33', 'INSCRÍBETE YA!', array('class'=>'', 'role'=>'button'));}}
@stop