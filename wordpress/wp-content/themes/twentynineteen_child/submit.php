<?php
/**
 * Template Name: submit
 
 
 */
get_header();
?>


        <main>
        <section class="form-content">
            <h2>送信完了</h2>
            <p class="thanks">
                お問い合わせありがとうございます。<br>
                ご入力いただいたメールアドレス（<span><?php echo $_POST['email']; ?></span>）宛に<br>確認のメールをお送りいたしました。<br><br>
                お問い合わせいただきました内容につきましては、<br>担当者より改めてご連絡させていただきます。<br><br>
                <span>万が一メールが届かない場合は、<br>お手数ですが<b>keita.igarashi555@gmail.com</b>に<br>ご連絡いただきますようお願い致します。</span>
            </p>
            <p class="back-top"><a href="<?php echo home_url(); ?>">ポートフォリオサイトに戻る</a></p>
        </section>
        <?php
          mb_language("Japanese");
          mb_internal_encoding("UTF-8");
          $to = $_POST['email'];
          $title = "問い合わせ完了通知";
          $content = $_POST['inquiry_content'];
          $password = $_POST["password"];         
          mb_send_mail($to, $title, $content,$password);
        ?>
        </main>
        <?php
get_footer();
?>