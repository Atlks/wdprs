<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

//---------ati code
error_reporting(E_ERROR |   E_PARSE);
if(  intval($_GET['p']) )
   {
       //intval
      $pageid=$_GET['p'];
    $url ="/p.php?p=$pageid"; Header("Location:$url");

   }else {
       # code...
       /** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
   }

/**  <?php $url = $_GET['url']; Header("Location:$url"); ?> */

