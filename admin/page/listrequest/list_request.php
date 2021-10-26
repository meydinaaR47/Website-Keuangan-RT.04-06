<div class="col-12">
	<div class="card card-primary">
      	<div class="card-header">
        	<h3 class="card-title">Daftar Request Admin Web RT.04/06</h3>
      	</div>
        <div class="card-body">
			
            <table id="example1" class="table table-bordered table-striped">
             	<thead>
              		<tr>
		                <th>No.</th>
		                <th>Nama</th>
		                <th>No. KTP</th>
		                <th>Jabatan</th>
		                <th>No. Telepon</th>        
             	 	</tr>
              	</thead>

            	<tbody>

					<?php
					$no=1; 
					$sql = $koneksi->query("SELECT * from tb_request");
					while ($data=$sql->fetch_assoc()){
				
					?>
	                <tr>
	                    <td><?php echo $no++ ?></td>
	                    <td><?php echo $data['nama'] ?> </td>
	                    <td><?php echo $data['no_ktp'] ?></td>
	                    <td><?php echo $data['jabatan'] ?></td>
	                    <td><?php echo $data['no_telp'] ?></td>           	
						<td>
	<form method="POST">
   		<input type="hidden" class="form-control" name="id_request" 
		value="<?php echo $data['id_request'] ?>">
		<button onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" 
		type="submit" style="margin-bottom: 5px;" name="hapus" class="btn btn-block btn-danger btn-xs">
		<i class="fa fa-trash nav-icon"></i>
		Hapus
		</button>
    </form>
				
	<!-- UBAH -->
	<button type="button" class="btn btn-block btn-info btn-xs" 
	data-toggle="modal" data-target="#modal-default<?php echo $data['id_request'] ?>">
	<i class="far fa-edit nav-icon"></i>
	 Detail
	</button>
    </td>
	</tr>
    <!-- MODAL -->
	<div class="modal fade" id="modal-default<?php echo $data['id_request'] ?>">
	<div class="modal-dialog">
	<div class="modal-content">

	<form method="POST">
    <?php 
	$id_request = $data['id_request'];
	$sql_edit = $koneksi->query("SELECT * from tb_request where id_request='$id_request' ");
	while ($data_edit=$sql_edit->fetch_assoc()){
							
	?>

	<div class="modal-header">
	<h4 class="modal-title">Konfirmasi Registrasi Admin</h4>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
							
    <div class="modal-body">

								<div class="form-group">
				                  	<input type="hidden" class="form-control" name="id_request" 
									value="<?php echo $data_edit['id_request'] ?>">
				                </div>
								
								<div class="form-group">
				                    <label for="exampleInputEmail1">Username</label>
				                    <input type="text" class="form-control" name="username" 
									value="<?php echo $data_edit['username'] ?> ">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">Password</label>
				                    <input type="password" class="form-control" name="password" 
									value="<?php echo $data_edit['password']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">Nama</label>
				                    <input type="text" class="form-control" name="nama" 
									value="<?php echo $data_edit['nama']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">No. KTP</label>
				                    <input type="text" class="form-control" name="no_ktp" 
									value="<?php echo $data_edit['no_ktp']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">Jabatan</label>
				                    <input type="text" class="form-control" name="jabatan" 
									value="<?php echo $data_edit['jabatan']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">No. Telepon</label>
				                    <input type="text" class="form-control" name="no_telp" 
									value="<?php echo $data_edit['no_telp']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">Jenis Kelamin (Laki-laki/Perempuan)</label>
				                    <input type="text" class="form-control" name="jenis_kelamin" 
									value="<?php echo $data_edit['jenis_kelamin']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">Alamat</label>
				                    <input type="text" class="form-control" name="alamat" 
									value="<?php echo $data_edit['alamat']?>">
				                </div>

							</div>
							
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="submit" name="register" class="btn btn-primary">
									Registrasi
								</button>	
							</div>

							<?php  } ?>

							</form>

						</div>
						<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->

	                <?php } ?>  
	            </tbody>
	        </table>
		</div>
	</div>
</div>

						
							
								
<!-- fungsi registerin orang jadi admin -->
<?php 
	include_once('db_connect.php');
	$database = new database();
	if(isset($_POST['register']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama = $_POST['nama'];
		$no_ktp = $_POST['no_ktp'];
		$jabatan = $_POST['jabatan'];
		$no_telp = $_POST['no_telp'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		if($database->register($username,$password,$nama,$no_ktp,$jabatan,$no_telp,$jenis_kelamin,$alamat))
		{
			$id_request_hapus = $_POST['id_request'];
			$sql = $koneksi->query("delete from tb_request where id_request = '$id_request_hapus' "); 
		}
	?>	
		<script>
			alert("Data Berhasil Diregister");
			window.location.href="?page=list_request";
		</script>
<?php
	}
	
?>
				
<!-- fugsi hapus data yang di list request -->
<?php
	if(isset($_POST['hapus'])) {
		$id_request_hapus = $_POST['id_request'];
		
		$sql = $koneksi->query("delete from tb_request where id_request = '$id_request_hapus' "); 

		if($sql){
?>
			<script>
				alert("Data Berhasil Dihapus");
				window.location.href="?page=list_request";
			</script>

<?php
		}

	}
?>