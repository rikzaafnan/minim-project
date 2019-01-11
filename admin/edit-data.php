<?php
    include 'config/koneksi.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM skripsi where id= $id";
    $test = mysqli_query($koneksi_db,$query);
    $coba = mysqli_fetch_array($test);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
                <a href="#" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>	
                    <li>
                        <a   href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="home.php" ><i class="fa fa-desktop fa-3x"></i> Visi,Misi,Akreditasi</a>
                    </li>
                    <li>
                        <a  href="data-skripsi.php" class="active-menu"><i class="fa fa-qrcode fa-3x"></i> Data Skripsi</a>
                    </li>				
                </ul>
               
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <!-- form elements -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tambah data</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="" method="POST" role="form">
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="nim">NIM</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Input field" value="<?php echo $coba['nim']; ?>" readonly>
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="nama">NAMA</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $coba['nama']; ?>" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="js">Judul Skripsi</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="js" id="js" value="<?php echo $coba['judul_skripsi']; ?>" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">  
                                                <label for="jp">Jenis Penelitian</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <select name="jp" class="form-control" id="inlineFormCustomSelectPref" required data-error="Isi kolom dengan benar">
                                                    <option selected>Choose...</option>
                                                    <option value="kualitatif" <?php  if($coba['jenis_penelitian']=='kualitatif'){echo "selected";} ?>>Kualitatif</option>
                                                    <option value="kuantitatif" <?php  if($coba['jenis_penelitian']=='kuantitatif'){echo "selected";} ?>>Kuantitatif</option>
                                                </select>    
                                            </div>                                                
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                                                
                                                <label for="tglsk">Tanggal SK</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">        
                                                <input type="date" class="form-control" name="tglsk" id="tglsk" value="<?php echo $coba['tgl_sk']; ?>" placeholder="Input field" >
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                                                
                                                <label for="pembimbing1">Pembimbing 1</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">        
                                                <input type="text" class="form-control" name="pembimbing1" value="<?php echo $coba['pembimbing_1']; ?>" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                                                
                                                <label for="pembimbing2">Pembimbing 2</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">        
                                                <input type="text" class="form-control" name="pembimbing2" value="<?php echo $coba['pembimbing_2']; ?>" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">  
                                                <label for="status_">Status</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <select name="status_" class="form-control" id="inlineFormCustomSelectPref" required data-error="Isi kolom dengan benar">
                                                    <option selected>Choose...</option>
                                                    <option value="lulus" <?php  if($coba['status_']=='lulus'){echo "selected";} ?>>Lulus</option>
                                                    <option value="belum" <?php  if($coba['status_']=='belum'){echo "selected";} ?>>Belum</option>
                                                </select>    
                                            </div>                                                
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                            <label for="tgllulus">Tanggal Lulus</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="date" class="form-control" name="tgllulus" id="tgllulus" value="<?php echo $coba['tgl_lulus']; ?>" placeholder="Input field">                                            
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="penguji1">Penguji 1</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="penguji1" id="penguji1" value="<?php echo $coba['penguji_1']; ?>" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="penguji2">Penguji 2</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="penguji2" id="penguji2" value="<?php echo $coba['penguji_2']; ?>" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="niliskripsi">Nilai Skripsi</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="nilaiskripsi" id="penguji3" value="<?php echo $coba['nilaiskripsi']; ?>" placeholder="Input field">
                                            </div>  
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="ipk">IPK</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="ipk" id="ipk" value="<?php echo $coba['ipk']; ?>" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">  
                                                <label for="yudisium">Yudisium</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <select name="yudisium" class="form-control" id="inlineFormCustomSelectPref" required data-error="Isi kolom dengan benar">
                                                    <option selected>Choose...</option>
                                                    <option value="cumlaude" <?php  if($coba['yudisium']=='cumlaude'){echo "selected";} ?>>Cumlaude</option>
                                                    <option value="tidak" <?php  if($coba['yudisium']=='tidak'){echo "selected";} ?>>Tidak</option>
                                                </select>    
                                            </div>                                                
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="totalsks">Total SKS</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="totalsks" id="totalsks" value="<?php echo $coba['totalsks']; ?>" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="niliskripsi">Angkatan Wisuda</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="wisuda" id="wisuda" value="<?php echo $coba['wisuda_ke']; ?>" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="abstrak">Upload Abstrak</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="file" class="form-control" name="abstrak" id="abstrak"  placeholder="input pdf abstrak">
                                                <input name="x" type="hidden" id="x" value="<? echo $coba['abstrak'];?>" />
                                            
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="full_pdf">Upload Full PDF</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                            
          
                                            <input type="file" class="form-control" name="full_pdf"  id="full_pdf" placeholder="Upload Full PDF">
                                                <input name="y" type="hidden" id="y" value="<? echo $coba['full_pdf'];?>" />
                                            </div>  
                                        </div> -->
                                        <div class="form-group">
                                             <button type="submit" name="edit" class="btn btn-primary">Edit</button>  
                                             <a href="data-skripsi.php" name="back" class="btn btn-danger"> back </a>  
                                        </div>
                                        <?php

                                            

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

                                                    $x=$_POST['x'];
                                                    $temp_nama = $_FILES['abstrak']['tmp_name'];
                                                    $nama_file = $_FILES['abstrak']['name'];
                                                    // $acak        = rand(1,99);
                                                    // $tujuan_foto = $acak.$foto_name;
                                                    // $tempat_foto = 'img/'.$tujuan_foto;
                                                    $folder = "../upload_file/$nama_file";

                                                    // //nama file untuk abstrak
                                                    // $nama_file = $_FILES['abstrak']['name'];
                                                    // $temp_nama = $_FILES['abstrak']['tmp_name'];
                                                    // // nama folder untuk abstrak
                                                    // $folder = "../upload_file/$nama_file";
                                                    // move_uploaded_file($temp_nama,$folder);


                                                    // //nama file Full PDF
                                                    // $nama_file_full_pdf = $_FILES['full_pdf']['name'];
                                                    // $temp_nama_full_pdf = $_FILES['full_pdf']['tmp_name'];
                                                    // // nama folder Full PDF
                                                    // $folder_full_pdf = "../upload_file/full_pdf/$nama_file_full_pdf";
                                                    // move_uploaded_file($temp_nama_full_pdf,$folder_full_pdf);

                                                    if (!$temp_nama==""){
                                                        $buat_abstrak=$nama_file;
                                                        $d = $x;
                                                        @unlink ("$d");
                                                        copy ($temp_nama,$folder);
                                                    }else{
                                                        $buat_abstrak=$x;
                                                    }

                                                        $query ="UPDATE skripsi SET nama='$nama',nim='$nim',judul_skripsi='$js',jenis_penelitian='$jp',tgl_sk='$tglsk',pembimbing_1='$pembimbing1',pembimbing_2='$pembimbing2',status_='$status_',tgl_lulus='$tgllulus',penguji_1='$penguji1',penguji_2='$penguji2',nilaiskripsi='$nilaiskripsi',ipk='$ipk',yudisium='$yudisium',totalsks='$totalsks',wisuda_ke='$wisuda' WHERE id='$id'";
                                                        $hasil =mysqli_query($koneksi_db,$query);
                                                        echo "<script>alert('Data telah diganti');window.location='data-skripsi.php'</script>";
                                                }

                                            ?>
                                        
                                    
                                       
                                    </form>
                                </div>
                            </div>
                            
                        <!-- /akhir form elements -->
                    </div> 
		        </div>
                 <!-- /. ROW  -->    
            </div>
             <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
