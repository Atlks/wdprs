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




function str_starts_with2022 ($str,$pattern) { if (strpos ($str,$pattern) === 0) return true; else return false; }

//---------ati code
error_reporting(E_ERROR |   E_PARSE);
//var_dump($_SERVER["REQUEST_URI"]);
$urix=$_SERVER["REQUEST_URI"];
$urlObj=parse_url($_SERVER["REQUEST_URI"]);
//var_dump($urlObj);
if( str_starts_with2022 ($_SERVER["REQUEST_URI"],"/idx") )
{
 //   echo "sta with";
 //   echo  substr($urix,4);
    $idx=  substr($urix,4,strlen($urix)-5);
    if(  intval( $idx) )
   {
       //intval
    
    $url ="/p.php?p=$idx"; Header("Location:$url");

   }else {
       # code...
       /** Loads the WordPress Environment and Template */
        require __DIR__ . '/wp-blog-header.php';
   }
}
else {
    # code...
    /** Loads the WordPress Environment and Template */
    require __DIR__ . '/wp-blog-header.php';
}
 
