<?php

// cek posisi page
$page = @$_GET['page'];

if($page=="dana_masuk"){
	include "page/danamasuk/dana_masuk.php";
}

else if($page=="dana_keluar"){
	include "page/danakeluar/dana_keluar.php";
}

else if($page=="list_request"){
	include "page/listrequest/list_request.php";
}

else if($page=="data_admin"){
	include "page/dataadmin/data_admin.php";
}

else if($page=="turnamen"){
	include "page/kegiatan/turnamen.php";
}

else{
	include "page/home/home.php";
}
// SAMPE SINI

?>