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
    $query = "SELECT * FROM jadwal WHERE
                KodeJadwal LIKE '%$keyword%'OR
                KodeFilm LIKE '%$keyword%' OR
                TglTayang LIKE '%$keyword%'OR
                harga LIKE '%$keyword%'OR
                JamTayang LIKE '%$keyword%'";
    return query($query);
}
