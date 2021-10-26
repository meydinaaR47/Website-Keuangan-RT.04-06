<div class="col-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Dana Pengeluaran RT.04/06</h3>
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
                    <th>Tanggal Keluar</th>
                    <th>Perihal</th>
                    <th>Dana Keluar</th>
                    <th>Aksi</th>           
                  </tr>
                  </thead>
                  <tbody>
					<?php
					$no=1; 
					$total = 0;
					$sql = $koneksi->query("SELECT * from pengeluaran");
					while ($data=$sql->fetch_assoc()){						
					?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo date('d F Y',strtotime($data['tgl_keluar'])) ?> </td>
                    <td><?php echo $data['kegiatan_keluar'] ?></td>
					<td>Rp <?php echo number_format($data['dana_keluar'],'0',',','.') ?></td>    
					<?php $total += $data['dana_keluar'];?>       	
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
						$sql_edit = $koneksi->query("SELECT * from pengeluaran where NO='$NO' ");
						while ($data_edit=$sql_edit->fetch_assoc()){
						?>

				  <div class="form-group">
                    <input type="hidden" class="form-control" name="NO" 
					value="<?php echo $data_edit['NO'] ?>">
                  </div>

				  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Keluar</label>
                    <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="tgl_keluar" 
					value="<?php echo date('d-m-Y',strtotime($data['tgl_keluar']))?> ">
					<small>contoh: 05-28-2019</small>
                  </div>

				  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                    <input type="text" class="form-control" name="kegiatan_keluar" value="<?php echo $data_edit['kegiatan_keluar']?>">
                  </div>

				  <div class="form-group">
                    <label for="exampleInputEmail1">Dana Keluar</label>
                    <input type="integer" class="form-control" name="dana_keluar" value="<?php echo number_format($data_edit['dana_keluar'],'0',',','.')?>">
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
									$tgl_keluar = $_POST['tgl_keluar'];
									$kegiatan_keluar = $_POST['kegiatan_keluar'];
									$dana_keluar = $_POST['dana_keluar'];

									$sql = $koneksi->query("update pengeluaran set tgl_keluar = '$tgl_keluar', 
									kegiatan_keluar = '$kegiatan_keluar', dana_keluar = '$dana_keluar' where NO='$NO_ubah' ");
								if($sql){
									?>

								<script>
									alert("Data Berhasil Diubah");
									window.location.href="?page=dana_keluar";
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
				<h3>Total Dana Keluar : Rp <?php echo number_format($total, 0, ',','.') ?></h3>
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
                    <label for="exampleInputEmail1">Tanggal Keluar</label>
                    <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="tgl_keluar" >
					<small>contoh: 05-28-2019</small>
                  </div>
					
				  <div class="form-group">
                    <label for="exampleInputEmail1">Perihal</label>
                    <input type="text" class="form-control" name="kegiatan_keluar" >
                  </div>

				  <div class="form-group">
                    <label for="exampleInputEmail1">Dana</label>
                    <input type="integer" class="form-control" name="dana_keluar">
                  </div>			

						</div>
						<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>	
						</div>
						</form>
						<?php 
								if(isset($_POST['simpan'])) {	
									$tgl_keluar = $_POST['tgl_keluar'];
									$kegiatan_keluar = $_POST['kegiatan_keluar'];
									$dana_keluar = $_POST['dana_keluar'];

									$sql = $koneksi->query("insert into pengeluaran (tgl_keluar, kegiatan_keluar, dana_keluar)
					                values('$tgl_keluar','$kegiatan_keluar', '$dana_keluar')");	
								if($sql){
									?>

								<script>
									alert("Data Berhasil Disimpan");
									window.location.href="?page=dana_keluar";
								</script>

									<?php
								}
								
								}
							?>

				<?php
				if(isset($_POST['hapus'])) {
					$NO_hapus = $_POST['NO'];
					$tgl_keluar = $_POST['tgl_keluar'];
					$kegiatan_keluar = $_POST['kegiatan_keluar'];
					$dana_keluar = $_POST['dana_keluar'];

					$sql = $koneksi->query("delete from pengeluaran where NO = '$NO_hapus' "); 

					if($sql){
						?>
								<script>
									alert("Data Berhasil Dihapus");
									window.location.href="?page=dana_keluar";
								</script>

						<?php

					}

				}
		  ?>