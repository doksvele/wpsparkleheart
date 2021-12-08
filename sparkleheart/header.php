<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparkleheart
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Sparkle Heart</title>
	<style>
	.item-7 {
	  height: 705px;
	  margin-top: 150px;
	  position: relative;
	  background-size: cover;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-image: url("<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_9.jpg");
	}
	.item-7:after {
	  width: 100%;
	  height: 100%;
	  content: "";
	  position: absolute;
	  transform: rotate(-180deg);
	  background: linear-gradient(180deg, rgba(47,72,88,.8) 18.63%, rgba(47,72,88,0) 49.21%);
	}
	.item-7 h3 {
	  z-index: 1;
	  color: white;
	  bottom: 78px;
	  font-weight: 500;
	  position: absolute;
	}
	@media screen and (max-width: 768px) {
	  .item-7 { height: 499px; }
	  .item-7 h3 { bottom: 65px; }
	}
	@media screen and (max-width: 480px) {
	  .item-7 {
	    height: 476px;
	    margin-top: 80px;
	    background-position: 65%;
	  }
	  .item-7 h3 {
	    bottom: 51px;
	    font-size: 18px;
	    line-height: 27px;
	  }
	}
	</style>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
<header>
    <a class="menu1" href="<?php echo esc_url( home_url() ); ?>"><img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.jpg" alt="logo"></a>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'custom-menu-1' ) ); ?>
	<div class="menu2">
        <a href="<?php echo esc_url( home_url() ); ?>"><img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.jpg" alt="logo"></a>
        <button class="dropbtn" onclick="openMenu()">&equiv;</button>
    </div>
    <img class="vector1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector1.png" alt="vector1">
    <div class="modal" id="menu">
        <div class="menu3">
            <a href="<?php echo esc_url( home_url() ); ?>"><img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.jpg" alt="logo"></a>
            <button class="dropbtn" onclick="closeMenu()">&times;</button>
        </div>
        <div class="modal-content"><?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'custom-menu-2' ) ); ?></div>
    </div>
</header>