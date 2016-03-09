@extends ('layouts.otras')

@section ('title') 
	Desarrollo
@stop

@section ('content')
	{{ HTML::image('assets/images/desarrollo/cabecera.jpg',
	$alt="imagen 1", $attributes = array('width' => '100%', 'height' => 241,
	'class' => 'img-responsive')) }}
	<div id="biowatch">
		<div class="container">
			<div class="row">
				<div class="col-md-12 title">
					<h2>Modelo Principal de proceso de desarrollo de aplicaciones <br>(BioWatch)</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p class="text-justify">
						En BioSoft desarrollamos aplicaciones bajo un método balanceado <span>“Ágilmente Disciplinado”</span>
					</p>
					<p class="text-justify">
						Para garantizar la calidad de las aplicaciones, empleamos modelos,
						métodos, estándares, prácticas y herramientas de Ingeniería de Software
						reconocidas y utilizadas por las principales empresas de desarrollo de
						software del mundo, así como también nuestro propio método creado por
						especialistas en la materia, denominado <span>BlueWatch</span>.
					</p>
					<p class="text-justify">
						Así es como lo hacemos:
					</p>
				</div>
			</div>
			<div class="row">
				{{ HTML::image('assets/images/desarrollo/metodo.png', 
				$alt="imagen 1", $attributes = array('width' => 1600, 'height' => 1410, 
				'class' => 'img-responsive')) }}
			</div>
		</div>
	</div>
@stop