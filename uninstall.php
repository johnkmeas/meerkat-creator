<?php


// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
 


global $wpdb;

$posts_table = $wpdb->posts;

$query = "
  DELETE FROM wp_posts 
  WHERE post_type = 'meerkat_projects';
";

$wpdb->query($query);


