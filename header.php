<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package porfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" href="<?= get_template_directory_uri().'/images/favicon.ico' ?>">
  

  <?php 
    wp_head(); 
    if(is_page('pick-up'))
      echo '<script src="https://www.google.com/recaptcha/api.js" async defer></script>';
  ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-8N499TKGW3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-8N499TKGW3');
  </script>
</head>
<body>
<div class="d-flex flex-column w-100 h-100">
<header>
  <nav id="navbar-menu" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="d-flex justify-content-between flex-row flex-nowrap container-fluid">
        <ul class="navbar-nav flex-row ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= home_url() ?>" tabindex="-1" aria-disabled="true">
                    HOME
                </a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" 
                href="<?= esc_url(site_url('shop')); ?>" tabindex="-1" aria-disabled="true">
                    SHOP
                </a>
            </li>
        </ul>   
        
        <form action="" class="d-none d-sm-block w-100 px-2">
            <input type="text" placeholder="Search <?= get_bloginfo('name') ?>..." class="rounded-pill w-100 form-control">
        </form>

        <ul class="navbar-nav flex-row ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
                    CART
                </a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" 
                href="<?php echo site_url('/pickup/'); ?>" tabindex="-1" aria-disabled="true">
                ACCOUNT
                </a>
            </li>
        </ul>
    </div>
    </nav>
    <form action="" class="d-block d-sm-none w-100 p-2">
        <input type="text" placeholder="Search <?= get_bloginfo('name') ?>..." class="w-100 rounded-pill form-control">
    </form>
</header>
