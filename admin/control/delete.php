<?php
    include('../config/koneksi.php');
    $id = $_GET['id'];
    $query="DELETE FROM skripsi where id='$id'";
    mysqli_query($koneksi_db, $query);
    header("location:../data-skripsi.php");
?>