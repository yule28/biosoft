@extends ('layouts.certificados')

@section ('title')
	Certificado en Gestión de Procesos de Negocio (BPM)
@stop

@section('curso-tit')
	Certificado en Gestión de Procesos de Negocio (BPM)
@stop
@section('descripcion')
	{{ HTML::image('assets/images/diplomados/certificado-bpm.jpg', $alt="Certificado en Gestión de Procesos de Negocio (BPM)", $attributes = array('class' => 'img-responsive pull-right', 'style'=> 'margin-left:20px;')) }}
	Este sub-programa está dirigido a la capacitación de analistas de negocio o analistas de procesos de negocio, Comprende un total de tres (3) cursos que se toman secuencialmente.<br><br>
	El certificado se otorga una vez que el participante haya cursado y aprobado satisfactoriamente cada uno de los tres cursos siguientes:<br><br><br><br>
	<div class="row">
        <a href="assets/pdf/FichaCursoLenguajeUML.pdf" target="_blank"><div class="col-sm-3 text-center recuadro verd">El Lenguaje de Modelado UML 2.5 y sus extensiones</div></a>
        <div class="hidden-xs  col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/right-arrow.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs flecha')) }}</div>
        <a href="assets/pdf/FichaCursosBPM y BPMN.pdf" target="_blank"><div class="col-sm-3 text-center recuadro ocre">Gestión de Procesos de Negocio BPM y la Notación BPMN</div></a>
        <div class="hidden-xs col-sm-1 recuadro">{{ HTML::image('assets/images/diplomados/right-arrow.png', $alt="", $attributes = array('class' => 'img-responsive hidden-xs flecha')) }}</div>
        <a href="assets/pdf/FichaCursoAnálisisModeladoDeNegocios.pdf" target="_blank"><div class="col-sm-3 text-center recuadro vino">Análisis y Modelado de Negocios con UML</div></a>
	</div>
@stop
@section('campos')
	{{ Form::hidden('tit-curso', 'Lenguajes de Modelado de Software: UML 2.5') }}
	{{-- ruta para regresar al curso luego de enviar el correo--}}
	{{ Form::hidden('ruta', 'cursos.curso1') }}
@stop