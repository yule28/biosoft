@extends ('layouts.certificados')

@section ('title')
	Certificado en Ingeniería de Requisitos (BPM)
@stop

@section('curso-tit')
	Certificado en Ingeniería de Requisitos (BPM)
@stop
@section('descripcion')
	{{ HTML::image('assets/images/diplomados/certificado-ir.jpg', $alt="Certificado en Ingeniería de Requisitos", $attributes = array('class' => 'img-responsive pull-right', 'style'=> 'margin-left:20px;')) }}
	El sub-programa en Ingeniería de Requisitos está dirigido a capacitar analistas o ingenieros de requisitos. Consta de tres (3) cursos consecutivos.<br><br>
	El certificado se otorga cuando el participante haya cursado y aprobado satisfactoriamente los tres cursos que se indican a continuación:<br><br><br><br>
	<div class="row">
        <a href="assets/pdf/FichaCursoLenguajeUML.pdf" target="_blank"><div class="col-sm-3 text-center recuadro verd">El Lenguaje de Modelado UML 2.5 y sus extensiones</div></a>
        <div class="hidden-xs col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/right-arrow.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs flecha')) }}</div>
        <a href="assets/pdf/FichaCursoMétodosyModeloDSW.pdf" target="_blank"><div class="col-sm-3 text-center recuadro azul-claro">Desarrollo de Software: Métodos Ágiles y Balanceados</div></a>
        <div class="hidden-xs col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/right-arrow.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs flecha')) }}</div>
        <a href="assets/pdf/FichaCursoIngenieríaRequisitos.pdf" target="_blank"><div class="col-sm-3 text-center recuadro turq-oscuro">Ingeniería de Requisitos</div></a>
	</div>
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Lenguajes de Modelado de Software: UML 2.5') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso1') }}
@stop