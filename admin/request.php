<?php 
include_once('db_connect.php');
$database = new database();

if(isset($_POST['request']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $no_ktp = $_POST['no_ktp'];
    $jabatan = $_POST['jabatan'];
    $no_telp = $_POST['no_telp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    
    if($database->request($username,$password,$nama,$no_ktp,$jabatan,$no_telp,$jenis_kelamin,$alamat))
    {
      header('location:direct.php'); 
    }
}
 
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Request Form</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">
 
    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
 
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Request Form</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <hr/>
    <form method="post" action="">
    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>
    </div>
 
    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="no_ktp" class="col-sm-2 col-form-label">No. KTP</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="No. KTP" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label> 
      <div class="col-sm-10">
        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan di RT.04/06" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="no_telp" class="col-sm-2 col-form-label">No. Telepon</label> 
      <div class="col-sm-10">
        <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No. Telepon" required>
      </div>
    </div>
 
    <div class="form-group row">
      <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin (Laki-laki/Perempuan)</label> 
      <div class="col-sm-10">
        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label> 
      <div class="col-sm-10">
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
      </div>
    </div>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <a href="login.php" class="btn btn-success">Login</a>
      <button type="submit" class="btn btn-primary" name="request">Request</button>
    </div>
  </div>
</form>
  </div>
</main>
 
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Info RT.04/06 Sukabumi Utara, Kebon Jeruk &copy; 2020</span>
  </div>
</footer>
</body>
</html>
 