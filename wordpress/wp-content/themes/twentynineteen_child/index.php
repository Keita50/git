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
            <title>Portofolio Site</title>
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
    </head>
    <body>
        <main>
            <a id="works"></a>
            <section class="works">
                <h2>Works</h2>            
                <div class="working">
                    <img src="./wp-content/themes/twentynineteen_child/images/work01.jpg" alt="portfolio1">
                    <img src="./wp-content/themes/twentynineteen_child/images/work02.jpg" alt="portfolio2">
                </div>
            </section>
            <a id="about"></a>
            <section class="about">                        
                <div class="about1">                    
                <h2>About Me</h2>
                    <p>東京の多摩市に本拠を置くフロントエンド開発者であり、</br>
                        シンプルさ、美しさを念頭に置いた使いやすいインターフェイスを設計します。</br>
                        </br>
                        デジタル側では、HTML5とCSS3を使用し、</br>
                        静的サイトからWordpress用に作成されたカスタムテーマまで作成できます。</br>
                        </br>
                        すべてのプロジェクトは、SEOを念頭に置いて作成。</br>
                        Googleで検索されるための基盤を築くことができます。</br>
                        デスクトップPCで見た目が良いだけでなく、</br>
                        すべてのタブレットデバイスや携帯電話でも見栄えがよく、</br>
                        完全に反応するサイトを構築しています。</br>
                        </br>
                        あなたのプロジェクトについて議論したい場合や、または単に挨拶したい場合は、</br>
                        是非私にメッセージを送ってください。</p>
                </div> 
                <div class="about2">   
                    <div class="skill">
                    <h2>Skills</h2>
                        <div class="design">
                            <i class="fas fa-laptop fa-2x"></i>
                            <h4>WEB DESIGN</h4>
                            <p>From simple wireframes through to </br>
                                creating a modern fresh website design </br>
                                reflecting your brand.</p>
                        </div>
                        <div class="development">            
                            <i class="fas fa-edit fa-2x"></i>
                            <h4>WEB DEVELOPMENT</h4>
                            <p>From a small static site to a new blog theme or</br>
                            WordPress site, I can bring your site design to life!</br>
                            All sites are responsive and built with SEO in mind.</p>
                        </div>    
                    </div>
                </div>
            </section>
            <a id="contact"></a> 
            <section>
            <form action="<?php echo get_stylesheet_directory_uri(); ?>/page-confirm.php" method="POST">          
                <div class="contact-form">             
                    <h3>Contact form</h3>
                    <p>名前<em>*</em></p>
                        <input name="name" type="text" id="name" required="required" value="<?php echo $_POST['name']; ?>"/>
                    <p>メールアドレス<em>*</em></p>    
                        <input name="email" type="email"  id="email" required="required" value="<?php echo $_POST['email']; ?>"/>
                    <p>お問い合わせ内容（必須)</p>
                        <textarea name="inquiry_content" id="inquiry_content" cols="30" rows="10" ><?php echo $_POST['inquiry_content']; ?></textarea>
                    <p>Password<em>*</em></p>
                        <input type="password" name="password" minlength="8" value="<?php echo $_POST['password']; ?>"/>
                    <p></p>
                        <input class="contact-submit" type="submit" value="入力内容の確認" name="remarks"> 
                </div>
            </form>  
            </section>      
        </main>
    </body>    
</html>



<?php
get_footer();
?>