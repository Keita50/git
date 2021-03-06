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

	<main>
        <section class="form-content">
            <form action="./submit.php" method="POST" id="form">
                <h2>お問い合わせ内容の確認</h2>
                <ul>
                    <li>
                        名前<br>
                        <span><?php echo $_POST["name"]; ?></span>
                    </li>

                    <li>
                        メールアドレス<br>
                        <span><?php echo $_POST["email"]; ?></span>
                    </li>
                    <li>
                        お問い合わせ内容<br>
                        <span><?php echo $_POST['inquiry_content']; ?></span>
                    </li>
                    <li>
                        パスワード<br>
                        <span><?php echo $_POST['password']; ?></span>
                    </li>
                </ul>
                <div class="submit-group">
                    <input type="submit" class="form_post" name="form_post" id="form_post" value="送信する" >
                    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>"> 

                </div>
            </form>
            <form  class="back" action="<?php echo home_url(); ?>" method="POST"><input type="submit" name="back" id="back" value="修正する">
                <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>"> 
                <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>"> 
                <input type="hidden" name="inquiry_content" value="<?php echo $_POST['inquiry_content']; ?>" >
                <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">
            </form>
        </section>
	</main>
    <?php $pageType = 'contact-confirm';include($_SERVER['DOCUMENT_ROOT'] . './footer.php'); ?>

<?php
get_footer();
?>