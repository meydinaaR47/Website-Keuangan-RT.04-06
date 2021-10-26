<html>
<head>
	<meta charset="UTF-8">
	<title>Info Keuangan RT.04/06 </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
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
			<a class="list active" href="index.php"><li>HOME</li></a>  
			<a href="table_masuk.php"><li>PEMASUKAN</li></a>
			<a href="table_keluar.php"><li>PENGELUARAN</li></a>
			<a href="kontak.php"><li>KONTAK</li></a>
		</ul>
		
	<div>
		<a href="rekap.php" >
    <button type="button" class="btn warning">PRINT REKAP</button></a>		
  </div>
  
	</div>
	<i class="fa fa-bars" onclick="showMenu()"></i>
	</div>

	<div class="banner-title">
    <h1>Informasi <span> keuangan RT.04/06, Sukabumi </span> Utara, Kebon Jeruk</h1> 
    <a href="about-us.html">
    <!-- <button type="button" class="btn btn-warning" style="padding: 12px;">BACA >></button></a>  -->
    <button type="button" class="btn warning">BACA >></button></a>
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

