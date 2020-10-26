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

<div class="col-md-9">
	  					
           
              
              <table class="display table table-hover">
                        <thead>
                            <tr style="font-weight:800;">
                                <td>Fotografie </td>
                                <td>Jméno</td>
                                <td>Funkce</td>
                                <td style="text-align:center;">Upravit info</td>
                                <td style="text-align:center;">Upravit foto</td>
                                <td style="text-align:center;">Smazat </td>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            <?php
                            foreach ($database->lekari->order("id DESC") as $zaznam) {
                                ?>
                            <tr>
                            <td><img src="files/personal/thumb/<?= $zaznam['pic'] ?>" style="width:60px;"></td>
                            <td><?= $zaznam['jmeno'] ?></td>
                            <td><?= $zaznam['funkce'] ?></td>
                            <td style="text-align:center;font-size:20px;"><a href="edit-lekari?id=<?= $zaznam['id'] ?>"><i class="fas fa-cogs"></i></a>  </td>
                            <td style="text-align:center;font-size:20px;"><a href="edit-lekari-foto?id=<?= $zaznam['id'] ?>"><i class="fas fa-user-alt"></i></a>  </td>
                            <td style="text-align:center;font-size:20px;"><a href="smaz-lekari?id=<?= $zaznam['id'] ?>" onclick="return confirm('Smazat lékaře: <?= $zaznam['jmeno'] ?> ?')"><i class="fas fa-trash-alt"></i></a>  </td>
                            </tr>    
                                
                                
                                
                                <?php
                            }
                            ?>  
                            
                            
                        </tbody>
                    </table>
              
              
              
	  				</div>
            
            
       
            

		  </div>
    </div>

<?php include_once "include/footer.php"; ?>
<?php include_once "include/script.php"; ?>
  </body>
</html>