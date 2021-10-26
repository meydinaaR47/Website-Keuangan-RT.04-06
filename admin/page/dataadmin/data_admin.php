<div class="col-12">
	<div class="card card-primary">
      	<div class="card-header">
        	<h3 class="card-title">Daftar Admin Web RT.04/06</h3>
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
					$sql = $koneksi->query("SELECT * from tb_user");
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

		                    <input type="hidden" class="form-control" name="id" 
							value="<?php echo $data['id'] ?>">

							<button onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" 
							  type="submit" style="margin-bottom: 5px;" name="hapus" class="btn btn-block btn-danger btn-xs">
							<i class="fa fa-trash nav-icon"></i>
							 Hapus
							</button>

							</form>
				
							<!-- UBAH -->
				
							<button type="button" class="btn btn-block btn-info btn-xs" 
							data-toggle="modal" data-target="#modal-default<?php echo $data['id'] ?>">
							<i class="far fa-edit nav-icon"></i>
							     Detail
							</button>

						</td>
	                </tr>

	                	<!-- MODAL -->
						<div class="modal fade" id="modal-default<?php echo $data['id'] ?>">
						<div class="modal-dialog">
						<div class="modal-content">

							<form method="POST">

							<?php 
							$id = $data['id'];
							$sql_edit = $koneksi->query("SELECT * from tb_user where id='$id' ");
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
				                  	<input type="hidden" class="form-control" name="id" 
									value="<?php echo $data_edit['id'] ?>">
				                </div>
								
								<div class="form-group">
				                    <label for="exampleInputEmail1">Username</label>
				                    <input type="text" class="form-control" name="username" disabled
									value="<?php echo $data_edit['username'] ?> ">
				                </div>  

								<div class="form-group">
				                    <label for="exampleInputEmail1">Password</label>
				                    <input type="password" class="form-control" name="password" disabled
									value="<?php echo $data_edit['password']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">Nama</label>
				                    <input type="text" class="form-control" name="nama" disabled
									value="<?php echo $data_edit['nama']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">No. KTP</label>
				                    <input type="text" class="form-control" name="no_ktp" disabled
									value="<?php echo $data_edit['no_ktp']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">Jabatan</label>
				                    <input type="text" class="form-control" name="jabatan" disabled
									value="<?php echo $data_edit['jabatan']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">No. Telepon</label>
				                    <input type="text" class="form-control" name="no_telp" disabled
									value="<?php echo $data_edit['no_telp']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">Jenis Kelamin (Laki-laki/Perempuan)</label>
				                    <input type="text" class="form-control" name="jenis_kelamin" disabled
									value="<?php echo $data_edit['jenis_kelamin']?>">
				                </div>

								<div class="form-group">
				                    <label for="exampleInputEmail1">Alamat</label>
				                    <input type="text" class="form-control" name="alamat" disabled
									value="<?php echo $data_edit['alamat']?>">
				                </div>

							</div>
							
							<div class="modal-footer justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<!-- <button type="submit" name="register" class="btn btn-primary">
									Registrasi
								</button>	 -->
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

				
<!-- FUNGSI HAPUS DATA ADMIN -->
<?php
	if(isset($_POST['hapus'])) {
		$id_hapus = $_POST['id'];
		
		$sql = $koneksi->query("delete from tb_user where id = '$id_hapus' "); 

		if($sql){
?>
			<script>
				alert("Data Berhasil Dihapus");
				window.location.href="?page=data_admin";
			</script>

<?php
		}

	}
?>