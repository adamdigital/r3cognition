<?php get_header(); ?>

 <!-- Carousel
    ================================================== -->

<div id="owl-demo" class="owl-carousel owl-theme hidden-xs">
 
  <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/banners/banner-city-01resize.jpg" alt="R3COGNITION Trade Surveillance and monitoring software">

  <div class="container">
            <div class="carousel-caption">
            
            <?php
                $my_postid = 254;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
             ?>
 
            </div>
          </div>

          </div>

  <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/banners/london-skyline-blur.jpg" alt="R3COGNITION software">

  <div class="container">
            <div class="carousel-caption">
        
          <?php
                $my_postid = 257;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
            ?>

        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Try our free trial
        </button>
             
            </div>
          </div>

  </div>

  </div>
 

     <!-- Carousel MOBILE
    ================================================== -->

    <!-- BANNER
    ================================================== -->

    <div id="banner_attributes_homepage" class="hidden-sm hidden-md hidden-lg">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center"> 
              <?php
                $my_postid = 254;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
             ?></div>
        </div>
      </div><!-- /.container -->
    </div><!-- /.banner_attributes -->

    <hr class="hidden-sm hidden-md hidden-lg">

    <br>

    <!-- PRODUCTS
    ================================================== -->

    <div class="container section_spacer text-center">

      <div class="row">
      <div class="col-sm-4">
        <div class="productBox_homepage_mod">
          <a href="/market-abuse/"><img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/market-abuse.png" alt="Market abuse"></a>
          <a href="/market-abuse/"><h2>Market Abuse</h2></a>
          <p>We alert our clients and help them to mitigate the risk of market abuse behaviour.</p>
          <br>
          <br>
          <br>
        </div>
            
        </div><!-- /.col-lg-4 -->
     
        <div class="col-sm-4">
        <div class="productBox_homepage_mod">
           <a href="/trade-surveillance-system/"><img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/trade-surveillance.png" alt="Trade surveillance"></a>
          <a href="/trade-surveillance-system/"><h2>Trade Surveillance System</h2></a>
          <p>Our product allows our clients to cost effectively monitor and identify abusive trades.</p>
          <br>
        </div>
         
        </div><!-- /.col-lg-4 -->

        <div class="col-sm-4">
        <div class="productBox_homepage_mod">
          <a href="/trading-activity-statistics/"><img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/trading-activity-stats.png" alt="Trading activity statistics"></a>
          <a href="/trading-activity-statistics/"><h2>Trading Activity Statistics</h2></a>
          <p>We provide our clients with a daily / weekly / monthly report of trading activity, grouped by: traders, accounts and instruments.</p>
          <br>
          </div>
          
        </div><!-- /.col-lg-4 -->

      </div><!-- /.row -->

    </div><!-- /.row -->  

   <hr>

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

          <img src="<?php bloginfo('template_directory'); ?>/img/camera-security.jpg" width="392" height="390" class="img-circle" alt="Security camera">

      </div><!-- /.col-sm-6 -->

      </div><!-- /.row -->

    </div><!-- /.container -->  

    </div><!-- benefits_banner -->

    <hr>

    <!-- PROCESS
    ================================================== -->

    <div id="process_banner" class="container text-center">

      <div class="row text-center">

        <div class="row text-center"><div class="container"><div class="col-sm-12"><h2>Our process</h2><br><br></div></div></div>

        <div class="col-sm-3">
          <img src="<?php bloginfo('template_directory'); ?>/img/1get_in_touch.png" alt="Get in touch">
        </div>
         <div class="col-sm-3">
          <img src="<?php bloginfo('template_directory'); ?>/img/2arrange_demenstration.png" alt="Arrange a demonstration">
        </div>
        <div class="col-sm-3">
          <img src="<?php bloginfo('template_directory'); ?>/img/3book.png" alt="Book a consultation to define your needs">
        </div>
        <div class="col-sm-3">
          <img src="<?php bloginfo('template_directory'); ?>/img/4see-results.png" alt="See the results">
        </div>
        
      </div><!-- /.row -->

      <div class="row text-center">
          <br>
          <h4 class="callout_border">To get results in 24 hours, <a href="/about-us/#contact"> <strong>start the process</strong></a> <i class="fa fa-envelope-o"></i></h4>
        </div>

    </div><!-- /.container -->


    <!-- STATS BANNER
    ================================================== -->

    <div class="banner_stats hidden-xs">

    <div id="stats_banner" class="container text-center">

      <div class="row">
        <div class="col-sm-4">
          <h2>£662,700</h2>
          <p>Fine for Market Abuse</p>
          <p>Case: <i class="fa fa-external-link"></i> <a href="http://www.fca.org.uk/your-fca/documents/final-notices/2014/mark-stevenson" target="_blank">FCA Final Notice 2014</a></p>
         
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
          <h2>$903,176</h2>
          <p>Fine for Layering</p>
          <p>Case: <i class="fa fa-external-link"></i> <a href="http://www.fca.org.uk/static/documents/final-notices/coscia.pdf" target="_blank">FCA Michael Coscia</a></p>
     
        </div><!-- /.col-lg-4 -->
        <div class="col-sm-4">
          <h2>$130,000</h2>
          <p>Fine for Wash Trade</p>
          <p>Case: <i class="fa fa-external-link"></i> <a href="<?php bloginfo('template_directory'); ?>/docs/bcc-nda-gsa-capital.pdf" target="_blank">Exchange Disciplinary &amp; Access Denial Actions</a></p>
         
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    </div><!-- /.container --> 
    </div><!-- /.banner -->

<?php get_footer(); ?>