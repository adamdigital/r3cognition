<?php
/*
Template Name: Why us
*/
?>
<?php get_header(); ?>

<!-- BANNER
    ================================================== -->

  <div id="banner_attributes" class="banner_why_us hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center"><h1><?php the_title( ); ?></h1></div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.banner_attributes -->
  <div class="row text-center hidden-sm hidden-md hidden-lg"><h1><?php the_title( ); ?></h1><hr></div>

<div class="page_strapline text-center">
  <h2>Professional services and <strong>high level</strong> of security.</h2>
</div>

<hr>

<div class="container">
  <div class="row">
    <div class="col-sm-3 hidden-xs">
 
      <div data-spy="affix" data-offset-top="400">
      <br>
      <?php
            wp_nav_menu( array(
                'menu'              => 'why',
                'theme_location'    => 'why',
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
          
           <div id="our-services"></div>

          <h2>Our services</h2>
          <hr>

            <div class="row section_spacer text-center">

              <div class="col-sm-4">
              <img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/constant-improvements.png" alt="Market abuse">
              </div>

               <div class="col-sm-8 text-left">
                 <ul class="fa-ul">
                    <li><i class="fa-li fa fa-check-square"></i><h4>Adaptable system and bespoke development.</h4></li>
                    <li><i class="fa-li fa fa-check-square"></i><h4>Constant improvement and updates.</h4></li>
                    <li><i class="fa-li fa fa-check-square"></i><h4>Proactive and approachable team.</h4></li>
                  </ul>
               </div><!-- /.col-lg-6 -->

            </div><!-- /.row (section callout END) -->

            <hr>


        <div class="row">

        <h4>Bespoke development</h4>

         <?php
                $my_postid = 248;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
          ?>

       
        </div><!-- /.row --> 

      

        <div class="section_spacer text-center"><br></i></div>

        <div class="row section_spacer">

           <div id="security" class="scroll-adjust"></div>

          <h2>Security</h2>
          <hr>

            <div class="row section_spacer text-center">

              <div class="col-sm-4">
              <img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/high-level-security.png" alt="Market abuse">
              </div>

               <div class="col-sm-8 text-left">
                 <ul class="fa-ul">
                    <li><i class="fa-li fa fa-check-square"></i><h4>High level of security.</h4></li>
                    <li><i class="fa-li fa fa-check-square"></i><h4>Dedicated services.</h4></li>
                    <li><i class="fa-li fa fa-check-square"></i><h4>Regular and secure backups.</h4></li>
                  </ul>
               </div><!-- /.col-lg-6 -->

            </div><!-- /.row (section callout END) -->

            <hr>


         <!-- SECURITY
         ================================================== -->


          <div class="row">

          <div class="col-sm-12">

         <p>The security of our clients’ systems and data is our primary concern :</p>

          <ul class="fa-ul">
          <li><i class="fa-li fa fa-check-square"></i>Private dedicated servers for all of our clients</li>
          <li><i class="fa-li fa fa-check-square"></i>Data is backed up to meet our clients retention policy</li>
          <li><i class="fa-li fa fa-check-square"></i>Secure point-to-point access to our systems</li>
          <li><i class="fa-li fa fa-check-square"></i>Regular backups and infrastructure audits</li>
        </ul>
        <br>
        <p>Our system is fully customisable to enable our clients to filter and adjust their parameters to fit with their compliance requirements.</p>

        </div><!-- /.col-sm-12 --> 
        
        </div><!-- /.row --> 

    </div><!-- /.row for content column --> 

  </div><!-- /.row --> 
</div><!-- /.container for page -->


</div>

  <!-- CALLOUT CONTENT
    ================================================== -->
<hr>
    <div class="callout">
     <div class="container text-center">
        <div class="row section_spacer_callout">
          <div class="col-sm-1"></div>
            <div class="col-sm-10 callout_box">
            <h4>Find out more, speak with us</h4>
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