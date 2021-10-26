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
    .banner-title-dana p{
  color: #fff;
  font-size: 20px;
  margin-top: 10px; 
  margin-left: 230px;
  margin-right: 100px;
  margin-bottom: 50px;
}

  .content-table{
    border-collapse: collapse;
    margin: 25px 0px 50px 90px;
    font-size: 0.9em;
    min-width: 1000px; 
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 100px rgba(0,0,0,0.15);
    text-align: center;
  }
  .content-table thead tr{
    background-color: orange;
    color: #ffffff;
    text-align: center;
    font-weight: bold; 
    font-size: 23px;
  }
  .content-table th, .content-table td{
    padding: 12px 15px;
    
  }
  .content-table td{
    color: orange;
  .content-table tbody tr {
    border-bottom: 1px solid #dddddd;
    font-weight: bold;
    font-size: 12px;
   
  }
    .content-table tbody tr:nth-of-type(even){
      background-color: #ffffff;
    }
    .content-table tbody tr:last-of-type{
      font-size: 21px;
      border-bottom: 2px solid #ffa500;
    }
    .banner-title-dana h2{
  margin-left: 130px;
  font-size: 50px;
  margin-top: 50px;
  color: white;
}
.banner-title-dana h2 span{
  color: orange;
}

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
      <a href="table_masuk.php"><li>PEMASUKAN</li></a>
      <a  class="list active" href="table_keluar.php"><li>PENGELUARAN</li></a>
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
    <a target="blank" href="cetak_keluar.php"  style="color: white; font-weight: bold; font-size: 17px; text-decoration: none;"
       title=""><button type="button" class="btn warning1" style="margin-bottom: 10px; margin-left: 230px;">
          <i class="fa fa-print"></i> Print</a>
    </div>

    <div class="banner-title-dana">  
    <h2 align ="center">Dana <span> Pengeluaran</h2>
    <p align="center">RT.04/06, Sukabumi Utara, Kebon Jeruk</p>
        
  </div><!-- Title row end -->

</head>
<body>
  <div align="center">
<table class="content-table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Tanggal Keluar</th>
          <th>Perihal</th>
          <th>Dana Keluar</th>
          
        </tr>
      </thead>
            <tbody>
       <?php
       $conn = mysqli_connect("localhost","root","","keuangan");if($conn-> connect_error){
        die("Connection failed :". $conn-> connect_error);
       }
       $no=1;
       $sql="SELECT tgl_keluar, kegiatan_keluar, dana_keluar from pengeluaran";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
        $total_keluar = 0;
        while($row = $result-> fetch_assoc()){
          echo "<tr>
          <td>".$no++."</td>
          <td>".$row["tgl_keluar"]."</td>
          <td>".$row["kegiatan_keluar"]."</td>
          <td>Rp ".number_format($row["dana_keluar"], 0, ',','.')."</td>
          </tr>";
          $total_keluar += $row['dana_keluar'];
        }
        echo "<tr>
          <td colspan= 3 > Total Dana Keluar</td>
          <td>Rp ".number_format($total_keluar, 0, ',','.')."</td>
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
        </body>
        </html>