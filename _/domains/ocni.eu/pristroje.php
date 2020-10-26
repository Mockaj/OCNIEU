<?php
require_once 'admin/inc/Database.php';
?>
<?php
    $zaznam = $database->pristroje->where("id", $_GET['id'])->fetch();
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title><?= $zaznam['nazev'] ?> - Oční.eu</title>
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
                <li><a href="aktuality">Zpět na výpis aktualit</a></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <section class="blog-page-section">
    	<div class="auto-container">
        	
            <div class="row clearfix">
                
                <!--News Block Three-->
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="admin/files/pristroje/full/<?= $zaznam['pic'] ?>" alt="" />
                        </div>
                    </div>
                </div>
                
                <style>
                .detailAkt h2{color:#f30651;}
                .detailAkt li{list-style-type: disc;list-style-position: outside;margin-left:20px;}
                </style>
                
                <div class="col-md-8 col-sm-6 col-xs-12 detailAkt">
                  <h2><?= $zaznam['nazev'] ?></h2>
                  <p><?= $zaznam['obsah'] ?></p>
                </div>
              
 
 
            </div>
        </div>
    </section>
    <!--End Blog Page Section-->

    
   
    
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