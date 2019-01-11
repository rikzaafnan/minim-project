<?php 
    include 'admin/config/koneksi.php';
    include 'headerdoang.php';
     $id = $_GET['id'];

?>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- CSSS Datatables -->
    <link rel="stylesheet" href="DataTables/DataTables-1/css/dataTables.bootstrap.min.css">
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="data-skripsi.php">Data Skripsi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontak.php">Kontak</a>
      </li>  
    </ul>
  </div>
</nav>

<div class="container" style="margin-top: 4%;">
    <div class="row">
        <div class="col-12">
            <h3 style="text-align: center;">Data Skripsi Mahasiswa jurusan pendidikan matematika UIN Syarif Hidayatullah Jakarta </h3>
        </div>
    </div>
    <div class="row">
        <a href="data-skripsi.php" class="btn btn-danger btn-sm pull-right">
            <span class="glyphicon glyphicon-remove"></span>cancel
        </a>
        <br>
        <div class="table-responsive">
            <table id="table1" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <th>Tanggal Lulus</th>
                    <th>Penguji 1</th>
                    <th>Penguji 2</th>
                    <th>Nilai Skripsi</th>
                    <th>IPK</th>
                    <th>Yudisium</th>
                    <th>Total SKS</th>
                    <th>Angkatan wisuda</th>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        $query = "SELECT * FROM skripsi where id = '$id'";
                        $hasil = mysqli_query($koneksi_db,$query);
                        while ($data = mysqli_fetch_array($hasil)) {
                            $tanggal_lulus = $data[9];  
                            $penguji1 = $data[10];  
                            $penguji2 = $data[11];  
                            $nilai_skripsi = $data[12];  
                            $ipk = $data[13];  
                            $yudisium = $data[14];  
                            $total_sks = $data[15];  
                            $wisudake = $data[16];
                            $abstrak = $data[17];
                            $full_pdf = $data[18];
                            $id = $data[0];   
                    ?>
                        <td><?php echo $tanggal_lulus; ?></td>
                        <td><?php echo $penguji1; ?></td>
                        <td><?php echo $penguji2; ?></td>
                        <td><?php echo $nilai_skripsi; ?></td>
                        <td><?php echo $ipk; ?></td>
                        <td><?php echo $yudisium; ?></td>
                        <td><?php echo $total_sks; ?></td>
                        <td><?php echo $wisudake; ?></td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class="row">
        <a href="admin/control/download.php?dow=<?php echo $abstrak; ?>" class="btn btn-success btn-sm">
            <span class="">Download abstrak </span>
        </a>
        <a href="admin/control/download.php?dow=<?php echo $full_pdf; ?>" class="btn btn-success btn-sm">
            <span class="">Download full pdf</span>
        </a>          
    </div>
     <?php
                        }
                    ?>
</div>
</div>




<?php require 'footer.php' ?>