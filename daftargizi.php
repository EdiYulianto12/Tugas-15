<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Layanan Gizi</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">KamarKos</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info Gizi <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="daftargizi.php">Daftar Gizi</a></li>
          <li><a href="inputdatagizi.php">Input Gizi</a></li>
          <li><a href="hapuslayanan.php">Hapus Gizi</a></li>
          <li><a href="koreksilayanan.php">Cari Gizi</a></li>
        </ul>
      </li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info Pasien <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="daftarpasien.php">Daftar Pasien</a></li>
          <li><a href="inputpasien.php">Input Pasien</a></li>
          <li><a href="hapuspasien.php">Hapus Pasien</a></li>
          <li><a href="koreksipasien.php">Cari Pasien</a></li>
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Info Ruang <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="daftarruang.php">Daftar Ruang</a></li>
          <li><a href="inputlayananruang.php">Input Ruang</a></li>
          <li><a href="hapusruang.php">Hapus Ruang</a></li>
          <li><a href="koreksiruangan.php">Cari Ruang</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<?php 
$koneksi=new mysqli("localhost","root","","layanangizi");
$sql="SELECT * FROM `layanangizi`";
$q=$koneksi->query($sql);
$rekord=$q->fetch_array();
?>
	<div class="container">
  <h2> <CENTER>Daftar layanan gizi pasien</h2></CENTER>
            <br>
            <br>  
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="color">
        <th>No ID Layanan Gizi </th>
        <th>NoRM</th>
        <th>Waktu Layanan </th>
        <th>Diet Wajib</th>
      </tr>

</div>
  </thead>
  <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekord['IdLayananGizi'];?></td>
         <td><?php echo $rekord['NoRM'];?></td>
        <td><?php echo $rekord['WaktuLayanan'];?></td>
        <td><?php echo $rekord['Diet'];?></td>
      </tr><?php } while($rekord =$q->fetch_array());?>
    </tbody>
</table>

<footer style="

      background-color: rgb(107, 229, 210);
      height: 50px;
      margin-top: 310px;">
   <h2><center><font color="white">@2021 | Edi Yulianto</h2></center></font></center></h2>
</footer>
</body>
</html>
