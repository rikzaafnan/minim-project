<?php
    include 'config/koneksi.php';
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
                                    <form action="control/tambah.php" method="POST" role="form" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="nim">NIM</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="nim" id="nim" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="nama">NAMA</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="js">Judul Skripsi</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="js" id="js" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">  
                                                <label for="jp">Jenis Penelitian</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <select name="jp" class="form-control" id="inlineFormCustomSelectPref" required data-error="Isi kolom dengan benar">
                                                    <option selected>Choose...</option>
                                                    <option value="kualitatif">Kualitatif</option>
                                                    <option value="kuantitatif">kuantitatif</option>
                                                </select>    
                                            </div>                                                
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                                                
                                                <label for="tglsk">Tanggal SK</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">        
                                                <input type="date" class="form-control" name="tglsk" id="tglsk" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                                                
                                                <label for="pembimbing1">Pembimbing 1</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">        
                                                <input type="text" class="form-control" name="pembimbing1" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">                                                
                                                <label for="pembimbing2">Pembimbing 2</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">        
                                                <input type="text" class="form-control" name="pembimbing2" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">  
                                                <label for="status_">Status</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <select name="status_" class="form-control" id="inlineFormCustomSelectPref" required data-error="Isi kolom dengan benar">
                                                    <option selected>Choose...</option>
                                                    <option value="lulus">Lulus</option>
                                                    <option value="belum">Belum</option>
                                                </select>    
                                            </div>                                                
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                            <label for="tgllulus">Tanggal Lulus</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="date" class="form-control" name="tgllulus" id="tgllulus" placeholder="Input field">                                            
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="penguji1">Penguji 1</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="penguji1" id="penguji1" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="penguji2">Penguji 2</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="penguji2" id="penguji1" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="niliskripsi">Nilai Skripsi</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="nilaiskripsi" id="penguji3" placeholder="Input field">
                                            </div>  
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="ipk">IPK</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="ipk" id="ipk" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">  
                                                <label for="yudisium">Yudisium</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                <select name="yudisium" class="form-control" id="inlineFormCustomSelectPref" required data-error="Isi kolom dengan benar">
                                                    <option selected>Choose...</option>
                                                    <option value="cumlaude">Cumlaude</option>
                                                    <option value="tidak">Tidak</option>
                                                </select>    
                                            </div>                                                
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="totalsks">Total SKS</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="totalsks" id="totalsks" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="niliskripsi">Angkatan Wisuda</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="text" class="form-control" name="wisuda" id="wisuda" placeholder="Input field">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="abstrak">Upload Abstrak</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="file" class="form-control" name="abstrak" id="abstrak" placeholder="input pdf abstrak">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                
                                            <label for="full_pdf">Upload Full PDF</label>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                                
                                            <input type="file" class="form-control" name="full_pdf" id="full_pdf" placeholder="Upload Full PDF">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                             <button type="submit" name="submit" class="btn btn-primary">Submit</button>  
                                             <a href="data-skripsi.php" name="back" class="btn btn-danger"> back </a>  
                                        </div>
                                        
                                    
                                       
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
