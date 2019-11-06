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
    <title>Portofolio Site</title>
    <meta charset="utf-8">
                <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                <script type="text/javascript">
                $(function(){
                    $('a[href^=#]').click(function(){
                        var speed = 700;
                        var href= $(this).attr("href");
                        var target = $(href == "#" || href == "" ? 'html' : href);
                        var position = target.offset().top;
                        $("html, body").animate({scrollTop:position}, speed, "swing");
                        return false;
                    });
                });
                </script>


	<?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.css" />
    <script>
    $(function(){
    $('.js-modal-open').on('click',function(){
        $('.js-modal').fadeIn();
        return false;
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    });
});

</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header>
            <a id="home"></a>
            <h2>Keita Igarashi</h2>				
                    <div class="header-right">
						<a class="a" href="#home">Home</a>
                        <a class="a" href="#works">Works</a>
                        <a class="a" href="#about">About</a>						
                        <a class="a" href="#contact">Get in Touch</a>
                    </div>    
                    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,800' rel='stylesheet' type='text/css'>            
            
		</header><!-- #masthead -->

