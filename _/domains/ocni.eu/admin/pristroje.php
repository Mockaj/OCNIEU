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

<div class="col-md-8">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title"> Přístroje</div>
					          
					        </div>
			  				<div class="panel-body">
			  					<form enctype="multipart/form-data" action="pridej-pristroj" method="post">
									<fieldset>
										

                    <div class="form-group">
											<label>Nadpis</label>
											<input class="form-control" placeholder="Název přístroje" name="nazev" type="text">
										</div>
                    <div class="form-group">
											<label>Pracoviště</label>
											<select name="pracoviste" class="form-control" style="cursor:pointer;">
                        <option value="">Vyberte pracoviště</option>
                        <option value="1">Vratimov</option>
                        <option value="2">Frýdlant</option>
                      </select>
										</div>
                    <!--<div class="form-group">
											<label>Datum</label>
											<input class="form-control" value="<?php echo date("m.d.Y");?>" name="datum" type="text">
										</div>-->
                    <!--<div class="form-group">
											<label>Krátký popis</label>
											<textarea class="form-control" placeholder="Textarea" name="popis" rows="3"></textarea>
										</div>-->
                    <div class="form-group">
								      <textarea id="editor1" name="obsah"></textarea>
								    </div>
                    <div class="form-group">
											<label>Obrázek</label>
                      <input class="form-control" type="file" name="photo">
										</div>

									</fieldset>
									<div>
										<input type="submit" class="btn btn-primary" value="Přidat">
											
										
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