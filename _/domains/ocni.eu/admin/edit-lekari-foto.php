<?php
require_once 'ajax/safe.php';
require_once 'inc/Database.php';
?>
<!DOCTYPE html>
<html>
<?php include_once "include/head.php"; ?>
  <body>
<?php include_once "include/header.php"; ?>

    <div class="page-content">
    	<div class="row">
		  
<?php include_once "include/sidebar.php"; ?>

<?php
$zaznam = $database->lekari("id", $_GET['id'])->fetch();
?>

<div class="col-md-8">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title"> Úvodní strana</div>
					          
					        </div>
			  				<div class="panel-body">
                
                  <p>Aktuální obrázek</p>
                  <img src="files/personal/thumb/<?= $zaznam['pic'] ?>" width="120px;"">
                
			  					<form enctype="multipart/form-data" action="update-lekari-foto" method="post">									
                  
                  <fieldset>
                      
										 <?php
                        $zaznam = $database->lekari->where("id", $_GET['id'])->fetch();
                     ?>
                     
                    <input name="id" type="hidden" value="<?= $zaznam['id'] ?>" >
                    
                    <br><br><br>
                   <div class="form-group">
											<label>Nový obrázek</label>
                      <input class="form-control" type="file" name="photo">
										</div>
									</fieldset>
									<div>
										<input type="submit" class="btn btn-primary" value="Upravit">
											
										
									</div>
								</form>
			  				</div>
			  			</div>
	  				</div>
            
            
           
            

		  </div>
    </div>

<?php include_once "include/footer.php"; ?>
<?php include_once "include/script.php"; ?>
  </body>
</html>