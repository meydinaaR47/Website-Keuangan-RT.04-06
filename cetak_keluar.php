
<script>

window.print();
<window.onfocus=function() {window.close();
}

</script>


<body onload="window.print()">

<table width="100%" border="1">
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
    $total = 0;
    while($row = $result-> fetch_assoc()){  
        echo "<tr>
        <td>".$no++."</td>
        <td>".$row["tgl_keluar"]."</td>
        <td>".$row["kegiatan_keluar"]."</td>
        <td>Rp ".number_format($row["dana_keluar"], 0, ',','.')."</td>
        </tr>";
        $total += $row['dana_keluar'];
           }
        
        ?>
           <tr>
       		<td colspan= 3 style="text-align: center"> Total Dana Keluar</td>
       	
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
    

</tr>
</tbody>
</table>
</body>