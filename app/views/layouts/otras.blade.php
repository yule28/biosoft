<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>@yield('title')</title>
	<link href='assets/images/layout/icon.png' rel='shortcut icon' type='image/png'>

	
	{{ HTML::style('assets/stylesheets/bootstrap/bootstrap.css')}}
	{{ HTML::style('assets/stylesheets/bootstrapValidator.min.css')}}
	{{HTML::style('assets/stylesheets/styles-general.css')}} 
    <link rel="stylesheet" href="assets/stylesheets/font-awesome/css/font-awesome.min.css">
    {{HTML::style('assets/stylesheets/styles-menu.css')}} 
    {{HTML::style('assets/stylesheets/styles-footer.css')}} 
	{{-- {{ HTML::style('assets/stylesheets/styles.css') }}
	{{ HTML::style('assets/stylesheets/new-styles.css') }} --}}

	
		<!--Estilos pagina nueva-->
	
	<script src="//code.jquery.com/jquery.js"></script>
	{{ HTML::script('assets/javascripts/bootstrap.js')}}
	{{ HTML::script('assets/javascripts/menu.js')}}
</head>
<body>
	<header>
		<div class="wrap-menu">
<<<<<<< HEAD
			<?php echo View::make('parciales.menu-nuevo') ?>
=======
			<?php //echo View::make('parciales.menu-nuevo') ?>
			<?php echo View::make('parciales.menu') ?>
>>>>>>> refs/remotes/seven07ve/master
		</div>
	</header>
	<div class="wrap-container wrap-otra">
			@yield('content')
	</div>
	<footer>
		<div class="container">
<<<<<<< HEAD
			<?php echo View::make('parciales.footer-nuevo') ?>
=======
			<?php //echo View::make('parciales.footer-nuevo') ?>
			<?php echo View::make('parciales.footer') ?>
>>>>>>> refs/remotes/seven07ve/master
		</div>
	</footer>
</body>
</html>