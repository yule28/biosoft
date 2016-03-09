@extends ('layouts.certificados')

@section ('title')
	Diplomado en Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos (BPM)
@stop

@section('curso-tit')
	Diplomado en Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos (BPM)
@stop
@section('descripcion')
	{{ HTML::image('assets/images/diplomados/diplomado-gpn.jpg', $alt="Diplomado en Gestión de Procesos de Negocio (BPM) e Ingeniería de Requisitos", $attributes = array('class' => 'img-responsive pull-right', 'style'=> 'margin-left:20px;')) }}
	Es el sub-programa más completo de los tres que se ofrecen en este programa. Consta de cinco (5) cursos y cubre, de manera integral, las tres áreas de conocimientos del programa: Análisis de Negocios, Gestión de Procesos de Negocio e Ingeniería de Requisitos.<br><br>
	Está dirigido a aquellas personas que deseen capacitarse en los aspectos técnicos y gerenciales necesarios para gestionar los procesos de negocio de una empresa y definir las necesidades y requisitos de información y automatización que dichos procesos de negocio demandan. <br><br>
	El certificado se otorga una vez que el participante haya cursado y aprobado satisfactoriamente los siguientes cursos:<br><br><br><br>
	<div class="row">
        <a href="assets/pdf/FichaCursoLenguajeUML.pdf" target="_blank"><div class="col-sm-3 text-center recuadro-grd verd">El Lenguaje de Modelado UML 2.5 y sus extensiones</div></a>
        <div class=" col-xs-1 col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/right-arrow.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs flecha')) }}</div>
        <a href="assets/pdf/FichaCursoMétodosyModeloDSW.pdf" target="_blank"><div class="col-sm-3 text-center recuadro-grd azul-claro">Desarrollo de Software: Métodos Ágiles y Balanceados</div></a>
        <div class=" col-xs-1 col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/right-arrow.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs flecha')) }}</div>
        <a href="assets/pdf/FichaCursosBPM y BPMN.pdf" target="_blank"><div class="col-sm-3 text-center recuadro-grd ocre">Gestión de Procesos de Negocio BPM y la Notación BPMN</div></a>
        <div class="hidden-xs col-xs-1 col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/right-arrow.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs flecha')) }}</div>
    </div><br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs">
    <div class="row">
        <div class="col-xs-1 col-sm-offset-2 col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/right-arrow.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs flecha')) }}</div>
        <a href="assets/pdf/FichaCursoAnálisisModeladoDeNegocios.pdf" target="_blank"><div class="col-sm-3 text-center recuadro-grd vino">Análisis y Modelado de Negocios con UML</div></a>
        <div class="col-xs-1 col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/right-arrow.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs flecha')) }}</div>
        <a href="assets/pdf/FichaCursoIngenieríaRequisitos.pdf" target="_blank"><div class="col-sm-3 text-center recuadro-grd turq-oscuro">Ingeniería de Requisitos</div></a>
	</div><br><br><br>
	Los participantes que hayan obtenido uno de dos certificados descritos anteriormente y hayan completado los dos cursos restantes, optan automáticamente por el diplomado. Este diplomado es, por lo tanto, la suma del Certificado en Gestión de Procesos de Negocio (BPM) y el Certificado en Ingeniería de Requisitos. Por consiguiente, al participante que curse y apruebe satisfactoriamente los cinco (5) cursos se le otorga los dos certificados de aprobación y el diploma. <br><br>
	<div class="row">
        <div class="col-sm-3 text-center recuadro-dip">{{ HTML::image('assets/images/diplomados/certificado.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs dip-img')) }} <br>Certificado de Aprobación en BPM</div>
        <div class=" col-xs-1 col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/mas.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs dip-img')) }}</div>
        <div class="col-sm-3 text-center recuadro-dip ">{{ HTML::image('assets/images/diplomados/certificado.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs dip-img')) }} <br>Certificado de Aprobación en Ingeniería de Requisitos</div>
        <div class=" col-xs-1 col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/igual.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs dip-img')) }}</div>
        <div class="col-sm-3 text-center recuadro-dip ">{{ HTML::image('assets/images/diplomados/diploma.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs dip-img')) }} <br>Diploma en BPM e Ingeniería de Requisitos</div>
    </div>
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Lenguajes de Modelado de Software: UML 2.5') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso1') }}
@stop