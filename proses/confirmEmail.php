<?php
    require('../config.php');

    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $sql = "SELECT * FROM datauser where verif_code = '$code'";
        $query = mysqli_query($con,$sql);
        if(mysqli_num_rows($query) > 0){
            $user = mysqli_fetch_assoc($query);
            $id = $user['IdUser'];
            $sql =  "UPDATE datauser set is_verified=1 where IdUser=$id";
            $query = mysqli_query($con,$sql);
            if($query){
                echo '<a href="../login.php">VERIFIKASI BERHASIL SILAHKAN MELAKUKAN LOGIN </a>';
            }else{
                echo "VERIFIKASI GAGAL ERROR : ".$query;
            }
        }else {
            echo "CODE TIDAK DITEMUKAN ATAU TIDAK VALID";
        }
    }else {
        echo "code ga nih";
    }

?>