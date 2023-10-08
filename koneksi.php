<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'wdcxi');
    if ($koneksi){
        echo "Koneksi berhasil";
    }else{
        echo "Koneksi gagal";
    }
?>