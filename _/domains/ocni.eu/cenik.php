<?php
require_once 'admin/inc/Database.php';
?>
<?php
   $zaznam = $database->cenik->fetch();
?>



<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Oční.eu - Ceník</title>
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
                <li class="active">Ceník</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <style>
    .text h3{font-size:15px;}
    .text table{margin-bottom:15px;}
    </style>
    
    <!--Quality Section-->
    <section class="quality-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title Column-->
                <div class="title-column col-md-12 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                    		<h2><span class="purple-border">Ceník výkonů</span></h2>
                        </div>
                        <div class="text col-md-8 col-sm-12 col-xs-12" style="text-align:justify;padding-left:0px;">
                        
                        
                        <?= $zaznam['obsah'] ?>
                        
                        
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
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