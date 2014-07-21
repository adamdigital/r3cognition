<?php get_header(); ?>

   <div id="banner_attributes" class="banner_marketabuse">
    <div class="container">
      <div class="row">
        
      </div>
    </div><!-- /.container -->
  </div><!-- /.banner_attributes -->


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


    <hr>

    <div class="container section_spacer text-center">
      <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4"><a class="btn btn-default" href="/about-us/#press-area" role="button"><i class="fa fa-reply"></i> Return to press area</a></div>
        <div class="col-xs-4"></div>
      </div><!-- /.row --> 
    </div><!-- /.container -->

    <!-- CALLOUT CONTENT
    ================================================== -->

    <hr>

    <div class="callout">

     <div class="container section_spacer text-center">
        <div class="row">
          <div class="col-xs-2"></div>
            <div class="col-xs-8">
            <h3>Find out more about R3COGNITION.
            Speak with us <strong>+(44) 020 7953 8686</strong> or</h3>
            <a class="btn btn-mod" href="/about-us/#contact" role="button"><i class="fa fa-envelope-o"></i> Email</a>
            </div><!-- /.col-xs-6 --> 
          <div class="col-xs-2"></div>
        </div><!-- /.row --> 
    </div><!-- /.container -->

    </div><!-- /.callout -->

<?php get_footer(); ?>