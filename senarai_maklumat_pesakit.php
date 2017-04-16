<?php

		session_start();
		include "include/db.php";
		
?>
   <?php  include("header.php"); ?>
    <?php  include("menu.php"); ?>
    <div class="col-md-3" >
				</div>
				<div class="col-md-6" >
                
           <h1><center>Senarai Pesakit</center></h1>
           <hr>
           <table class="table table-striped datatable">
<thead>
<tr>
        <th>Bil.</th>
        <th>Nama</th>
        <th>No Kad Pengenalan </th>
        <th>Alamat </th>
         <th>No Tel </th>
          <th>Jantina </th>
    <th>Tindakan</th>
</tr>
</thead>
<tbody>
<?php
											
			$query = "SELECT * FROM maklumat_pesakit" ;
			$result = mysql_query($query);
			$b=1;
			while($row = mysql_fetch_assoc( $result )) {
			?>
			
      <tr>
        <td><?php echo $b++;?>. </td>
         <td><?php echo $row['nama_pesakit'];?></td>
         <td><?php echo $row['ic'];?></td>
          <td><?php echo $row['alamat'];?></td>
           <td><?php echo $row['no_tel'];?></td>
         <td><?php echo $row['jantina'];?></td>
         <td width="">
  <div align="center">
  <a href="tambah_maklumat_pesakit.php?act=edit&id_pesakit=<?php echo $row['id_pesakit']; ?>"><img src="img/edit.png" height="30px" weight="30px" /> </a>
   <a
class="btn btn-danger btn-delete" href="maklumat_delete.php?id_pesakit=<?php echo $row['id_pesakit']; ?>" onclick="return confirm('Anda Pasti?');"><span class="glyphicon glyphicon-remove" title="Buang"></span></a>
    </div></td>
        
        
        
          <?php
				} 
			?>
    </tbody>
  </table>  
			  
			  
			  
			  
			  
			  
		</div>
	</div>
	