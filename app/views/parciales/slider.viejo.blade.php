<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      {{ HTML::image('assets/images/slider/img1.jpg', $alt="imagen 1", $attributes = array()) }}
      <div class="carousel-caption">
        <h3>Titulo 1</h3>
        <p>explicación 1</p>
      </div>
    </div><!-- end item -->
    <div class="item">
      {{ HTML::image('assets/images/slider/img2.jpg', $alt="imagen 2", $attributes = array()) }}
      <div class="carousel-caption">
        <h3>Titulo 2</h3>
        <p>explicación 2</p>
      </div>
    </div><!-- end item -->
    <div class="item">
      {{ HTML::image('assets/images/slider/img3.jpg', $alt="imagen 2", $attributes = array()) }}
      <div class="carousel-caption">
        <h3>Titulo 3</h3>
        <p>explicación 3</p>
      </div>
    </div><!-- end item -->
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>