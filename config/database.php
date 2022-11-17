<?php

    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $db   = "blog";

    $koneksi = mysqli_connect($host, $user, $pass, $db);

    if (! $koneksi ) {
        echo "koneksi ke database terputus";
    }

?>