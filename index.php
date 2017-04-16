<?php
//session_start();
include "include/db.php";
?>


<?php  include("header.php"); ?>

    <title>SISTEM MAKLUMAT PESAKIT</title>

<br><br><br>
<div class="col-md-3" >
				</div>
               
                
				<div class="col-md-6" >
<br>				
					<h1><center>SISTEM LOGIN</center></h1>
					<hr>
					<div class="panel panel-primary">
					 
					  <div class="panel-body"> 
					  <form role="form" method="post" action="./process/login.php">
						 
						 
						 
						 <div  class="form-group" >
    <label for="nama">Nama :</label>
	<input class="form-control" name="nama" id="nama" type="text">
    
  </div>
						<div class="form-group">
							 
							<label for="katalaluan">
								Katalaluan :
							</label>
							<input class="form-control" name="katalaluan" id="katalaluan" type="password">
						</div>
						 
						 
						<button type="submit" class="btn btn-success">
							Login</button>&nbsp;
						<a href="daftar.php" class="btn btn-info">Daftar</a>
					</form>
					</br>
					<span style="color:red">* Sila gunakan password huruf besar.</span>
					  
					  </div>
					</div>
	
					
				</div>
			</div>
			
			  
		</div>
	</div>
	
</div>

    
  </body>
</html>