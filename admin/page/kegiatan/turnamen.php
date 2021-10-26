<div class="col-12">
<div class="card card-primary">
   <div class="card-header">
   <h2 class="card-title">Dana Kegiatan - </h2>
   <h3 class="card-title">Tournament Futsal CUP 06 Desember 2019</h3>
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
       <th>Tanggal Donasi</th>
       <th>Nama Perusahaan</th>
       <th>Besar Donasi</th>
       <th>Aksi</th>           
    </tr>
  </thead>
  <tbody>
      <?php
		$no=1; 
		$total = 0;
		$sql = $koneksi->query("SELECT * from turnamen");
		while ($data=$sql->fetch_assoc()){
	  ?>
         <tr>
         <td><?php echo $no++ ?></td>
         <td><?php echo date('d F Y',strtotime($data['tgl_donasi'])) ?> </td>
         <td><?php echo $data['nm_perusahaan'] ?></td>
		 <td>Rp <?php echo number_format($data['donasi'],'0',',','.') ?></td>    
		 <?php $total += $data['donasi'];?>       	
	<td>
		<form method="POST">
           <input type="hidden" class="form-control" name="No" 
			value="<?php echo $data['No'] ?>">
        </div>
			<button onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" 
			type="submit" style="margin-bottom: 5px;" name="hapus" class="btn btn-block btn-danger btn-xs">
			<i class="fa fa-trash nav-icon"></i>
			Hapus
			</button>
			</form>
			<!-- UBAH -->
			<button type="button" class="btn btn-block btn-info btn-xs" 
			data-toggle="modal" data-target="#modal-default<?php echo $data['No'] ?>">
				<i class="far fa-edit nav-icon"></i>
				Ubah
				</button>
		</td>
           </tr>
			<div class="modal fade" id="modal-default<?php echo $data['No'] ?>">
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
					$No = $data['No'];
					$sql_edit = $koneksi->query("SELECT * from turnamen where No='$No' ");
					while ($data_edit=$sql_edit->fetch_assoc()){
				?>
				  <div class="form-group">
                    <input type="hidden" class="form-control" name="No" 
					value="<?php echo $data_edit['No'] ?>">
                  </div>
				
				  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Donasi</label>
                    <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="tgl_donasi" 
					value="<?php echo date('d-m-Y',strtotime($data['tgl_donasi']))?> ">
					<small>contoh: 05-28-2019</small>
                  </div>

				  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Instansi</label>
                    <input type="text" class="form-control" name="nm_perusahaan" value="<?php echo $data_edit['nm_perusahaan']?>">
                  </div>

				  <div class="form-group">
                    <label for="exampleInputEmail1">Dana Donasi</label>
                    <input type="integer" class="form-control" name="donasi" value="<?php echo number_format($data_edit['donasi'],'0',',','.')?>">
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
				$No_ubah = $_POST['No'];
				$tgl_donasi = $_POST['tgl_donasi'];
				$nm_perusahaan = $_POST['nm_perusahaan'];
				$donasi = $_POST['donasi'];
                $sql = $koneksi->query("update turnamen set tgl_donasi = '$tgl_donasi', 
				nm_perusahaan = '$nm_perusahaan', donasi = '$donasi' where No='$No_ubah' ");
				if($sql){
		   ?>
                <script>
				alert("Data Berhasil Diubah");
				window.location.href="?page=turnamen";
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
				<h3>Total Dana Donasi : Rp <?php echo number_format($total, 0, ',','.') ?></h3>

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
                    <label for="exampleInputEmail1">Tanggal Donasi</label>
                    <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="tgl_donasi" >
					<small>contoh: 05-28-2019</small>
                  </div>
					
				  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Instansi</label>
                    <input type="text" class="form-control" name="nm_perusahaan" >
                  </div>

				  <div class="form-group">
                    <label for="exampleInputEmail1">Dana</label>
                    <input type="integer" class="form-control" name="donasi">
                  </div>			

						</div>
						<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>	
						</div>

					

						</form>

						<?php 
								if(isset($_POST['simpan'])) {
									
									$tgl_donasi = $_POST['tgl_donasi'];
									$nm_perusahaan = $_POST['nm_perusahaan'];
									$donasi = $_POST['donasi'];

									$sql = $koneksi->query("insert into turnamen (tgl_donasi, nm_perusahaan, donasi)
					                values('$tgl_donasi','$nm_perusahaan', '$donasi')");
									
									
								if($sql){
									?>

								<script>
									alert("Data Berhasil Disimpan");
									window.location.href="?page=turnamen";
								</script>

									<?php
								}
								
								}
						
							
							?>

				<?php
				if(isset($_POST['hapus'])) {
					$No_hapus = $_POST['No'];
					$tgl_donasi = $_POST['tgl_donasi'];
					$nm_perusahaan = $_POST['nm_perusahaan'];
					$donasi = $_POST['donasi'];

					$sql = $koneksi->query("delete from turnamen where No = '$No_hapus' "); 

					if($sql){
						?>
								<script>
									alert("Data Berhasil Dihapus");
									window.location.href="?page=turnamen";
								</script>

						<?php

					}

				}
		  ?>