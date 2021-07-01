<?php
session_start();

require ('../config.php');
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM datauser where email = '$email'";
$query = mysqli_query($con,$sql);
if(mysqli_num_rows($query) == 0 ){
    echo "<script>alert('EMAIL BELUM TERDAFTAR DI WEBTIX');document.location.href = '../login.php';</script>";
}else {
    $user = mysqli_fetch_assoc($query);
    if(password_verify($password,$user['password'])){
        if($_SESSION["code"] == $_POST["kodecaptcha"]){
            if($user['is_verified']==1){
                // session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['id'] = $user['IdUser'];

                if( isset($_POST['remember']) ) {
                    // buat cookie
                    setcookie('id', $row['IdUser'], time()+60*60*24*30);
                    setcookie('key', hash('sha256', $row['nama']), time()+60*60*24*30);
                    echo "<script>alert('OK');</script>";
                }
                
                header("location: ../halamanutama.php");
            }else {
                echo "<script>alert('SILAHKAN VERIFIKASI EMAIL ANDA TERLEBIH DAHULU');document.location.href = '../login.php';</script>";
            }
        }else{
            echo "<script>alert('MASUKKAN CAPTCHA DENGAN BENAR');document.location.href = '../login.php';</script>";
        }
    }else {
        echo "<script>alert('MASUKKAN PASSWORD DENGAN BENAR');document.location.href = '../login.php';</script>";
    }
}
?>