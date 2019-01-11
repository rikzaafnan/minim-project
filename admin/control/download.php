<?php
    include '../config/koneksi.php';

if (isset($_GET['dow'])) {
    $abstrak = $_GET['dow'];
    
    $test = ("SELECT * FROM skripsi where abstrak = '$abstrak'");
    
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($abstrak).'"');
    header('Content-length:'.filesize($abstrak));
    readfile($abstrak);
}elseif (isset($_GET['dow'])) {
    $full_pdf = $_GET['dow'];
    
    $test = ("SELECT * FROM skripsi where full_pdf = '$full_pdf'");
    
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($full_pdf).'"');
    header('Content-length:'.filesize($full_pdf));
    readfile($full_pdf);
}else {
    echo "Error";
}



?>