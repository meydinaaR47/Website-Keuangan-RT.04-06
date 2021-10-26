<!DOCTYPE html>
<html>
<head>
  <html>
<head>
  <meta charset="UTF-8">
  <title>Info Keuangan RT.04/06 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="/assets/favicon.ico">
  <link rel="stylesheet" href="/assets/dcode.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

	<style>
   
</style>


<body>
  <div class="hero">
  <div class="nav-bar">
    <div class="nav-logo">
    <img src="logos.png">
  </div>
    <div class="nav-links" id="nav-links">
      <i class="fa fa-close" onclick="closeMenu()"></i>
    <ul>
      <a href="index.php"><li>HOME</li></a>  
      <a  class="list active" href="table_masuk.php"><li>PEMASUKAN</li></a>
      <a href="table_keluar.php"><li>PENGELUARAN</li></a>  
      <a href="kontak.php"><li>KONTAK</li></a> 
    </ul>

    <div>
		<a href="rekap.php">
			<button type="button" class="btn warning">PRINT REKAP</button></a>
	</div>
  </div>
  <i class="fa fa-bars" onclick="showMenu()"></i>
  </div>
   
  <div>
    <a target="blank" href="cetak.php" style="color: white; font-weight: bold; font-size: 17px; text-decoration: none;" 
       title=""><button type="button" class="btn warning1" style="margin-bottom: 10px; margin-left: 230px;">
        <i class="fa fa-print"></i> Print</a>
    </div>

    <div class="banner-title-dana">
  <h2 align ="center">Dana <span> Pemasukkan</h2>
    <p align="center">RT.04/06, Sukabumi Utara, Kebon Jeruk</p>
        
  </div><!-- Title row end -->
</head>

<body>
  <div align="center">
<div class="res-tab">
<table class="content-table">
			<thead>
				<tr>
          <th>No. </th>
					<th>Tanggal Masuk</th>
					<th>Kegiatan</th>
					<th>Dana Masuk</th>
				</tr>
			</thead>
            <tbody>
       <?php
       $conn = mysqli_connect("localhost","root","","keuangan");if($conn-> connect_error){
       	die("Connection failed :". $conn-> connect_error);
       }
       $no=1; 
       $sql="SELECT tgl_masuk, kegiatan_masuk, dana_masuk from pemasukan";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
       	$total_masuk = 0;
       	while($row = $result-> fetch_assoc()){
       		echo "<tr>
       		<td>".$no++."</td>
          <td>".$row["tgl_masuk"]."</td>
       		<td>".$row["kegiatan_masuk"]."</td>
       		<td>Rp ".number_format($row["dana_masuk"], 0, ',','.')."</td>
       		</tr>";
       		$total_masuk += $row['dana_masuk'];
       	}
       	echo "<tr>
       		<td colspan= 3 > Total Dana Masuk</td>
       		<td>Rp ".number_format($total_masuk, 0, ',','.')."</td>
       		</tr>
          </table>";
          }
       else{
       	echo "0 result";
       } 
       $conn-> close();
       ?>
   </tbody>
        </table>
      </div>
     


  <div align="center" style="margin-top: 50px;">
  <div class="res-tab">
<table class="content-table">
      
  <div class="banner-title-dana" >
  <h2 align ="center" >Dana <span>Kegiatan </h2>
  <h3 align ="center" >Dana Kegiatan Tournament Futsal CUP - <span>06 Desember 2019</h3>
  </div>
<tr>
  <thead>
                    <th>No</th>
                    <th>Tanggal Donasi</th>
                    <th>Nama Perusahaan</th>
                    <th>Besar Donasi</th>
        </tr>
        </thead>
            <tbody>
       <?php
       $conn = mysqli_connect("localhost","root","","keuangan");if($conn-> connect_error){
        die("Connection failed :". $conn-> connect_error);
       }
       $no=1; 
       $sql="SELECT tgl_donasi,nm_perusahaan, donasi from turnamen";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
        $total_donasi = 0;
        while($row = $result-> fetch_assoc()){
          echo "<tr>
          <td>".$no++."</td>
          <td>".$row["tgl_donasi"]."</td>
          <td>".$row["nm_perusahaan"]."</td>
          <td>Rp ".number_format($row["donasi"], 0, ',','.')."</td>
          </tr>";
          $total_donasi += $row['donasi'];
        }
        ?>
       
       <tr>
        <td colspan= 3 style="text-align: center"> Total Dana Donasi</td>
      
     <?php 
        echo "
          <td>Rp ".number_format($total_donasi, 0, ',','.')."</td>
          </tr>
          </table>";
          }
       else{
        echo "0 result";
       } 
       $conn-> close();
       ?>
   </tbody>
        </table>
      </div>
      <footer class="footer mt-auto py-3" style="margin-top: 100px;" >
			<div class="container">
				<p align="center" class="rights-text" style="color: grey;"><strong>Made by Meydina Copyright &copy; 2020 </strong>
   			 All rights reserved. </p>
			</div>
			</footer>
        </div>
        </div>
         </div>
         </div>

       

<div class="vertical-bar">
<div class="search-icon">
     <i class="fa fa-th-list"></i>
     <i class="fa fa-search"></i>
</div>
<div class="social-icons">
<a href="https://www.facebook.com" target="_blank" style="color: black;">
			<i class="fa fa-facebook"></i>
		</a>
		<a href="http://www.twitter.com" target="_blank" style="color: black;">
			<i class="fa fa-twitter"></i>
		</a>
		<a href="http://www.instagram.com" target="_blank" style="color: black;">
			<i class="fa fa-instagram"></i>
		</a>
		<a href="http://www.youtube.com" target="_blank" style="color: black;">
			<i class="fa fa-youtube"></i>
		</a>
</div>

</div>
</div>
<script>
  var show = document.getElementById("nav-links");
  function showMenu(){
    show.style.right = "0";
  }
  function closeMenu(){
    show.style.right = "-200px";
  }
</script>
</div>

        </body>
        </html>