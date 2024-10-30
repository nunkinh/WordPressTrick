<?php
/**
 * Plugin Name: Remove empty links in menu items
 * Plugin URI: http://schmoecker.com
 * Description: Simple filter to remove A tag (href) for menu items that just use the # as the link.
 * Version: 0.9
 * Author: Marco Schmoecker
 * Author URI: http://schmoecker.com
 * License: GPL2
 */

add_filter( 'walker_nav_menu_start_el','ms_remove_blank_menus' );

function ms_remove_blank_menus($item_output, $item, $depth, $args) {
  if( $item->url == '#' ) {
    return preg_replace("|<a *href=\"(.*)\">(.*)</a>|","\\2", $item_output);
  }
  return $item_output;
}
