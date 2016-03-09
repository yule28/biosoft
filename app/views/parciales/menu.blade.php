<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
		  <div class="logo-biosoft">
		  	{{ HTML::image('assets/images/layout/logo_header.png',
                	$alt="Biosof c.a", $attributes = array('width' => 212, 'height' => 80,
                	'class' => 'img-responsive')) }}
		  </div>
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-menu">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
		</div> <!-- ./navbar-header -->
		
		<div class="collapse navbar-collapse" id="bs-menu">
			<ul class="ph-line-nav nav navbar-nav">
				<li class="{{Request::path() == '/' ? 'active' : '';}}">{{ HTML::link('/', 'INICIO'); }}</li>
				<li class="{{Request::path() == 'consultoria' ? 'active' : '';}}">{{ HTML::link('consultoria', 'CONSULTORIA'); }}</li>
				<li class="{{Request::path() == 'capacitacion' ? 'active' : '';}}">{{ HTML::link('capacitacion', 'CAPACITACIÓN'); }}</li>
				<li class="{{Request::path() == 'desarrollo' ? 'active' : '';}}">{{ HTML::link('desarrollo', 'DESARROLLO'); }}</li>
				<li class="{{Request::path() == 'equipo' ? 'active' : '';}}">{{ HTML::link('equipo', 'EQUIPO'); }}</li>
				<li class="{{Request::path() == 'contacto' ? 'active' : '';}}">{{ HTML::link('contacto', 'CONTACTO'); }}</li>
				<div class="effect"></div>
			</ul> <!-- /.navbar-nav -->
		</div>	

	</div> <!-- /.container-fluid -->
</nav><!-- /.nav -->