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

function cari($keyword)
{
    $query = "SELECT * FROM transaksi WHERE
                IdTrans LIKE '%$keyword%'OR
                IdUser LIKE '%$keyword%' OR
                KodeJadwal LIKE '%$keyword%'OR
                JumlahTiket LIKE '%$keyword%'OR
                poin LIKE '%$keyword%' OR
                StatusTrans LIKE '%$keyword%'";
    return query($query);
}
