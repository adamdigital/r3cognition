<?php
/*
Template Name: Trading activity statistics
*/
?>
<?php get_header(); ?>

<!-- BANNER
    ================================================== -->

  <div id="banner_attributes" class="banner_activity hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center"><div class="vcenter"><h1><?php the_title( ); ?></h1></div></div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.banner_attributes -->

  <div class="row text-center hidden-sm hidden-md hidden-lg"><h1><?php the_title( ); ?></h1><hr></div>

  <div class="page_strapline text-center">
  <h2>Get a <strong>complete overview</strong> of trading activities</h2>
 </div>
 
 <hr>

   <!-- PRODUCTS
    ================================================== -->

    <div id="product_callout">

    <div class="container text-center">

      <div class="row">
        <div class="col-sm-5">
          <img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/trading-activity-stats.png" alt="Trading activity statistics">
          <h2></h2>
        </div><!-- /.col-lg-4 -->

        <div class="col-sm-7 text-left product_callout_list">

          <ul class="fa-ul">
            <li><i class="fa-li fa fa-check-square"></i>Previous days traders', instruments' and accounts' statistics overview.</li>
            <li><i class="fa-li fa fa-check-square"></i>Analyse traders' behaviour and patterns.</li>
            <li><i class="fa-li fa fa-check-square"></i>Daily, weekly and monthly report generation.</li>
          </ul>
   
        </div><!-- /.col-lg-8 -->

         
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    </div><!-- /.row -->  

     </div><!-- /.product_callout -->  

    <hr>

    <!-- BODY CONTENT
    ================================================== -->
    
    <article>

    <div class="container section_spacer">
        <div class="row">

            <div class="col-sm-2"></div>
            <div class="col-sm-8">

         <?php
                $my_postid = 244;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
          ?>

           </div><!-- /.col-xs-12 -->
           <div class="col-sm-2"></div>
        </div><!-- /.row --> 
    </div><!-- /.container -->

    </article>

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

<?php get_footer(); ?>