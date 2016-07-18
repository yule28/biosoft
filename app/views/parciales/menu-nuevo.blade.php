<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class= "top-cabecera">
      <div class="navbar-header">
        <div class="logo-biosoft">
          {{ HTML::image('assets/images/layout/logo_headernew.png',
                    $alt="Biosof c.a", $attributes = array('width' => 212, 'height' => 80,
                    'class' => 'img-responsive')) }}
        </div>
          
      </div> <!-- ./navbar-header -->
      <div class="telefonos">
        <div class="telelocal">
          <p>Telf: (+58) 274-7892669</p>
        </div>
        <div class="email">
          <p>atencion@biosoftca.com</p>
        </div>
      </div>
      <div class= "redes">
       
        <div class="correo">
            <!--correo-->
          <a href="contacto"> {{ HTML::image('assets/images/contacto/email.png', $alt="imagen 1", $attributes = array('width' => 30, 'height' => 30, 'class' => 'img-responsive')) }}
          </a>
        </div>
        <div class="instagram">
        <!--instagram-->
          <a href="https://www.instagram.com/biosoftca/" target="_blank"> {{ HTML::image('assets/images/contacto/link.png', $alt="imagen 1", $attributes = array('width' => 30, 'height' => 30, 'class' => 'img-responsive')) }}
          </a>
        </div>

        <div class="twitter">
        <!--twitter-->
          <a href="https://twitter.com/biosoftca" target="_blank"> {{ HTML::image('assets/images/contacto/twitter.png', $alt="imagen 1", $attributes = array('width' => 30, 'height' => 30, 'class' => 'img-responsive')) }}
          </a>
        </div>
       <div class="facebook"> 
         <a href="https://www.facebook.com/Biosoftca-1622725348051680/" target="_blank">  
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
          </a>
      </div> 
      </div>
     
    </div> 

  </div> <!-- /.container-fluid -->

  <div class="collapse navbar-collapse" id="bs-menu">
    <ul class="ph-line-nav nav navbar-nav">
      <li class="{{Request::path() == '/' ? 'active' : '';}}">{{ HTML::link('/', 'INICIO'); }}</li>
      <li class="{{Request::path() == 'sobrebio' ? 'active' : '';}}">{{ HTML::link('sobrebio', 'SOBRE BIOSOFT'); }}</li>
      <li class="{{Request::path() == 'equipo' ? 'active' : '';}}">{{ HTML::link('equipo', 'EQUIPO'); }}</li>

      <li class="{{Request::path() == 'metodos' ? 'active' : '';}}">{{ HTML::link('metodos', 'MÉTODOS'); }}</li>
      <li class="{{Request::path() == 'consultoría' ? 'active' : '';}}">{{ HTML::link('consultoría', 'CONSULTORÍA'); }}</li>
      <li class="{{Request::path() == 'capacitación' ? 'active' : '';}}">{{ HTML::link('capacitación', 'CAPACITACIÓN'); }}</li>
      <li class="{{Request::path() == 'desarrollo' ? 'active' : '';}}">{{ HTML::link('desarrollo', 'DESARROLLO'); }}</li>
      <li class="{{Request::path() == 'portafolio' ? 'active' : '';}}">{{ HTML::link('portafolio', 'PORTAFOLIO'); }}</li>
      <li class="{{Request::path() == 'contacto' ? 'active' : '';}}">{{ HTML::link('contacto', 'CONTACTO'); }}</li>
      <div class="effect"></div>
      </ul> <!-- /.navbar-nav -->
  </div> 
  
</nav><!-- /.nav -->