<?php
require_once 'admin/inc/Database.php';
?>


<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<title>Oční.eu - Fotogalerie</title>
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
                <li class="active">Fotogalerie</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
   <section class="project-section">
    	<div class="auto-container">
        	<!--Section Title-->
        	<div class="sec-title centered">
            	<h2>Podívejte se na naši <span>galerii</span></h2>
                <div class="text">Níže naleznete fotohragrafie z našich dvou očních ambulancí, meetingů a také mnoho dalšího.</div>
            </div>
            
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <div class="filters text-center clearfix">
                	
                	<ul class="filter-tabs filter-btns clearfix">
                        <!--<li class="active filter" data-role="button" data-filter="all">Vše</li>-->
                        <li class="active filter" data-role="button" data-filter=".1">Oční ambulance Vratimov</li>
                        <li class="filter" data-role="button" data-filter=".2">Oční ambulance Frýdlant n.O.</li>
                        <li class="filter" data-role="button" data-filter=".3">Ostatní</li>
                    </ul>
                    
                </div>
                
                <div class="filter-list row clearfix">
					
               
               <?php
                            foreach ($database->galerie_zakroky->order("id DESC") as $zaznam) {
                                ?>
               
                   <!--Gallery Block-->
                    <div class="gallery-block mix col-lg-3 col-md-3 col-sm-6 col-xs-12 <?= $zaznam['kategorie'] ?>">
                        <div class="inner-box">
                            <figure class="image-box">
                            	
                                <div style="height:200px;background: url(admin/files/galerie/thumb/<?= $zaznam['pic'] ?>);background-repeat: no-repeat;background-size:cover;background-position: center;"></div>
                                <div class="overlay-box">
                                	<div class="overlay-inner">
                                        <div class="content">
                                            <a href="admin/files/galerie/full/<?= $zaznam['pic'] ?>" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title="<?= $zaznam['popis'] ?>"><span class="fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                                
                            </figure>
                            <p style="text-align:center;font-size:12px;"><?= $zaznam['popis'] ?></p>
                        </div>
                    </div>
                    
                 <?php
                            }
                            ?>
                    
                </div>
            </div>
            <br>
            
        </div>
    </section>
    <!--End Project Section-->

    
   
    
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