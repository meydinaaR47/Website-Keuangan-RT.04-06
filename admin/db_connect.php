<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "keuangan";
	var $koneksi;
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}
 
 
	function register($username,$password,$nama,$no_ktp,$jabatan,$no_telp,$jenis_kelamin,$alamat)
	{	
		$insert = mysqli_query($this->koneksi,"insert into tb_user values ('','$username','$password','$nama','$no_ktp','$jabatan','$no_telp','$jenis_kelamin','$alamat')");
		return $insert;
    }
    
    function request($username,$password,$nama,$no_ktp,$jabatan,$no_telp,$jenis_kelamin,$alamat)
    {
    	// Cek username sudah dipakai atau belum
    	$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		// Jika sudah maka muncul alert
		if($data_user){ ?>
			<script>
		      alert("Username Sudah Digunakan!");
		    </script>
		<?php } 
		// Jika belum maka lanjut masukkan data ke request
		else {
			// masukin data ke list request
	        $insert = mysqli_query($this->koneksi,"insert into tb_request values ('','$username','$password','$nama','$no_ktp','$jabatan','$no_telp','$jenis_kelamin','$alamat')");
			return $insert;
		}
    } 
 
	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		if($data_user){
			if(password_verify($password,$data_user['password']))
			{
				
				if($remember)
				{
					setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
					setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
				}
				$_SESSION['username'] = $username;
				$_SESSION['nama'] = $data_user['nama'];
				$_SESSION['is_login'] = TRUE;
				return TRUE;
			}
		}
	}
 
	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
	}
} 
 
 
?>