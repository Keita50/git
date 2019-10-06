    <footer>
        <form action="..//php01/contact/confirm.php" method="POST">  
            <div class="contact-form">  
                <a id="contact-form"></a>
                <h3>Contact form</h3>
                <p>名前<em>*</em></p>
                    <input name="name" type="text" id="name" required="required">
                <p>メールアドレス<em>*</em></p>    
                    <input name="email" type="email"  id="email" required="required">
                <p>お問い合わせ内容（必須)</p>
                    <textarea name="inquiry_content" id="inquiry_content" cols="30" rows="10"></textarea>
                <p>Password<em>*</em></p>
                    <input type="password" name="password" minlength="8">
                <p></p>
                    <input class="contact-submit" type="submit" value="入力内容の確認" name="remarks"> 
            </div>
        </form>        
    </footer> 