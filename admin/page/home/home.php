<div class="col-12">
  <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Dashboard Admin Web RT.04/06</h3>
        </div>
        <div class="card-body">

        <div class="starter-template" style="margin-left: 80px;">
            <h1>Selamat Datang <?php echo $_SESSION['nama']; ?></h1>
            <p class="lead">INFO RT.04/06 SUKABUMI UTARA</p>
        </div>
        
       </div>
      </div><!--/. container-fluid -->
      <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 style="font-size: 35px;"> <?php 
              $conn = mysqli_connect("localhost","root","","keuangan");
              if($conn-> connect_error){
              die("Connection failed :". $conn-> connect_error);
              }
              $sql="SELECT  dana_masuk from pemasukan";
              $result = $conn-> query($sql);
              if($result-> num_rows > 0){
             
              $total_masuk = 0;
              while($row = $result-> fetch_assoc()){
              // echo "<td>Rp ".number_format($row["dana_masuk"], 0, ',','.')."</td>";
              $total_masuk += $row['dana_masuk'];
              }
              echo "<td>Rp ".number_format($total_masuk, 0, ',','.')."</td>";
            }
              else{
              echo "0 result";
            } 
              $conn-> close();
            ?>
            </h3>
                <p>Dana Pemasukkan</p>
              </div>
              <div class="icon">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
              </div>
              <a href="?page=dana_masuk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right">
              </i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 style="font-size: 35px;">
              <?php
                $conn = mysqli_connect("localhost","root","","keuangan");
              if($conn-> connect_error){
              die("Connection failed :". $conn-> connect_error);
              }
              $sql="SELECT  dana_keluar from pengeluaran";
              $result = $conn-> query($sql);
              if($result-> num_rows > 0){
             
              $total_keluar = 0;
              while($row = $result-> fetch_assoc()){
              // echo "<td>Rp ".number_format($row["dana_masuk"], 0, ',','.')."</td>";
              $total_keluar += $row['dana_keluar'];
              }
              echo "<td>Rp ".number_format($total_keluar, 0, ',','.')."</td>";
            }
              else{
              echo "0 result";
            } 
              $conn-> close();
            ?>
            </h3>

                <p>Dana Pengeluaran</p>
              </div>
              <div class="icon">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
              </div>
              <a href="?page=dana_keluar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="font-size: 35px;">
                <?php
                $conn = mysqli_connect("localhost","root","","keuangan");
              if($conn-> connect_error){
              die("Connection failed :". $conn-> connect_error);
              }
              $sql="SELECT  donasi from turnamen";
              $result = $conn-> query($sql);
              if($result-> num_rows > 0){
             
              $total_donasi = 0;
              while($row = $result-> fetch_assoc()){
              // echo "<td>Rp ".number_format($row["dana_masuk"], 0, ',','.')."</td>";
              $total_donasi += $row['donasi'];
              }
              echo "<td>Rp ".number_format($total_donasi, 0, ',','.')."</td>";
            }
              else{
              echo "0 result";
            } 
              $conn-> close();
            ?>  
                </h3>

                <p>Dana Kegiatan</p>
              </div>
              <div class="icon">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
              </div>
              <a href="?page=turnamen" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 style="font-size: 35px;">
                  <?php
                      $total_akhir = 0;
                      $total_akhir = ($total_masuk + $total_donasi) - $total_keluar;
                      ?>
                        <?php 
                          echo "<td>Rp ".number_format($total_akhir, 0, ',','.')."</td>"

                        ?>
                        </h3>

                <p>Saldo Akhir</p>
              </div>
              <div class="icon">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
              </div>
              <a> <i class="fas"></i></a>
            </div>

      </div>
  </div>
</div>