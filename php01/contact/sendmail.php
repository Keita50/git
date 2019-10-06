<?php
    require_once('PHPMailer/PHPMailerAutoload.php');
    function gmail($subject, $body, $to) {
        $from = <?php echo $_POST["email"]; ?>;
        $pass = <?php echo $_POST["password"]; ?>;
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->CharSet = 'utf-8';
        $mail->Host = 'keita.igarashi555@gmail.com';
        $mail->Port = 465;
        $mail->SMTPSecure = 'SSL';
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $pass;
        $mail->setFrom($from);
        $mail->addReplyTo($from);
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $body;
        return $mail->send();
}
?>