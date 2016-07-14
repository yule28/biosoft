<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href='assets/images/layout/icon.png' rel='shortcut icon' type='image/png'>
	<title>@yield('title')</title>
	
    
	{{ HTML::style('assets/stylesheets/bootstrap/bootstrap.css')}}
   {{--  {{ HTML::style('assets/stylesheets/styles.css')}} --}}
    {{-- {{ HTML::style('assets/stylesheets/new-styles.css')}} --}}
    {{HTML::style('assets/stylesheets/styles-menu.css')}} 
	{{ HTML::style('assets/stylesheets/fraction/fractionslider.css')}}
    <link rel="stylesheet" href="assets/pgwslider/pgwslider.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="assets/pgwslider/pgwslider.js"></script>
	{{ HTML::script('assets/javascripts/bootstrap.js')}}
<!--	{{ HTML::script('assets/javascripts/jquery.fractionslider.min.js')}}-->
	<!--{{ HTML::script('assets/javascripts/inicio.js')}}-->
</head>
<body>
	<header>
		<div class="wrap-menu">
			<?php echo View::make('parciales.menu-nuevo') ?>
		</div>
		<?php echo View::make('parciales.slider') ?>
	</header>
	<div class="wrap-container">
			@yield('content')
	</div>
	<footer>
		<div class="container">
			<?php echo View::make('parciales.footer') ?>
		</div>
	</footer>
</body>
<script>
    $(document).ready(function() {
        $('.pgwSlider').pgwSlider({
            transitionEffect: 'sliding',
            displayList: false,
            adaptiveHeight: false,
            maxHeight: 400,
            transitionDuration: 1000,
            intervalDuration: 5000
        });
    });
</script>
</html>