<?php


/**
 * Add page slug to body_class() classes if it doesn't exist
 */
function bd_add_body_class($classes) {
  // Add post/page slug
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }
  return $classes;
}
add_filter('body_class', 'bd_add_body_class');