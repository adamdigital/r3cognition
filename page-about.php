<?php
/*
Template Name: About us
*/
?>
<?php get_header(); ?>


<!-- BANNER
    ================================================== -->

  <div id="banner_attributes" class="banner_about hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center"><h1><?php the_title( ); ?></h1></div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.banner_attributes -->
  <div class="row text-center hidden-sm hidden-md hidden-lg"><h1><?php the_title( ); ?></h1><hr></div>

<div class="page_strapline text-center">
  <h2>Trade Surveillance and Monitoring system.</h2>
</div>

<hr>

<div class="container">

  <div class="row">
    <div class="col-sm-3 hidden-xs">
    <br>
      <div data-spy="affix" data-offset-top="400">
      <?php
            wp_nav_menu( array(
                'menu'              => 'about',
                'theme_location'    => 'about',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-scrollspy',
                'menu_class'        => 'nav nav-pills nav-stacked bottom-fade',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
      </div>
    </div>


    <div class="col-sm-9">



    <!-- WHO WE ARE
        ================================================== -->

          <div id="who-we-are"></div>

          <h2>Who we are</h2>
          <hr>

            <div class="row section_spacer text-center">

                <div class="col-sm-4">
                <br>
                <img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/high-level-security.png" alt="Who we are">
                </div>

                 <div class="col-sm-8 text-left">
                   <ul class="fa-ul">
                      <li><i class="fa-li fa fa-check-square"></i><h4>We provide to investment banks, brokers, market makers and proprietary houses.</h4></li>
                      <li><i class="fa-li fa fa-check-square"></i><h4>We develop trade surveillance systems.</h4></li>
                      <li><i class="fa-li fa fa-check-square"></i><h4>Market abuse solutions and bespoke projects to protect your business.</h4></li>
                    </ul>
                 </div><!-- /.col-lg-6 -->

              </div><!-- /.row (section callout END) -->

        <hr>

        <div class="row">

         <?php
                $my_postid = 272;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
          ?>

        </div><!-- /.row --> 

       <!-- BENIFITS
    ================================================== -->


    <div id="benefits_banner">

    <div class="container">

      <div class="row">

        <div class="col-sm-7">

        <h2>Our benefits</h2>

        <ul class="fa-ul">
          <li><i class="fa-li fa fa-check-square"></i><strong> Proactively detect</strong> potentially abusive trader behaviour patterns and take remedial action.</li>
          <li><i class="fa-li fa fa-check-square"></i><strong>Exchange-based rules</strong> identify and report inappropriate trades by exception.</li>
          <li><i class="fa-li fa fa-check-square"></i><strong>Secure SaaS delivery model</strong> reduces time and cost of deployment and operation.</li>
          <li><i class="fa-li fa fa-check-square"></i><strong>Avoid potential financial loss</strong> and reputational damage.</li>
        </ul>

        <p>Find out more about <a href="/why-us/">why</a> you should choose us</p> 

        </div><!-- /.col-sm-6 -->


        <div class="col-sm-5 hidden-xs">

          <img src="<?php bloginfo('template_directory'); ?>/img/camera-security.jpg" width="120" height="120" class="img-circle" alt="Security camera">

      </div><!-- /.col-sm-6 -->

      </div><!-- /.row -->

    </div><!-- /.container -->  

    </div><!-- benefits_banner -->

    <hr>

  
       <br>

    <!-- OUR HISTORY
        ================================================== -->

          <div id="history"></div>
  
          <h2>Our history</h2>
          <hr>

            <div class="row section_spacer text-center">

                <div class="col-sm-4">
                <img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/constant-involvement.png" alt="Market abuse">
                </div>

                 <div class="col-sm-8 text-left">
                   <ul class="fa-ul">
                      <li><i class="fa-li fa fa-check-square"></i><h4>Global coverage.</h4></li>
                      <li><i class="fa-li fa fa-check-square"></i><h4>Constant involvement.</h4></li>
                      <li><i class="fa-li fa fa-check-square"></i><h4>Award winning.</h4></li>
                    </ul>
                 </div><!-- /.col-lg-6 -->

              </div><!-- /.row (section callout END) -->

        <hr>

        <div class="row">

         <?php
                $my_postid = 218;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
          ?>

        </div><!-- /.row --> 
   
        <div id="press-area"></div>


       <br>

       <div class="section_spacer text-center"><img width-"140" height="140" src="<?php bloginfo('template_directory'); ?>/img/plat-awards-logo.jpg" alt="award"></div>


    <!-- PRESS AREA (Will incorporate later)
    ================================================== 

      <div id="press_area" class="row section_spacer">

          <h2>Press area</h2>
          <hr>
          <h3>Releases</h3>
              
              <?php  query_posts('orderby=date&order=DESC&showposts=10&cat=16'); ?>
              <div class="row">
              <?php while (have_posts()) : the_post(); ?>      
              <div class="col-sm-9"><h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4></div>
              <div class="col-sm-3 text-muted text-right"><?php the_date(); ?></div>
              <?php endwhile; ?> 

        <div class="col-sm-12">
	      <h3>Social</h3>

	  		<a href="#">Twitter <i class="fa fa-twitter"></i></a><br>
	  		<a href="#"></i> Linked <i class="fa fa-linkedin"></i></a>
        </div>


        <div class="col-sm-12">
	  	  <h3>Contact the press team</h3>
        <p class="help-block">Example block-level help text here.</p>

        </div><

       </div>
     </div>

     <div id="contact"></div>
     <div class="section_spacer text-center"><br></div>

     <div id="contact"></div>

     -->


     <!-- CONTACT AREA
    ================================================== -->

    <br>
    
    <div class="row section_spacer">
      <div class="col-sm-12">

      <div id="contact"></div>

       <h2>Contact us</h2>
      <hr>
       <p class="help-block">Email us at <a href="mailto:info@r3cognition.co.uk">info@r3cognition.co.uk</a> or write to us via the form below. We will get back to you right away.</p>
        <hr>
       

        <?php
                $my_postid = 282;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
          ?>


    </div>
    </div><!-- /.row --> 
  </div>
  </div>
</div><!-- /.container for page --> 

   <!-- CALLOUT CONTENT
    ================================================== -->
<hr>
    <div class="callout">
     <div class="container text-center">
        <div class="row section_spacer_callout">
          <div class="col-sm-1"></div>
            <div class="col-sm-10 callout_box">
             <h4>"We have developed an effective working relationship with the R3COGNITION team and have found them to be responsive to our needs as clients with a desire to try to develop the product wherever helpful for our business operations."</h4>
            </div><!-- /.col-xs-6 --> 
            <div class="col-sm-1"></div>
        </div><!-- /.row --> 
    </div><!-- /.container -->
   </div><!-- /.callout -->


   <!-- SMOOTH SCROLLING SCRIPT (can't be run on homepage)
    ================================================== -->

    <script type="text/javascript">

    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 150
            }, 1000);
            return true;
          }
        }
      });
    });

      </script>

<?php get_footer(); ?>