<?php

		session_start();
		include "include/db.php";
	
$act = $_GET['act'];

			if($act=='edit'){
				$id_pesakit = $_GET['id_pesakit'];
		
										
				$query = "SELECT * FROM  maklumat_pesakit
				WHERE  id_pesakit=$id_pesakit
					 " ;
				$result = mysql_query($query);
				
				while($row = mysql_fetch_assoc( $result )) {
					$id_pesakit = $row['id_pesakit'];
					$nama_pesakit = $row['nama_pesakit'];
					$ic = $row['ic'];
					$no_tel = $row['no_tel'];
					$alamat = $row['alamat'];
					$jantina = $row['jantina'];
			
				}
			}
?>
 <?php  include("header.php"); ?>
    <?php  include("menu.php"); ?>
	 <div class="col-md-3" >
				</div>
				<div class="col-md-6" >
            <?php if($act=='edit'){  ?>    
                 <h1><center>Kemaskini Pesakit</center></h1>
           <?php }else{  ?>
           <h1><center>Tambah Pesakit</center></h1>
            <?php }  ?>
            <hr>
					<div class="panel panel-primary">
					 
					  <div class="panel-body"> 
          <?php if($act=='edit'){  ?>
			 <form method="post" action="./process/edit_pesakit.php" id="myform" name="myform">
			  <?php }else{  ?>
			  <form method="post" action="./process/daftar_pesakit.php" id="myform" name="myform">
			  <?php }  ?> 
              
              
               
  <div  class="form-group" >
    <label for="nama_pesakit">Nama :</label>
    <input type="text" class="form-control" id="nama_pesakit" name="nama_pesakit" value="<?php echo $nama_pesakit; ?>">
  </div>
             
						
						<div class="form-group">
							 
							<label for="ic">
						No Kad Pengenalan :
							</label>
							<input class="form-control" name="ic" id="ic" type="text" value="<?php echo $ic; ?>">
						</div>
                        
						 <div class="form-group">
							 
							<label for="alamat">
						Alamat :
							</label>
							<input class="form-control" name="alamat" id="alamat" type="text" value="<?php echo $alamat; ?>">
						</div>
                        
                        <div class="form-group">
							 
							<label for="no_tel">
						No Tel :
							</label>
							<input class="form-control" name="no_tel" id="no_tel" type="no_tel" value="<?php echo $no_tel; ?>">
						</div>
                        
                        <div  class="form-group" >
    <label for="jantina">Jantina :</label>
	<select  class="form-control" name="jantina" id="jantina">
										 <option value="">Pilih jantina di bawah</option>
  <option value="lelaki">Lelaki</option>
  <option value="perempuan">Perempuan</option>
<option value="<?php echo $jantina; ?>" <?php if($act=='edit'){ { echo "selected"; }}?>><?php echo $jantina; ?></option>
</select>
    
  </div>
    
						<button type="submit" class="btn btn-success">
							Daftar
						</button>
						<a href="index.php" class="btn btn-primary">
							Kembali
						</a>
                        <input class="form-control" name="id_pesakit" id="id_pesakit" type="hidden" value="<?php echo $id_pesakit; ?>">
                        
					</form>
					
					
					  
					  </div>
					</div>
	
					
				</div>     
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
    
  </body>
</html>        
                 