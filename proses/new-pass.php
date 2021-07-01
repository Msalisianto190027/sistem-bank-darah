<?php
include ("../config.php");

if(isset($_POST["new_pass"])){
    $email = $_POST["email"];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "UPDATE datauser SET password='$password' WHERE email = '$email'";
    if (mysqli_query($con, $query)) {
        echo 'Record updated successfully <button><a href="../login.php">BACK TO LOGIN</a></button>';
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}

?>