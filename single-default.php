<?php get_header(); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img data-src="http://placehold.it/900x500" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#myCarousel" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#myCarousel" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#myCarousel" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


    <!-- BODY CONTENT
    ================================================== -->
    
    <article>

    <div class="container section_spacer">
        <div class="row">
        
            <div class="col-xs-2"></div>
            <div class="col-xs-8">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2 class="text-center"><?php the_title( ); ?></h2>

            <p><?php the_content(); ?></p>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
           </div>
           <div class="col-xs-2"></div>

        </div><!-- /.row --> 
    </div><!-- /.container -->

    </article>

     <!-- CALLOUT CONTENT
    ================================================== -->

    <hr>

    <div class="container section_spacer text-center">
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4"><a class="btn btn-default" href="/about-us/#press-area" role="button">Return to press area</a></div>
        <div class="col-xs-4"></div>
      </div><!-- /.row --> 
    </div><!-- /.container -->

    <div class="callout">

     <div class="container section_spacer text-center">
        <div class="row">
            <div class="center-block centering_box">
            <h3>Find out more about our trading surveillance systems
            speak with us 0XXXXXXXXXX</h3>
            <button type="button" class="btn btn-default">Default button</button>
            </div><!-- /.col-xs-6 --> 
        </div><!-- /.row --> 
    </div><!-- /.container -->

    </div><!-- /.callout -->

<?php get_footer(); ?>