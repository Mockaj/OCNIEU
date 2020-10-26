<?php
require_once 'admin/inc/Database.php';
?>


<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Oční.eu - Přístrojové vybavení</title>
<?php include_once "include/head.php"; ?>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <?php include_once "include/header.php"; ?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg)">
    	<div class="auto-container">
        	<h1>„Svět je krásný, stojí za to na něj vidět.”</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Domů</a></li>
                <li class="active">Přístrojové vybavení</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Quality Section-->
    <section class="team-section grey-bg">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Přístrojové vybavení Vratimov</h2>
            </div>
            <!--End Sec Title-->
            <div class="row clearfix">
            
            
            <style>
               .contactMe{border-radius:50px;background:#f30651;color:white;padding:5px;display:inlin;width:170px;text-align:center;margin-bottom:5px;margin-left:auto;margin-right:auto;}
               .contactMe:hover{background:#222222;}
               </style>
            
            
            	<!--Team Member-->
            <?php
                            foreach ($database->pristroje->where("pracoviste = 1")->order("id DESC") as $zaznam) {
                                ?>
            	<div class="team-member col-md-3 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="admin/files/pristroje/full/<?= $zaznam['pic'] ?>" alt="" />
                        </div>
                        <div class="lower-box">
                        	<h3><?= $zaznam['nazev'] ?></h3>
                        </div>
                        <a href="pristroje?id=<?= $zaznam['id'] ?>"><div class="contactMe">Více informací</div></a>
                    </div>
                </div>
                
                 <?php
                            }
                            ?>
              </div>
              
              <div class="sec-title centered">
            	<h2>Přístrojové vybavení Frýdlant nad Ostravicí</h2>
            </div>
              
              <div class="row clearfix">
               
                            
              <?php
                            foreach ($database->pristroje->where("pracoviste = 2")->order("id DESC") as $zaznam) {
                                ?>
            	<div class="team-member col-md-3 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="admin/files/pristroje/full/<?= $zaznam['pic'] ?>" alt="" />
                        </div>
                        <div class="lower-box">
                        	<h3><?= $zaznam['nazev'] ?></h3>
                        </div>
                        <a href="pristroje?id=<?= $zaznam['id'] ?>"><div class="contactMe">Více informací</div></a>
                    </div>
                </div>
                
                 <?php
                            }
                            ?>
            
                
            </div>
        </div>
    </section>
    <!--End Team Section-->

    <!--End Quality Section-->
    
   
    
    <!--Subscribe Section-->
    <?php include_once "include/subscribe.php"; ?>
    <!--End Subscribe Section-->
    
    <!--Main Footer-->
    <?php include_once "include/footer.php"; ?>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>



<?php include_once "include/scripts.php"; ?>
</html>