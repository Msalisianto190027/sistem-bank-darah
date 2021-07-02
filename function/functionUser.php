<?php
$con = mysqli_connect("localhost", "root", "", "dbbandala");

function query($query)
{
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data){
    global $con;
    //$usename = htmlspecialchars($data["nama"]);
    //$email = htmlspecialchars($data["email"]);
    //$password = htmlspecialchars($data["password"]);
    //$password2 = htmlspecialchars($data["password2"]);

    $username = htmlspecialchars($data["nama"]);
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($con,$data["password"]);
    $password2 = mysqli_real_escape_string($con,$data["password2"]);

    $result=mysqli_query($con,"SELECT email FROM datauser WHERE 
            email='$email'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('Email sudah terdaftar!');
         </script>";
         return false;
    }

    if($password!==$password2){
       echo "<script>
        alert('Password tidak sama!');
         </script>";
         return false;
    }
    $password=password_hash($password,PASSWORD_DEFAULT);
    mysqli_query($con,"INSERT INTO datauser VALUES('','$username','$email','$password','','')");
    return mysqli_affected_rows(($con));
}

/*function tambah($data)
{
    global $con;
    $kode = htmlspecialchars($data["KodeFilm"]);
    $judul = htmlspecialchars($data["JudulFilm"]);
    $genre = htmlspecialchars($data["KodeGenre"]);
    $sinopsis = htmlspecialchars($data["Sinopsis"]);

    $query = "INSERT INTO film VALUES
              ($kode, '$judul',$genre,'$sinopsis')";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}
function hapus($id)
{
    global $con;
    mysqli_query($con, "DELETE FROM film WHERE KodeFilm = $id");
    return mysqli_affected_rows($con);
}
function ubah($data)
{
    global $con;
    $id = $data["id"];
    $kode = htmlspecialchars($data["KodeGenre"]);
    $judul = htmlspecialchars($data["JudulFilm"]);
    $sinopsis = htmlspecialchars($data["Sinopsis"]);
    echo $id;
    $query = "UPDATE film SET KodeGenre='$kode',
                JudulFilm = '$judul',Sinopsis = '$sinopsis'
                WHERE KodeFilm = $id ";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}
function cari($keyword)
{
    $query = "SELECT * FROM dataadmin WHERE
                IdAdmin LIKE '%$keyword%'OR
                NamaAdmin LIKE '%$keyword%'";
    return query($query);
}
*/