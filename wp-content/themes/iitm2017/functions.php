<?php

require_once('includes/register-slider.php');
require_once('includes/register-quickfact.php');
require_once('includes/register-eventdates.php');
require_once('includes/register-eventreports.php');
require_once('includes/register-partners.php');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



?>