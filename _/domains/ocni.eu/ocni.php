<?php
require_once 'admin/inc/Database.php';
?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
<title>Oční.eu - Oční a estetické centrum</title>

<?php include_once "include/head.php"; ?>
</head>

<body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel" style="color:#CE5FFE;font-weight: bold">COVID-19 Update</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                Provoz nepřerušen, dodržujeme nejpřísnější hygienická opatření a fungujeme v běžném režimu. Těšíme se na Vaši návštěvu :-)
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#exampleModal").modal('show');
    });
</script>








<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <?php include_once "include/header.php"; ?>
    <!--End Main Header -->
    
    <!--Main Slider-->
    <section class="main-slider">
    	
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
              <ul>
                	
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/image-1.jpg"> 
                    
                    <!--<div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['700','800','700','500']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-90','-100','-90','-80']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;">
                    	<div class="title text-center">Vítejte na stránkách</div>
                    </div>  -->
                    
                    <!--<div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['900','800','800','500']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-20','-20','-30','-20']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;">
                    	<div class="text-center"><h1>Oční.eu s.r.o.</h1></div>
                    </div> -->
                    
                   <!-- <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['800','800','680','500']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['70','60','40','50']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;">
                    	<div class="text-center">
                    		<div class="text"><span
                                           class="txt-rotate"
                                           data-period="1000"
                                           data-rotate='[ "profesionální přístup", "přátelský personál", "dlouholetá tradice", "kvalitní vybavení", "odborná péče" ]'></span></div>
                        </div>
                    </div>  -->
                    
                    </li>
                    
                                        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="images/main-slider/image-2.jpg"> 
                    </li>
                    
                    
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    
    <style>
    a.mobLink{background:#f4135a;text-align:center;display:block;color:white;padding:8px;margin:1px;}
    </style>
    
    <section class="we-do-section fastNumber" style="padding-top:30px;">
      <div class="auto-container">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <a href="tel:731505511" class="mobLink"><i class="fas fa-phone" style="margin-right:5px;"></i> Oční Vratimov</a>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <a href="tel:607059353" class="mobLink"><i class="fas fa-phone" style="margin-right:5px;"></i> Oční Frýdlant</a>
        </div>
      </div>
    </section>
    

    <!--We Do Section-->
    <section class="we-do-section grey-bg">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title Column-->
            	<div class="title-column col-md-6 col-sm-12 col-xs-12">
                	<div class="sec-title">
                    	<h2 style="color:#f30651;">Vítáme Vás na stránkách společnosti OČNÍ EU s.r.o.</h2>
                    </div>
                    
                    <style>
                    .btn-style-one{background:white;color:black;}
                    </style>
                      
                    
                    <div class="text" data-t-show="3" style="text-align:justify;">
                    <p style="font-weight:900;"><strong>
                    Jsme ambulantní oftalmologické pracoviště s akreditací Ministerstva zdravotnictví ČR pro vzdělávání lékařů.
                    </strong></p>
                    <p>Obě oční ambulance jsou nadstandardně vybaveny a pacientům nabízejí komplexní oční vyšetření, včetně OCT s HD zobrazením a perimetrické vyšetření na špičkovém přístroji Humphrey.</p>
                    <p>Naši lékaři jsou připraveni ošetřit dospělé i dětské pacienty, mají dlouholetou praxi s diagnostikou a léčbou očních chorob, včetně léčby dětské tupozrakosti a šilhání.</p>
                    
                    </div>
                    <a href="o-nas" class="theme-btn btn-style-one"><i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;číst dále</a>
                </div>
                <!--Services Column-->
                <div class="services-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                        <div class="row clearfix">
                        
                            <div class="services-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box " data-t-show="1">
                                	<a href="kontakt" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <i class="fas fa-map-marker"></i>
                                    </div>
                                    <h3>Vratimov</h3>
                                    <p>
                                    Mob.: 731 505 511<br>
                                    Tel.: 596 733 442<br>
                                    E-mail: vratimov@ocni.eu
                                    </p>
                                </div>
                            </div>
                            
                            <div class="services-block col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box " data-t-show="2">
                                	<a href="kontakt" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <i class="fas fa-map-marker"></i>
                                    </div>
                                    <h3>Frýdlant nad O.</h3>
                                    <p>
                                    Mob.: 607 059 353<br>
                                    Tel.: 558 432 939<br>
                                    E-mail: frydlant@ocni.eu
                                    </p>
                                </div>
                            </div>
                            
                            <div class="services-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box" data-t-show="3">
                                	<a href="virtualni-prohlidka" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <h3>Virtuální prohlídka</h3>
                                </div>
                            </div>
                            
                            <div class="services-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box" data-t-show="4">
                                	<a href="hodnoceni" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h3>Hodnocení lékařů</h3>
                                </div>
                            </div>
                            
                            <div class="services-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box" data-t-show="5">
                                	<a href="aktuality" class="overlay-link"></a>
                                    <div class="icon-box">
                                        <i class="far fa-newspaper"></i>
                                    </div>
                                    <h3>Aktuality</h3>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End We Do Section-->
    

    <!--News Section-->
    <section class="news-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title">
            	<h2><span>NEJNOVĚJŠÍ ČLÁNKY</span></h2>
            </div>
            <div class="row clearfix">
            	
               <?php
                            foreach ($database->novinky->order("datum DESC")->limit(3) as $zaznam) {

                               ?> 
                               
                               
                               <?php
                        $text = $zaznam['obsah'];
                        $limit = "80";
                        ?>
                               
                               
                                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	
<div class="image" style="width:100%;height:200px;background-image:url('admin/files/clanky/thumb/<?= $zaznam['pic'] ?>');background-repeat: no-repeat;background-size: cover;">

                        </div>
                        <h3><?= substr($zaznam['nadpis'], 0, 35) ?>...</h3>
                        <p><?php
if (strlen($text) <= $limit) {
    echo $text;
} else {
    $text = substr($text, 0, $limit+1);
    $pos = strrpos($text, " "); // v PHP 5 by se dal použít parametr offset
    echo substr($text, 0, ($pos ? $pos : -1)) . "...";
}
?></p>
                        <p><a href="clanek?id=<?= $zaznam['id'] ?>" class="read-more">Zobrazit článek</a></p>
                    </div>
                </div>

                
              
                
               <?php
                            }
                            ?>
                            
                            
             
                
                
            </div>
        </div>
    </section>
    <!--End News Block-->

    
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

  
  
  
  





<script src="https://lekarskaestetika.cz/assets/js/jquery.bpopup.min.js"></script>
<script>
//$( document ).ready(function() {
//    $('#popup_this').bPopup();
//});
</script>

<!-- <div id="popup_this">
    <span class="button b-close">
        <span>X</span>
    </span>
    <h3 style="color:black;font-weight:600;">Upozornění!</h3>
    <p>Pracoviště Oční EU je otevřeno denně od 8.00 do 12.00 hod.<br><br> 

Zavedli jsme delší časové intervaly mezi jednotlivými pacienty, aby se v čekárně nepotkávali, chod ambulance je naprosto plynulý a bez časových prodlev. Z hygienických a bezpečnostních důvodů v tomto období jsou pacientům k dispozici 2 čekárny.
<br><br>
Naše pracoviště splňuje nejpřísnější hygienická nařízení vydané Ministerstvem zdravotnicví ČR v rámci zamezení šíření corona viru, jsme vybaveni veškerými ochrannými pomůckami a nejúčinnější dezinfekcí.
<br><br>
V případě potřeby je možná také telefonická konzultace.
<br><br>
Bezpečí zaručeno, těšíme se na Vás.</p>

</div> -->

<style>
#popup_this {
    top: 30%;
    left: 50%;
    max-width:700px;
    text-align:center;
    margin-top: -50px;
    margin-left: -100px;
    position: fixed;
    background: #fff;
    padding: 30px;
    z-index:9999;
}
.b-close {
    position: absolute;
    right: 0;
    top: 0;
    cursor: pointer;
    color: #fff;
    background: #ff0000;
    padding: 5px 10px;
}
</style> 
              

</body>
</html>