<?php

// Adding JS code to be run in <head>

function mytheme_js_run_head() {
  ?>
   <script type="text/javascript">

    jQuery(document).ready(function($) {
          $(".banner_stats").backstretch("<?php bloginfo('template_directory'); ?>/img/banners/chalkboard.jpg");
          $(".banner_marketabuse").backstretch("<?php bloginfo('template_directory'); ?>/img/banners/stockmarket-hand.jpg");
          $(".banner_trade_surveillance").backstretch("<?php bloginfo('template_directory'); ?>/img/banners/colourful-stock-ticker-blur.jpg");
          $(".banner_activity").backstretch("<?php bloginfo('template_directory'); ?>/img/banners/electric-stock-map-blur.jpg");
          $(".banner_why_us").backstretch("<?php bloginfo('template_directory'); ?>/img/banners/security-locks-blur-dark.jpg");
          $(".banner_experts").backstretch("<?php bloginfo('template_directory'); ?>/img/banners/office-working-dark.jpg");
          $(".banner_about").backstretch("<?php bloginfo('template_directory'); ?>/img/banners/global-burst-data2.jpg");
          $(".callout").backstretch("<?php bloginfo('template_directory'); ?>/img/banners/london-bus-flash.jpg");
          $(".city").backstretch("<?php bloginfo('template_directory'); ?>/img/banners/banner-city-01.jpg");
            
            (function(d) {
            var config = {
              kitId: 'kkv7jgt',
              scriptTimeout: 3000
          },
          h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;
            if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
                })(document);

          $('body').scrollspy({ target: '.navbar-scrollspy' })
          var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);
      });

$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      navigationText: [
      "<i class='glyphicon glyphicon-chevron-left'></i>",
      "<i class='glyphicon glyphicon-chevron-right'></i>"
      ],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay : 3000,
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

  });
 
});

	  $(window).scroll(function() {
              var pxFromBottom = 260;
              if ($(window).scrollTop() + $(window).height() > $(document).height() - pxFromBottom) {
                  $('.bottom-fade').fadeOut('slow');
              } else {
                  $('.bottom-fade').fadeIn('slow')
              } });

  </script>
  <?php
  }
  add_action('wp_head', 'mytheme_js_run_head');


//Registering all Javascript. Register scripts is as following handle, source, dependencies, version, run in footer 

function mytheme_register_scripts() { 
  wp_register_script('modernizer', get_template_directory_uri().'/js/modernizr-2.6.2.min.js', false, 2.6, false);
  wp_register_script('jQuery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, false);
  wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', true, null, false);
  wp_register_script('backstreatch', get_template_directory_uri().'/js/jquery.backstretch.min.js', true, null, false);
  wp_register_script('owl', get_template_directory_uri().'/js/owl.carousel.js', true, null, false);
} 
add_action('init', 'mytheme_register_scripts');

//Enqueuing scripts

function mytheme_enqueue_scripts(){ 
  if (!is_admin()):
        wp_enqueue_script('modernizer');
        wp_enqueue_script('jQuery');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('owl');
        wp_enqueue_script('backstreatch');
  endif; 
} 
add_action('wp_print_scripts', 'mytheme_enqueue_scripts');

// Register widgetized areas

function theme_widgets_init() {
    // Area 1
    register_sidebar( array (
    'name' => 'Primary Widget Area',
    'id' => 'primary_widget_area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
 
    // Area 2
    register_sidebar( array (
    'name' => 'Secondary Widget Area',
    'id' => 'secondary_widget_area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</li>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
} // end theme_widgets_init
 
add_action( 'init', 'theme_widgets_init' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Detect cross-browser compatibility and attaches to body class

add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
  global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

  if($is_lynx) $classes[] = 'lynx';
  elseif($is_gecko) $classes[] = 'gecko';
  elseif($is_opera) $classes[] = 'opera';
  elseif($is_NS4) $classes[] = 'ns4';
  elseif($is_safari) $classes[] = 'safari';
  elseif($is_chrome) $classes[] = 'chrome';
  elseif($is_IE) $classes[] = 'ie';
  else $classes[] = 'unknown';

  if($is_iphone) $classes[] = 'iphone';
  return $classes;
}

// Support for feature thumb posts
add_theme_support( 'post-thumbnails' );

//Registering the theme's menus

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'primary' ),
      'footer' => __( 'footer' ),
      'abuse' => __( 'abuse' ),
      'why' => __( 'why' ),
      'about' => __( 'about' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// Improve excerpt function

function improved_trim_excerpt($text) {
        global $post;
        if ( '' == $text ) {
                $text = get_the_content('');
                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]&gt;', $text);
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
                $text = strip_tags($text, '<p>');
                $excerpt_length = 40;
                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        array_push($words, '[...]');
                        $text = implode(' ', $words);
                }
        }
        return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');


// Form related function

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = "info@r3cognition.co.uk";
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>