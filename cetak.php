<script>

window.print();
<window.onfocus=function() {window.close();
}

</script>


<body onload="window.print()">

<table width="100%" border="1" style="margin-top: 50px;">
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
    $total = 0;
    while($row = $result-> fetch_assoc()){  
        echo "<tr>
        <td>".$no++."</td>
        <td>".$row["tgl_masuk"]."</td>
        <td>".$row["kegiatan_masuk"]."</td>
        <td>Rp ".number_format($row["dana_masuk"], 0, ',','.')."</td>
        </tr>";
        $total += $row['dana_masuk'];
           }
        
        ?>
           <tr>
       		<td colspan= 3 style="text-align: center"> Total Dana Masuk</td>
       	
        <?php 
         echo "<td>Rp ".number_format($total, 0, ',','.')."</td>
       		</tr>
          </table>";
          }
       else{
       	echo "0 result";
       } 
       $conn-> close();
       ?>
    


<script>

window.print();
<window.onfocus=function() {window.close();
}

</script>


<body onload="window.print()">

<table width="100%" border="1" style="margin-top: 40px;">
<caption>Dana Tournament Futsal CUP - <span>06 Desember 2019</caption><br>
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
        $total = 0;
        while($row = $result-> fetch_assoc()){
          echo "<tr>
          <td>".$row["No"]."</td>
          <td>".$row["nm_perusahaan"]."</td>
          <td>Rp ".number_format($row["donasi"], 0, ',','.')."</td>
          </tr>";
          $total += $row['donasi'];
        }
        ?>
        <tr>
          <td colspan= 2 style="text-align: center"> Total Dana Donasi</td>
       
     <?php 
        echo "<td>Rp ".number_format($total, 0, ',','.')."</td>
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


</tr>
</tbody>
</table>
</body>