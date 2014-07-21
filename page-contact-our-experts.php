<?php
/*
Template Name: Contact our experts
*/
?>
<?php get_header(); ?>

<!-- BANNER
    ================================================== -->

  <div id="banner_attributes" class="banner_experts hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center"><h1><?php the_title( ); ?></h1></div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.banner_attributes -->
  <div class="row text-center hidden-sm hidden-md hidden-lg"><h1><?php the_title( ); ?></h1><hr></div>


  <div class="page_strapline text-center">
  <h2>Meet the <strong>R3COGNITION team</strong>.</h2>
 </div>

 <hr>
  
   <!-- PRODUCTS
    ================================================== -->

    <div id="product_callout">

    <div class="container text-center">

        <div class="col-sm-6 text-center">
          <img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/proactive-team.png" alt="Trading activity statistics">
     
        </div>
   

        <div class="col-sm-6 text-left">

               <ul class="fa-ul">
            <li><i class="fa-li fa fa-check-square"></i>Financial experts.</li>
            <li><i class="fa-li fa fa-check-square"></i>Technology experts.</li>
             <li><i class="fa-li fa fa-check-square"></i>Innovation experts.</li>
          </ul>
   
        </div><!-- /.col-lg-6 -->

         
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    </div><!-- /.row -->  

     </div><!-- /.product_callout -->  

    <hr>

    <!-- EXPERTS
    ================================================== -->
  
  <div class="container section_spacer text-center experts">


    <!-- Alan Drew
    ================================================== -->

    <div class="row">

    <div class="col-sm-6">
    <img width-"220" height="240" src="<?php bloginfo('template_directory'); ?>/img/alan.jpg" alt="Alan Drew">
    <h2>Alan Drew</h2>
       
       <?php
                $my_postid = 220;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
          ?>
    </div><!-- /.col-sm-6 -->
  

    <!-- Richard Seaman
    ================================================== -->

 
    <div class="col-sm-6">
    <img width-"220" height="240" src="<?php bloginfo('template_directory'); ?>/img/richard.jpg" alt="Richard Seaman">
    <h2>Richard Seaman</h2>
      
       <?php
                $my_postid = 222;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
          ?>
    </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->

    <hr>
    <br>

    <!-- Mark Cheesman
    ================================================== -->

    <div class="row">
    <div class="col-sm-6">
        <img width-"220" height="240" src="<?php bloginfo('template_directory'); ?>/img/mark.jpg" alt="Mark Chessman">
        <h2>Mark Cheesman</h2>
          
           <?php
                    $my_postid = 224;
                    $content_post = get_post($my_postid);
                    $content = $content_post->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
              ?>
        </div><!-- /.col-sm-6 --> 




     <!-- Alastair Rogers
        ================================================== -->


        <div class="col-sm-6">
        <img width-"220" height="240" src="<?php bloginfo('template_directory'); ?>/img/alastair.jpg" alt="Alastair Rogers">
        <h2>Alastair Rogers</h2>
          
           <?php
                    $my_postid = 226;
                    $content_post = get_post($my_postid);
                    $content = $content_post->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
              ?>
        </div><!-- /.col-sm-6 -->
        </div><!-- /.row -->


  
  </div><!-- /.END of expert section profiles-->




   

 <!-- CALLOUT CONTENT
    ================================================== -->
<hr>
    <div class="callout">
     <div class="container text-center">
        <div class="row section_spacer_callout">
          <div class="col-sm-1"></div>
            <div class="col-sm-10 callout_box">
            <h4>Speak with us</h4>
            <h4>+(44) 020 7953 8686</h4>
            <h4>or</h4>
            <a class="btn btn-mod" href="/about-us/#contact" role="button"><i class="fa fa-envelope-o"></i> Email us</a>
            </div><!-- /.col-xs-6 --> 
            <div class="col-sm-1"></div>
        </div><!-- /.row --> 
    </div><!-- /.container -->
   </div><!-- /.callout -->


<?php get_footer(); ?>