<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header>
            <a id="home"></a>
            <h2>Keita Igarashi</h2>				
                <nav>
                    <div class="header-right">
						<a href="#home">Home</a>
                        <a href="#works">Works</a>
                        <a href="#about">About</a>						
                        <a href="#contact">Get in Touch</a>
                    </div>    
                    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,800' rel='stylesheet' type='text/css'>            
                </nav>
			<!-- #ハンバーガーメニュー -->			
		</header><!-- #masthead -->

