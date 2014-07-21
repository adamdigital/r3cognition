<?php
/*
Template Name: Market abuse
*/
?>
<?php get_header(); ?>

   

<!-- BANNER
    ================================================== -->

  <div id="banner_attributes" class="banner_marketabuse hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center"><h1><?php the_title( ); ?></h1></div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.banner_attributes -->

   <div class="row text-center hidden-sm hidden-md hidden-lg"><h1><?php the_title( ); ?></h1><hr></div>

  <div class="page_strapline text-center">
  <h2>Trusted and robust <strong>Market Abuse</strong> systems.</h2>
</div>

<hr>

<div class="container">
  <div class="row">
    <div class="col-sm-4 hidden-xs">
      <div data-spy="affix" data-offset-top="420">
       <br>
      <?php
            wp_nav_menu( array(
                'menu'              => 'abuse',
                'theme_location'    => 'abuse',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-scrollspy',
                'menu_class'        => 'nav nav-pills nav-stacked bottom-fade',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>

             <br>
             <br>

                 <!-- CASE STUDY
          ================================================== -->
             
            <div class="col-sm-10 side_quote_style hidden-xs bottom-fade">
              <h2><i class="fa fa-quote-left fa-1x pull-left fa-border"></i><br><br><br> 
                <strong>$903,176</strong> Fine for Layering</h2>
                <p>Case: <i class="fa fa-external-link"></i> <a href="http://www.fca.org.uk/static/documents/final-notices/coscia.pdf" target="_blank">FCA Michael Coscia</a></p>
                <h4><i class="fa fa-quote-right fa-2x pull-right fa-border"></i></h4>
           
            </div><br>

      </div>
    </div>

    <div class="col-sm-8">


   <!-- LAYERING AND SPOOFING
          ================================================== -->

    <div id="layering-spoofing"></div>

    <h2>Layering and spoofing</h2>
    <hr>

    <div class="row section_spacer text-center">

      <div class="col-sm-4">
      <img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/market-abuse.png" alt="Market abuse">
      </div>

       <div class="col-sm-8 text-left">
         <ul class="fa-ul">
            <li><i class="fa-li fa fa-check-square"></i><h4>Flags up any suspicious activity.</h4></li>
            <li><i class="fa-li fa fa-check-square"></i><h4>Investigate trading behaviour.</h4></li>
            <li><i class="fa-li fa fa-check-square"></i><h4>Take remedial action.</h4></li>
          </ul>
       </div><!-- /.col-lg-6 -->

    </div><!-- /.row (section callout END) -->

    <hr>

        <div class="row">

         <?php
                $my_postid = 198;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
          ?>

        </div><!-- /.row --> 

       

        <br>

        <hr>


          <!-- MARKET ABUSE TOOLS SECTION
          ================================================== -->

        <div id="market-abuse-tools"></div>

        <div class="row">

          <h2>Market abuse tools</h2>
          <hr>

            <div class="row section_spacer text-center">

              <div class="col-sm-4">
              <img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/identify-market-abuse.png" alt="Market abuse">
              </div>

               <div class="col-sm-8 text-left">
                 <ul class="fa-ul">
                    <li><i class="fa-li fa fa-check-square"></i><h4>Numerous market abuse models.</h4></li>
                    <li><i class="fa-li fa fa-check-square"></i><h4>Identify market abuse behaviour.</h4></li>
                    <li><i class="fa-li fa fa-check-square"></i><h4>Mitigate risk.</h4></li>
                  </ul>
               </div><!-- /.col-lg-6 -->

            </div><!-- /.row (section callout END) -->

            <hr>
            
          </div><!-- /.row -->


          <!-- MARKET ABUSE TOOLS
          ================================================== -->

          <p>We alert our clients and help them to mitigate the risk of market abuse behaviour. We allow them to proactively monitor their internal trading activity. Our system will generate reports that will highlight suspicious behaviour, such as :</p>

          <ul class="fa-ul">
          <li><i class="fa-li fa fa-check-square"></i>Front running</li>
          <li><i class="fa-li fa fa-check-square"></i>Aggregated wash trade</li>
          <li><i class="fa-li fa fa-check-square"></i>Parking</li>
          <li><i class="fa-li fa fa-check-square"></i>Trading ahead of the close</li>
          <li><i class="fa-li fa fa-check-square"></i>Abusive squeezes</li>
        </ul>
        <br>
        <p>Our system is fully customisable to enable our clients to filter and adjust their parameters to fit with their compliance requirements.</p>

        </div><!-- /.row --> 

    </div><!-- /.row for content column --> 

  </div><!-- /.row --> 
</div><!-- /.container for page -->

 <!-- CALLOUT CONTENT
    ================================================== -->
<hr>
    <div class="callout">
     <div class="container text-center">
        <div class="row section_spacer_callout">
          <div class="col-sm-1"></div>
            <div class="col-sm-10 callout_box">
            <h4>Find out more about our <strong>Market Abuse</strong> products</h4>
            <h4>Speak with us</h4>
            <h4>+(44) 020 7953 8686</h4>
            <h4>or</h4>
            <a class="btn btn-mod" href="/about-us/#contact" role="button"><i class="fa fa-envelope-o"></i> Email us</a>
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