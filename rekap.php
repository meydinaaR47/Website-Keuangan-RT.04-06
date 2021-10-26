<script>

window.print();
<window.onfocus=function() {window.close();
}

</script>

<div class="banner-title-dana">
<h3 align ="left"  style="margin-top: 50px;">A. Dana Pemasukkan</h2>
<body onload="window.print()">
<table width="100%" border="1"  style="margin-top: 10px;" >
    <caption>Laporan Keuangan Pemasukan RT.04/06</caption>
    <thead>
    <tr>
               <th>No. </th>
					<th>Tanggal Masuk</th>
					<th>Kegiatan</th>
					<th>Dana Masuk</th>
    </tr>
    </thead>
    <tbody>

        <?php
     $conn = mysqli_connect("localhost","root","","keuangan");
     if($conn-> connect_error){
        die("Connection failed :". $conn-> connect_error);
    }
    $no=1; 
    $sql="SELECT tgl_masuk, kegiatan_masuk, dana_masuk from pemasukan";
    $result = $conn-> query($sql);
   
    if($result-> num_rows > 0){
    $total_masuk = 0;
    while($row = $result-> fetch_assoc()){  
        echo "<tr>
        <td>".$no++."</td>
        <td>".$row["tgl_masuk"]."</td>
        <td>".$row["kegiatan_masuk"]."</td>
        <td>Rp ".number_format($row["dana_masuk"], 0, ',','.')."</td>
        </tr>";
        $total_masuk += $row['dana_masuk'];
           }
        
        ?>
           <tr>
       		<td colspan= 3 style="text-align: center"> Total Dana Masuk</td>
       	
        <?php 
         echo "<td>Rp ".number_format(	$total_masuk, 0, ',','.')."</td>
       		</tr>
          </table>";
          }
       else{
       	echo "0 result";
       } 
       $conn-> close();
       ?>
   </div>


   <div align="center">
<table class="content-table">
      
       <div class="banner-title-dana">
  <h3 align ="center">1. Dana Tournament Futsal CUP - <span>06 Desember 2019</h3>
  <body onload="window.print()">
<table width="100%" border="1"  style="margin-top: 10px;" >
  <thead>
     <tr>
          <th>No. </th>
          <th>Nama Perusahaan</th>
          <th>Besar Donasi</th>
        </tr>
        </thead>
            <tbody>
       <?php
       $conn = mysqli_connect("localhost","root","","keuangan");if($conn-> connect_error){
        die("Connection failed :". $conn-> connect_error);
       }
       $sql="SELECT No, nm_perusahaan, donasi from turnamen";
       $result = $conn-> query($sql);

       if($result-> num_rows > 0){
        $total_donasi = 0;
        while($row = $result-> fetch_assoc()){
          echo "<tr>
          <td>".$row["No"]."</td>
          <td>".$row["nm_perusahaan"]."</td>
          <td>Rp ".number_format($row["donasi"], 0, ',','.')."</td>
          </tr>";
          $total_donasi += $row['donasi'];
        }
        ?>
        <tr>
        <td colspan= 2 style="text-align: center"> Total Dana Donasi</td>
        <?php 
        echo "
          <td>Rp ".number_format($total_donasi, 0, ',','.')."</td>
          </tr>
          </table>";
          }
       else{
        echo "0 result";
       } 
       $conn-> close();
       ?>
   </tbody>
        </table>
      </div>
        </div>
        </div>
        </div>

   
<script>

window.print();
<window.onfocus=function() {window.close();
}

</script>


<body onload="window.print()">

<table width="100%" border="1" style="margin-top: 10px;" >
<h3 align ="left">B. Dana Pengeluaran RT.04/06 </h3>
    <caption>Laporan Keuangan Pengeluaran RT.04/06</caption>
    <thead>
    <tr>
               <th>No. </th>
					<th>Tanggal Keluar</th>
					<th>Perihal</th>
					<th>Dana Keluar</th>
    </tr>
    </thead>
    <tbody>

     <?php
     $conn = mysqli_connect("localhost","root","","keuangan");
     if($conn-> connect_error){
        die("Connection failed :". $conn-> connect_error);
    }
    $no=1; 
    $sql="SELECT tgl_keluar, kegiatan_keluar, dana_keluar from pengeluaran";
    $result = $conn-> query($sql);
   
    if($result-> num_rows > 0){
    $total_keluar = 0;
    while($row = $result-> fetch_assoc()){  
        echo "<tr>
        <td>".$no++."</td>
        <td>".$row["tgl_keluar"]."</td>
        <td>".$row["kegiatan_keluar"]."</td>
        <td>Rp ".number_format($row["dana_keluar"], 0, ',','.')."</td>
        </tr>";
        $total_keluar += $row['dana_keluar'];
           }
        
        ?>
           <tr>
       		<td colspan= 3 style="text-align: center"> Total Dana Keluar</td>
       	
        <?php 
         echo "<td>Rp ".number_format($total_keluar, 0, ',','.')."</td>
       		</tr>
          </table>";
          }
       else{
       	echo "0 result";
       } 
       $conn-> close();
       ?>
    
    <?php
    
    $total_akhir = 0;
    $total_akhir = ($total_masuk + $total_donasi) - $total_keluar;
   
    ?>
     <tr>
       <td colspan= 3 style="text-align: center" style="margin-top: 20px;"><h3> Saldo Akhir = Dana Masuk - Dana Keluar</h3></td>
       <?php 
         echo "<td><h3>Rp ".number_format($total_akhir, 0, ',','.')."</h3></td>"
       
       ?>

         </tr>

</tr>
</tbody>
</table>
</body> 

</tr>
</tbody>
</table>
</body>