<div class="col-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dana Pemasukan RT.04/06</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <button type="button" class="btn btn-info" style="margin-bottom: 13px;" 
			  data-toggle="modal" data-target="#modal-tambah">
				 Tambah Data
                </button>
				
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Masuk</th>
                    <th>Kegiatan</th>
                    <th>Dana Masuk</th>
                    <th>Aksi</th>        
                   
                  </tr>
                  </thead>
                  <tbody>

					<?php
					$no=1; 
					$total = 0;
					$sql = $koneksi->query("SELECT * from pemasukan");
					while ($data=$sql->fetch_assoc()){
					
					?>
				  
				 <tr>
				    
                    <td><?php echo $no++ ?></td>
                    <td><?php echo date('d F Y',strtotime($data['tgl_masuk'])) ?> </td>
                    <td><?php echo $data['kegiatan_masuk'] ?></td>
					<td>Rp <?php echo number_format($data['dana_masuk'],'0',',','.') ?></td> 
					<?php $total += $data['dana_masuk'];?>
				<td>
				
				<form method="POST">
				
                    <input type="hidden" class="form-control" name="NO" 
					value="<?php echo $data['NO'] ?>">
                  </div>
				 
				<button onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" 
				  type="submit" style="margin-bottom: 5px;" name="hapus" class="btn btn-block btn-danger btn-xs">
				<i class="fa fa-trash nav-icon"></i>
				 Hapus
				</button>
				</form>
			
						<!-- UBAH -->
			
						<button type="button" class="btn btn-block btn-info btn-xs" 
						data-toggle="modal" data-target="#modal-default<?php echo $data['NO'] ?>">
						<i class="far fa-edit nav-icon"></i>
						     Ubah
						</button>
					</td>
                  </tr>

				 <div class="modal fade" id="modal-default<?php echo $data['NO'] ?>">
					<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<h4 class="modal-title">Ubah Data</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">
				
				<form method="POST">

						<?php 
						$NO = $data['NO'];
						$sql_edit = $koneksi->query("SELECT * from pemasukan where NO='$NO' ");
						while ($data_edit=$sql_edit->fetch_assoc()){
						
						?>

				  <div class="form-group">
                    <input type="hidden" class="form-control" name="NO" 
					value="<?php echo $data_edit['NO'] ?>">
                  </div>
				

				  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Masuk</label>
                    <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="tgl_masuk" 
					value="<?php echo date('d-m-Y',strtotime($data['tgl_masuk']))?> ">
					<small>contoh: 05-28-2019</small>
                  </div>

				  <div class="form-group">
                    <label for="exampleInputEmail1">Kegiatan</label>
                    <input type="text" class="form-control" name="kegiatan_masuk" value="<?php echo $data_edit['kegiatan_masuk']?>">
                  </div>

				  <div class="form-group">
                    <label for="exampleInputEmail1">Dana Masuk</label>
                    <input type="integer" class="form-control" name="dana_masuk" value="<?php echo number_format($data_edit['dana_masuk'],'0',',','.')?>">
                  </div>

				</div>
						
						<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>	
						</div>

						<?php } ?>

						</form>

							<?php 
								if(isset($_POST['ubah'])) {
									$NO_ubah = $_POST['NO'];
									$tgl_masuk = $_POST['tgl_masuk'];
									$kegiatan_masuk = $_POST['kegiatan_masuk'];
									$dana_masuk = $_POST['dana_masuk'];

									$sql = $koneksi->query("update pemasukan set tgl_masuk = '$tgl_masuk', 
									kegiatan_masuk = '$kegiatan_masuk', dana_masuk = '$dana_masuk' where NO='$NO_ubah' ");
								if($sql){
									?>

								<script>
									alert("Data Berhasil Diubah");
									window.location.href="?page=dana_masuk";
								</script>

									<?php
								}
								
							}
						
							
							?>
					
					</div>
					<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				

				  <?php } ?>
				  <!-- END UBAH -->

				</tbody>
				
				</table>
				
				<h3>Total Dana Masuk : Rp <?php echo number_format($total, 0, ',','.') ?></h3>
				</div>
				</div>
</div>



				<!-- TAMBAH -->
				<div class="modal fade" id="modal-tambah">
					<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
						<h4 class="modal-title">Tambah Data</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">
						
				  <form method="POST">


				  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Masuk</label>
                    <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="tgl_masuk" >
					<small>contoh: 05-28-2019</small>
                  </div>
					
				  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                    <input type="text" class="form-control" name="kegiatan_masuk" >
                  </div>

				  <div class="form-group">
                    <label for="exampleInputEmail1">Dana</label>
                    <input type="integer" class="form-control" name="dana_masuk">
                  </div>			

						</div>
						<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>	
						</div>

					

						</form>

						<?php 
								if(isset($_POST['simpan'])) {
									
									$tgl_masuk = $_POST['tgl_masuk'];
									$kegiatan_masuk = $_POST['kegiatan_masuk'];
									$dana_masuk = $_POST['dana_masuk'];

									$sql = $koneksi->query("insert into pemasukan (tgl_masuk, kegiatan_masuk, dana_masuk)
					                values('$tgl_masuk','$kegiatan_masuk', '$dana_masuk')");
									
									
								if($sql){
									?>

								<script>
									alert("Data Berhasil Disimpan");
									window.location.href="?page=dana_masuk";
								</script>

									<?php
								}
								
								}
						
							
							?>

				<?php
				if(isset($_POST['hapus'])) {
					$NO_hapus = $_POST['NO'];
					$tgl_masuk = $_POST['tgl_masuk'];
					$kegiatan_masuk = $_POST['kegiatan_masuk'];
					$dana_masuk = $_POST['dana_masuk'];

					$sql = $koneksi->query("delete from pemasukan where NO = '$NO_hapus' "); 

					if($sql){
						?>
								<script>
									alert("Data Berhasil Dihapus");
									window.location.href="?page=dana_masuk";
								</script>

						<?php

					}

				}
		  ?>