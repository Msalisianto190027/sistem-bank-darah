<?php 
require ('../config.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


$email = $_POST['email'];
$sql = "SELECT * FROM datauser where email = '$email'";
$query = mysqli_query($con,$sql);

if(mysqli_num_rows($query) == 0){
    echo '<script>alert("EMAIL BELUM TERDAFTAR DI WEBTIX");</script>
    <button><a href="../login.php">BACK TO LOGIN</a></button>';
}else {
    if(isset($_POST["reset_pass"])){
        $email = $_POST['email'];
        $code = uniqid(true); //Untuk kode atau parameter acak
        $query1 = mysqli_query($con, "INSERT INTO reset_pw VALUES ('','$email','$code')");
        if(!$query1){ exit("Error");}
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = "webtix666@gmail.com";     // SMTP username
            $mail->Password = 'arisanakekontol321';                         // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('no-reply@yourwebsite.com', 'Admin WEBTIX'); //email pengirim
            $mail->addAddress($email); // Email penerima

            //Content
            $url = "http://localhost/webtix/reset.php?reset_pass=$code"; //sesuaikan berdasarkan link server dan nama file
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "Link reset Password";
            $mail->Body    = "<h1>Permintaan reset password</h1><p> Klik <a href='$url'>link ini</a> untuk mereset password</p>" ;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            echo 'Link reset password berhasil dikirimkan ke email.';
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        exit();
    }
}