<?php
$con = mysqli_connect("localhost", "root", "", "dbbandala");

function query ($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data){
    global $con;
    $id = htmlspecialchars($data["idUnik"]);
    $nama = htmlspecialchars($data["nama"]);
    $golongan = htmlspecialchars($data["golongan"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO data_input VALUES
              ('$id', '$nama','$golongan','$tanggal','$alamat')" ;
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function cari($keyword){
    $query = "SELECT * FROM film WHERE
                KodeFilm LIKE '%$keyword%'OR
                JudulFilm LIKE '%$keyword%' OR
                KodeGenre LIKE '%$keyword%'OR
                Sinopsis LIKE '%$keyword%'";
    return query($query);
}
