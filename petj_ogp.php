<?php
/*
Plugin Name: PETJ_OGM
Plugin URI:  https://github.com/asathoor/ogm
Description: OGP developed by Facebook ads a tile to a SoMe link. The plugin was developed for the research WordPress project.
Version:     1.0
Author:      Per Thykjaer Jensen
Author URI:  https://github.com/asathoor/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: multimusen_dk
Domain Path: /languages
*/

function petj_ogp(){
  ?>

  <!-- petj: the open graph map plugin -->
  <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo get_bloginfo('url'); ?>">
  <meta property="og:description" content="<?php echo get_bloginfo('description');  ?>">
  <?php
  // a path to whatever featured image you have
  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

?>
<meta property="og:image" content="<?php the_post_thumbnail_url() ?>">
<?php    

    }
  else {
    // path to an image ...
    $petj_img = "http://multimusen.dk/wp-content/uploads/multimusen-100x89.png";
  echo '<meta property="og:image" content="'. $petj_img . '" />';
  } // .else
} // .function

// fire off the function via enqueue
add_action('wp_enqueue_scripts', 'petj_ogp');

?>
