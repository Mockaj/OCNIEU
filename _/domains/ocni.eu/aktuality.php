<?php
require_once 'admin/inc/Database.php';
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Oční.eu - Aktuality</title>
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
                <li class="active">Aktuality</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <section class="blog-page-section" style="padding-top:10px;">
    	<div class="auto-container">
        	
            
           <div class="row clearfix">
           
           <h4 style="display:block;background:#f3205d;padding:8px;color:white;margin:15px;">Doporučené články</h4>
               
               <?php
                            foreach ($database->novinky->where("topovani = 1")->order("datum DESC") as $zaznam) {
                                ?> 
                                
                                <?php
                        $text = $zaznam['obsah'];
                        $limit = "50";
                        ?>
                
                <!--News Block Three-->
                
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image" style="width:100%;height:200px;background-image:url('admin/files/clanky/thumb/<?= $zaznam['pic'] ?>');background-repeat: no-repeat;background-size: cover;">

                        </div>
                        <div class="lower-box">
                            
                            <h3><?= substr($zaznam['nadpis'], 0, 35) ?>...</h3>
                            <p class="fontresize"> <?php
if (strlen($text) <= $limit) {
    echo $text;
} else {
    $text = substr($text, 0, $limit+1);
    $pos = strrpos($text, " "); // v PHP 5 by se dal použít parametr offset
    echo substr($text, 0, ($pos ? $pos : -1)) . "...";
}
?></p>
                            <a href="clanek?id=<?= $zaznam['id'] ?>" class="read-more">Zobrazit článek</a>
                        </div>
                    </div>
                </div>
                
               <?php
                            }
                            ?>
 
            </div>
           
           
           
            <!--Klasicke prispevky-->
            
            <div class="row clearfix">
            <h4 style="display:block;background:#f3205d;padding:8px;color:white;margin:15px;">Všechny články</h4>
               
               <?php
                            foreach ($database->novinky->where("topovani = 0")->order("datum DESC") as $zaznam) {
                                ?> 
                                
                                <?php
                        $text = $zaznam['obsah'];
                        $limit = "40";
                        ?>
                
                <!--News Block Three-->
                
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image" style="width:100%;height:200px;background-image:url('admin/files/clanky/thumb/<?= $zaznam['pic'] ?>');background-repeat: no-repeat;background-size: cover;">

                        </div>
                        <div class="lower-box">
                            
                            <h3><?= substr($zaznam['nadpis'], 0, 35) ?>...</h3>
                            <p class="fontresize"> <?php
if (strlen($text) <= $limit) {
    echo $text;
} else {
    $text = substr($text, 0, $limit+1);
    $pos = strrpos($text, " "); // v PHP 5 by se dal použít parametr offset
    echo substr($text, 0, ($pos ? $pos : -1)) . "...";
}
?></p>
                            <a href="clanek?id=<?= $zaznam['id'] ?>" class="read-more">Zobrazit článek</a>
                        </div>
                    </div>
                </div>
                
               <?php
                            }
                            ?>
 
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