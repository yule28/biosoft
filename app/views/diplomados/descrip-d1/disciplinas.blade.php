@extends ('layouts.descrip-diplomados')

@section ('title')
	Disciplinas y áreas que cubre el diplomado
@stop

@section('img')
	{{ HTML::image('assets/images/diplomados/img-d1/disciplinas.jpg', $alt="Lenguajes de Modelado de Software: UML 2.5", $attributes = array('class' => 'img-responsive descr-dip-img hidden-xs')) }}
@stop
@section('titulo')
	Disciplinas y áreas que cubre el diplomado
@stop
@section('descripcion')
	El diplomado en Análisis de Negocios, Procesos  y Requisitos  cubre tres de las disciplinas más recientes relacionadas con la gestión de una empresa:<br>
	<ul>
		<li>Análisis de Negocios</li>
		<li>Gestión de Procesos de Negocio (BPM – Business Process Management)</li>
		<li>Ingeniería de Requisitos</li>
	</ul><br>
	El Análisis de Negocios comprende el conjunto de conocimientos, métodos, técnicas y herramientas que son necesarias para identificar las necesidades o problemas de un negocio y determinar sus soluciones. Se enfoca en el análisis de los procesos que conforman una empresa a fin de determinar cuáles de ellos contribuyen o afectan su ventaja competitiva. 
	<br><br>El Análisis de Negocios comprende las siguientes áreas de conocimiento:
	<br><br>
	<ul>
		<li>Análisis, diseño y modelado de arquitecturas de negocio</li>
		<li>Modelado de sistemas de negocio</li>
		<li>Planificación y control del análisis de negocio</li>
	</ul><br>
	Por otra parte, la Gestión de Procesos de Negocios (BPM) abarca los métodos, técnicas, herramientas, tecnologías y conocimientos de gestión para la identificación, modelado, análisis, automatización, mejora y control de los procesos de negocios.<br><br>
	BPM es la disciplina que permite unificar, integrar y alinear los procesos de negocios con su plataforma TI. Esta disciplina abarca las siguientes áreas de conocimiento: <br><br>
	<ul>
		<li>Modelado de procesos de negocio</li>
		<li>Análisis de procesos</li>
		<li>Diseño de procesos</li>
		<li>Gestión del rendimiento de procesos</li>
		<li>Organización de la gestión de procesos</li>
		<li>Aplicación de tecnologías  para BPM  </li>
	</ul>
	<br>Por último, la Ingeniería de Requisitos (IS) centra su atención en la identificación, determinación, análisis y especificación  de las necesidades que los interesados tienen para alcanzar un objetivo  o resolver un problema.  Cuando los requisitos abarcan soluciones automatizadas estos describen la funcionalidad y restricciones que deben ser consideradas para el desarrollo de una solución de software.
	<br><br>
	La Ingeniería de Requisitos se divide en las siguientes áreas de conocimiento:
	<br><br>
	<ul>
		<li>Identificación de requisitos</li>
		<li>Análisis de requisitos</li>
		<li>Especificación y documentación de requisitos</li>
		<li>Validación de requisitos</li>
		<li>Gestión de requisitos</li>
	</ul>
	<br>
@stop