<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href='assets/images/layout/icon.png' rel='shortcut icon' type='image/png'>
	<title>@yield('title')</title>
	<!--Estilos viejos-->
	{{ HTML::style('assets/stylesheets/styles.css')}}
	<!--Estilos pagina nueva-->
	{{ HTML::style('assets/stylesheets/new-styles.css') }}
	<!--Bootstrap-->
	{{ HTML::style('assets/stylesheets/bootstrap/bootstrap.css')}}
	{{ HTML::style('assets/stylesheets/fraction/fractionslider.css')}}
    <!--Slider Ppal-->
    {{ HTML::style('assets/pgwslider/pgwslider.css') }}
    <!--Carrousel-->
    {{ HTML::style('assets/slick/slick.css') }}
    {{ HTML::style('assets/slick/slick-theme.css') }}
        <!--Jquery-->
    {{ HTML::script('http://code.jquery.com/jquery-2.2.0.min.js') }}
    <!--Slider Ppal js-->
    {{ HTML::script('assets/pgwslider/pgwslider.js')}}
    <!--Bootstrap js-->
	{{ HTML::script('assets/javascripts/bootstrap.js')}}
</head>
<body>
	<header>
		<div class="wrap-menu">
			<?php echo View::make('parciales.menu') ?>
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
<!--Carrousel js-->
{{ HTML::script('assets/slick/slick.js') }}
<script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
    });
</script>
</html>