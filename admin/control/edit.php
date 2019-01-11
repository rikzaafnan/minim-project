<?php
    // $x=$_POST['x'];
    // $nama_file = $_FILES['abstrak']['name'];
    // $temp_nama = $_FILES['abstrak']['tmp_name'];
    // // nama folder untuk abstrak
    // $folder = "../upload_file/$nama_file";
    // move_uploaded_file($temp_nama,$folder);

    // //nama file Full PDF
    // $y=$_POST['y'];
    // $nama_file_full_pdf = $_FILES['full_pdf']['name'];
    // $temp_nama_full_pdf = $_FILES['full_pdf']['tmp_name'];
    // // nama folder Full PDF
    // $folder_full_pdf = "../upload_file/full_pdf/$nama_file_full_pdf";
    // move_uploaded_file($temp_nama_full_pdf,$folder_full_pdf);

    if (isset($_POST['edit'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $js = $_POST['js'];
        $jp = $_POST['jp'];
        $tglsk = $_POST['tglsk'];
        $pembimbing1 = $_POST['pembimbing1'];
        $pembimbing2 = $_POST['pembimbing2'];
        $status_ = $_POST['status_'];
        $tgllulus = $_POST['tgllulus'];
        $penguji1 = $_POST['penguji1'];
        $penguji2 = $_POST['penguji2'];
        $nilaiskripsi = $_POST['nilaiskripsi'];
        $ipk = $_POST['ipk'];
        $yudisium = $_POST['yudisium'];
        $totalsks = $_POST['totalsks'];
        $wisuda = $_POST['wisuda'];

        // if (!$temp_nama==""){
        //     $buat_abstrak=$nama_file;
        //     $d = 'upload_file/'.$x;
        //     @unlink ("$d");
        //     copy ($temp_nama,$folder);
        // }else{
        //     $buat_abstrak=$x;
        // }
        // if (!$temp_nama_full_pdf==""){
        //     $buat_full_pdf=$nama_file_full_pdf;
        //     $dd = 'upload_file/full_pdf/'.$y;
        //     @unlink ("$dd");
        //     copy ($temp_nama_full_pdf,$folder_full_pdf);
        // }else{
        //     $buat_full_pdf=$y;
        // }

         //nama file untuk abstrak
        $nama_file = $_FILES['abstrak']['name'];
        $temp_nama = $_FILES['abstrak']['tmp_name'];
        // nama folder untuk abstrak
        $folder = "../upload_file/$nama_file";
        move_uploaded_file($temp_nama,$folder);


        //nama file Full PDF
        $nama_file_full_pdf = $_FILES['full_pdf']['name'];
        $temp_nama_full_pdf = $_FILES['full_pdf']['tmp_name'];
        // nama folder Full PDF
        $folder_full_pdf = "../upload_file/full_pdf/$nama_file_full_pdf";
        move_uploaded_file($temp_nama_full_pdf,$folder_full_pdf);

            $query ="UPDATE skripsi SET nama='$nama',nim='$nim',judul_skripsi='$js',jenis_penelitian='$jp',tgl_sk='$tglsk',pembimbing_1='$pembimbing1',pembimbing_2='$pembimbing2',status_='$status_',tgl_lulus='$tgllulus',penguji_1='$penguji1',penguji_2='$penguji2',nilaiskripsi='$nilaiskripsi',ipk='$ipk',yudisium='$yudisium',totalsks='$totalsks',wisuda_ke='$wisuda',abstrak='$folder',full_pdf='$folder_full_pdf' WHERE id='$id'";
            $hasil =mysqli_query($koneksi_db,$query);
            echo "<script>alert('Data telah diganti');window.location='../data-skripsi.php'</script>";
    }



    ?>