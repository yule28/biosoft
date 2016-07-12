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
    <link rel="stylesheet" type="text/css" href="assets/collageplus/support/examples.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/collageplus/css/transitions.css" media="all" />

    <!--[if lt IE 9]>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <![endif]-->
    <!--[if (gte IE 9) | (!IE)]><!-->
        <!--<![endif]-->

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="assets/collageplus/jquery.collagePlus.js"></script>
    <script src="assets/collageplus/extras/jquery.removeWhitespace.js"></script>
    <script src="assets/collageplus/extras/jquery.collageCaption.js"></script>
  
    <script type="text/javascript">

    // All images need to be loaded for this plugin to work so
    // we end up waiting for the whole window to load in this example
    $(window).load(function () {
        $(document).ready(function(){
            collage();
            $('.Collage').collageCaption();
        });
    });


    // Here we apply the actual CollagePlus plugin
    function collage() {
        $('.Collage').removeWhitespace().collagePlus(
            {
                'fadeSpeed'     : 2000,
                'targetHeight'  : 200
            }
        );
    };

    // This is just for the case that the browser window is resized
    var resizeTimer = null;
    $(window).bind('resize', function() {
        // hide all the images until we resize them
        $('.Collage .Image_Wrapper').css("opacity", 0);
        // set a timer to re-apply the plugin
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
    });

    </script>
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
/*      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });*/
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    });
</script>
</html>