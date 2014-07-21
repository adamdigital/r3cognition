<hr>
<div class="footer">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
		R3COGNITION on
                <a href="https://www.linkedin.com/company/r3cognition" rel="publisher" target="_blank"></i>| Linked <i class="fa fa-linkedin"></i></a>
            		<a href="https://plus.google.com/101374863616996375602" rel="publisher" target="_blank">|  Google+</a>
            		<a href="https://twitter.com/R3COGNITION" rel="publisher" target="_blank">|  Twitter</a>
            </div>
        </div>
    </div>

        <div class="container text-center">
            <div class="row">
                <footer>
                    <div class="row hidden-sm hidden-md hidden-lg">
                    <?php
                    wp_nav_menu( array(
                        'menu'              => 'footer',
                        'theme_location'    => 'footer',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                    </div>
                    <p>&copy; <?php echo date('Y'); ?> R3D Systems Ltd &middot; <a href="#"><i class="fa fa-arrow-circle-o-up"></i> Back to top</a></p>
                </footer>
            </div><!-- /.row -->
        </div><!-- /.container -->

 </div><!-- /.footer -->

 <div class="free_trial_box hidden-xs">
    <!-- Button trigger modal -->
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
     FREE TRIAL <BR>AVAILABLE NOW
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>

      <!-- MODAL BODY
        ================================================== -->

      <div class="modal-body">
        

                  <div class="col-sm-12">
                    <div class="row text-center free_trial_banner"><h1>Contact our team to discuss your needs and to arrange a comprehensive, no obligation, free trial of our system.</h1>
                  </div>
                 
                      <hr>

                           

                      <div class="text-center row">

                  <p>Email us at <a href="mailto:info@r3cognition.co.uk">info@r3cognition.co.uk</a> or write to us via the form below. <br>We will get back to you right away.</p>

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

      </div><!-- /.MODAL BODY -->

      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

    </body>
</html>