<html>
<head>
	<meta charset="UTF-8">
	<title>Info Keuangan RT.04/06 </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
			<a href="table_keluar.php"><li>PENGELUARAN</li></a>
			<a  class="list active" href="kontak.php"><li>KONTAK</li></a>
		</ul>
		<div>
			<a href="rekap.php">
				<button type="button" class="btn warning">PRINT REKAP</button></a>
		</div>
	</div>
	<i class="fa fa-bars" onclick="showMenu()"></i>
	</div>

    <section>
<!---Contact Footer--->
<div class="banner-title" style="margin-top: 5px;">   
	<h2 align="center" >Kontak  <span> Kami</span> </h2>   

<div class="contact" id="contact">
	<div class="container text-center">
		<p align="center" >Jl. Anggrek Cakra RT.04/06 Kel. Sukabumi Utara
		<br >Kebon Jeruk, Jakarta Barat 11540</p><br>
		

		<!-- <div class="row"> -->
		<div class="col-md-04" align= "center">
		<h4 style="color: white; margin-top: 20px; margin-bottom: 30px;">
				Hubungi Pengurus RT Untuk Mendapatkan Informasi Lebih Lengkap</h4>	
			<a href="https://www.whatsapp.com" target="_blank" style="text-decoration: none;" >
				<button type="button" class="btn1 success" style="text-size: 20px; text-weight: bold; margin-right: 40px;">
					<i class="fa fa-whatsapp" aria-hidden="true"></i> Chat Whatsapp</button></a>

			<a href="https://www.gmail.com" target="_blank" style="text-decoration: none; ">
				<button type="button" class="btn1 success" style="text-size: 20px; text-weight: bold; margin-right: 40px;">	
					<i class="fa fa-google" aria-hidden="true"></i> infort04@gmail.com</button></a>

			<a href="https://www.localhost/infort2" target="_blank" style="text-decoration: none;">
				<button type="button" class="btn1 success" style="text-size: 20px; text-weight: bold;">
				 	<i class="fa fa-internet-explorer" aria-hidden="true"></i> www.infort04.com</button></a>
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
</section>
    
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



