<?php
    require ('../config.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/OAuth.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/POP3.php';
    require '../PHPMailer/src/SMTP.php';

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $code = md5($email.date('Y-m-d'));

    $sql = "SELECT * FROM datauser where email='$email'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) > 0){
        echo '<script>alert("Email sudah terdaftar");</script>';
    }else {
        $sql = "INSERT INTO datauser (nama,email,password,verif_code) VALUES ('$nama','$email','$password','$code')";
        $query = mysqli_query($con,$sql);

        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // SMTP::DEBUG_OFF = off (for production use)
        // SMTP::DEBUG_CLIENT = client messages
        // SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption mechanism to use - STARTTLS or SMTPS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'webtix666@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'arisanakekontol321';

        //Set who the message is to be sent from
        $mail->setFrom('no-reply@yourwebsite.com', 'Admin WEBTIX');

        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');

        //Set who the message is to be sent to
        $mail->addAddress($email, $nama);

        //Set the subject line
        $mail->Subject = 'Verification Account WEBTIX';

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $body = "Hi, ".$nama."<br>Please verify your email before access our website : <br> http://localhost/webtix/proses/confirmEmail.php?code=".$code;
        $mail->Body = $body;
        //Replace the plain text body with one created manually
        $mail->AltBody = 'Verification Account';

        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: '. $mail->ErrorInfo;
        } else {
            echo '<script>alert("REGISTRASI SUKSES, SILAHKAN CEK EMAIL ANDA UNTUK VERIFIKASI AKUN WEBTIX");</script>';
            header('location: ../login.php');
        }

    }





?>