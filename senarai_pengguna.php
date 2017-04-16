<?php

		session_start();
		include "include/db.php";
		
?>
   <?php  include("header.php"); ?>
    <?php  include("menu.php"); ?>
    <div class="col-md-3" >
				</div>
				<div class="col-md-6" >
                
           <h1><center>Senarai Pengguna</center></h1>
           <hr>
           <table class="table table-striped datatable">
<thead>
<tr>
        <th>Bil.</th>
        <th>Nama</th>
        </tr>
</thead>
<tbody>
<?php
											
			$query = "SELECT * FROM pengguna" ;
			$result = mysql_query($query);
			$b=1;
			while($row = mysql_fetch_assoc( $result )) {
			?>
			
      <tr>
        <td><?php echo $b++;?>. </td>
         <td><?php echo $row['nama'];?></td>
          <?php
				} 
			?>
    </tbody>
  </table>  
			  