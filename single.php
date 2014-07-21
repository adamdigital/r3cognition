<?php
// Gives greater flexibliy adding a second single.php (or more)

$post = $wp_query->post;
if ( in_category('16') ) {
include(TEMPLATEPATH . '/single-media.php');
}
elseif ( in_category('17') ) 
{
include(TEMPLATEPATH . '/single-experts.php');
} else {
include(TEMPLATEPATH . '/single-default.php');
}
?>