<?php 
    include 'admin/config/koneksi.php';
    include 'headerdoang.php';

?>
<!-- CSSS bootstrap -->
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
        <form action="" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table id="table1" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Judul Skripsi</th>
                    <th>Jenis Penelitian</th>
                    <th>Tanggal SK</th>
                    <th>Pembimbing 1</th>
                    <th>Pembimbing 2</th>
                    <th>Status</th>
                </thead>
                <tbody>
                <?php
                if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        $query = "SELECT * FROM skripsi WHERE nama like '%".$cari."%' ";
                    $hasil = mysqli_query($koneksi_db,$query);
                        // $data = mysql_query("select * from skripsi where nama like '%".$cari."%'");				
                    }else{
                        $query = "SELECT * FROM skripsi";
                    $hasil = mysqli_query($koneksi_db,$query);
                    }
                    $no = 1;
                    // $query = "SELECT * FROM skripsi";
                    // $hasil = mysqli_query($koneksi_db,$query);
                    while ($data = mysqli_fetch_array($hasil)) {
                        $id=$data[0];
                        $nama=$data[1];           
                        $nim=$data[2];           
                        $judul_skripsi=$data[3];           
                        $jenis_penelitian=$data[4];           
                        $tgl_sk=$data[5];           
                        $pembimbing1=$data[6];           
                        $pembimbing2=$data[7];           
                        $status=$data[8];                     
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $nama ; ?></td>
                        <td><?php echo $nim; ?></td>
                        <td><a href="detail-data-skripsi.php?id=<?php echo $id ?>"><?php echo $judul_skripsi; ?></td>
                        <td><?php echo $jenis_penelitian; ?></td>
                        <td><?php echo $tgl_sk; ?></td>
                        <td><?php echo $pembimbing1; ?></td>
                        <td><?php echo $pembimbing2; ?></td>
                        <td><?php echo $status; ?></td>
                    </tr>
                <?php
                $no++;
                     }

                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php require 'footer.php' ;
?>