<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
            <link rel="stylesheet" href="./style.css">
            <link rel="stylesheet" href="./reset.css">
            <title>Portofolio Site</title>
            <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>
    <body>
        <main>
        <div class="about1">
            <h2>ABOUT ME</h2>
            <ul>   
                    <li>Live:東京都</li>
                    <li>Age:29</li>
                    <li>Job:IT関係</li>
                    <li>エンジニア職への転職を考えており、プログラミングを日々勉強中。</li>
                    <li>Hobby:旅行、スポーツ観戦、Runnning、飲酒(Beer、Whisky)</li>                
            </ul>
        </div> 
        <div class="about2">    
            <h2>HOW I CAN HELP</h2>
            <div class="design">
                <i class="fas fa-laptop fa-2x"></i>
                <h3>WEB DESIGN</h3>
                <p>From simple wireframes through to </br>
                    creating a modern fresh website design </br>
                    reflecting your brand.</p>
            </div>
            <div class="development">            
                <i class="fas fa-edit fa-2x"></i>
                <h3>WEB DEVELOPMENT</h3>
                <p>From a small static site to a new blog theme or</br>
                WordPress site, I can bring your site design to life!</br>
                All sites are responsive and built with SEO in mind.</p>
            </div>    
            <div class="graphic">            
                <i class="far fa-image fa-2x"></i>
                <h3>GRAPHIC DESIGN</h3>
                <p>Branding,business cards and matching stationery,</br>
                 everthing you need and more to go with your</br>
                brand new website.</p>
            </div> 
        </div>
        </main>
    </body>    
</html>



<?php
get_footer();
?>