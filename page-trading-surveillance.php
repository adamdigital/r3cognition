<?php
/*
Template Name: Trading surveillance
*/
?>
<?php get_header(); ?>

<!-- BANNER
    ================================================== -->

  <div id="banner_attributes" class="banner_trade_surveillance hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center"><h1><?php the_title( ); ?></h1></div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.banner_attributes -->

  <div class="row text-center hidden-sm hidden-md hidden-lg"><h1><?php the_title( ); ?></h1><hr></div>

  <div class="page_strapline text-center">
  <h2><strong>R3COGNITION WEB</strong> – Our industry leading Trade Surveillance System.</h2>
  </div>

  <hr>

    <!-- PRODUCTS
    ================================================== -->

    <div id="product_callout">

    <div class="container text-center">

      <div class="row">
        <div class="col-sm-6">
           <img width-"130" height="130" src="<?php bloginfo('template_directory'); ?>/img/trade-surveillance.png" alt="Trade surveillance">
          <h2></h2>
        </div><!-- /.col-lg-4 -->

        <div class="col-sm-6 text-left product_callout_list">

          <ul class="fa-ul">
            <li><i class="fa-li fa fa-check-square"></i>Reduce the burden of your monitoring.</li>
            <li><i class="fa-li fa fa-check-square"></i>Mitigate your regulatory risk.</li>
            <li><i class="fa-li fa fa-check-square"></i>Easy to use trade surveillance system.</li>
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
            
            <div class="col-sm-4 side_quote_style hidden-xs"><h2><i class="fa fa-quote-left fa-1x pull-left fa-border"></i><br><br>Trader fined<br> <strong>$130,000</strong> for wash trade in 2014.</h2><h4><i class="fa fa-quote-right fa-2x pull-right fa-border"></i></h4>
           
            </div><br>
            
            <div class="col-sm-8">
            <h4>R3COGNITION WEB</h4>
         <?php
                $my_postid = 239;
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
          ?>

           </div><!-- /.col-xs-12 -->
        </div><!-- /.row --> 
    </div><!-- /.container -->

    </article>

    <hr>

    <!-- BENIFITS
    ================================================== -->


    <div id="benefits_banner">

    <div class="container">

      <div class="row">

        <div class="col-sm-7">

        <h2>Benefits from using the <strong>R3COGNITION WEB</strong> system</h2>

        <ul class="fa-ul">
          <li><i class="fa-li fa fa-check-square"></i><strong> Proactively detect</strong> potentially abusive trader behaviour patterns and take remedial action.</li>
          <li><i class="fa-li fa fa-check-square"></i><strong>Exchange-based rules</strong> identify and report inappropriate trades by exception.</li>
          <li><i class="fa-li fa fa-check-square"></i><strong>Secure SaaS delivery model</strong> reduces time and cost of deployment and operation.</li>
          <li><i class="fa-li fa fa-check-square"></i><strong>Avoid potential financial loss</strong> and reputational damage.</li>
        </ul>

        </div><!-- /.col-sm-6 -->


        <div class="col-sm-5 hidden-xs">

          <img src="<?php bloginfo('template_directory'); ?>/img/camera-security.jpg" width="392" height="390" class="img-circle" alt="Security camera">

      </div><!-- /.col-sm-6 -->

      </div><!-- /.row -->

    </div><!-- /.container -->  

    </div><!-- benefits_banner -->

    <hr>

    <!-- Additional content
    ================================================== -->

    <div class="container">

      <div class="row section_spacer">
        <div class="col-sm-2"><i class="fa fa-cogs fa-fw fa-5x"></i></div>
        <div class="col-sm-10">
          <p>Additionally to <strong>R3COGNITION WEB</strong>, we provide our clients the ability to adapt the system to meet their business needs.
          Using our advanced filtering system, our clients can create their own, unique surveillance tool.
          With this, alongside the bespoke development service, we deliver to them an up-to-date relevant surveillance system.</p>
        </div>

      </div>

    </div>


    <!-- CALLOUT CONTENT
    ================================================== -->
<hr>
    <div class="callout">
     <div class="container text-center">
        <div class="row section_spacer_callout">
          <div class="col-sm-1"></div>
            <div class="col-sm-10 callout_box">
            <h4>Find out more about R3COGNITION WEB</h4>
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