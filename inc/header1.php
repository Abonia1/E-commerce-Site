<!DOCTYPE html>

<html>

<head>


<meta charset="utf-8">


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">



<link href=style.css rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="description" content="<?php

if(isset($metaD) && !empty($metaD)) { 
   echo $metaD; 
} 
else { 
   echo "Some meta description"; 
} ?>" />

<title><?php 
if(isset($title) && !empty($title)) { 
   echo $title; 
} 
else { 
   echo "Default title tag"; 
} ?></title>
<link rel="icon" href="img\E.jpg" type="image/png">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/secteur.css">
<link rel="stylesheet" type="text/css" href="css/sec.css">
</head>

<body>

<header>

 <nav class="navbar navbar-default" role="navigation" id="navigation" >
      
<div class="bannercontainer">
        
        <div class="navbar-header" style="height: 80px">
            <button style="height: 40px;background-color: #2eb2ff;color: white;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <h3 style="height: 40px;margin: 10px;padding: 0;"><a class="navbar-brand" href="index.php"><img src="img\enzynovfinalnewcolorscropped.jpg" style="margin:0;padding:0;width: 100%;height: 100%;text-align: top"></a></h3>
        </div>

        <div class="collapse navbar-collapse" id="navbarCollapse" id="navigation" style="float: right;display:inline-block;">
           
      
    <ul class="nav navbar-nav " style="display: inline-block;">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="index.php#anchor-entreprise">L'entreprise</a></li>
      <li><a href="index.php#anchor-service">Services</a></li>
      <li><a href="secteur.php">Nos Secteurs</a></li>
      <li><a href="index.php#anchor-chiffres">Chiffres clés</a></li>
      <li><a href="index.php#anchor-témoignages">Témoignages</a></li>
     <li><a href="https://www.flipsnack.com/Enzynov/enzynov-eco-solutions-enzymatiques-catalogue-2017-fdzhmvby9.html">Catalogue</a></li>
     <li><a href="http://www.enzyblog.enzynov.fr/">Blog</a></li>
     <li><a href="contact.php">Contact</a></li>
   </ul>
  
  </div>
  <script type="text/javascript">
  	$('ul.nav').find('a').click(function(){
    var $href = $(this).attr('href');
    var $anchor = $('#'+$href).offset();
    // window.scrollTo($anchor.left,$anchor.top);
    $('body').animate({ scrollTop: $anchor.top });
    return false;
});
  </script>
</nav>

</header>

<div class="container-fluid" style="width: 100%;">
	
		<div class="row-fluid">
		<div class="span2" style="height: 100%;width:20%;float: left;">

  <aside id="access" style="float: left;height: 100%;width: 25%;position: fixed;padding: 10px;">



<ul  class="menu">
<li class="menu-item">
<a href="sec.php#anchor-btp">BÂTIMENT ET TRAVAUX PUBLICS</a>
</li>
<li class="menu-item">
<a href="sec.php#anchor-erp">ERP</a>
</li>
<li class="menu-item">
<a href="sec.php#anchor-cus">CUISINE PROFESSIONNELLE</a>
</li>
<li class="menu-item">
<a href="sec.php#anchor-gar">GARAGES ET PARKINGS</a>
</li>
<li class="menu-item">
<a href="sec.php#anchor-sur">GRANDES ET MOYENNES SURFACES</a>
</li>
<li class="menu-item">
<a href="sec.php#anchor-ind">INDUSTRIES</a>
</li>
<li class="menu-item">
<a href="sec.php#anchor-nau">NAUTIQUE</a>
</li>
<li class="menu-item">
<a href="sec.php#anchor-pet">SECTEUR PÉTROLIER</a>
</li>
<li class="menu-item">
<a href="sec.php#anchor-tra">TRANSPORTS</a>
</li>
</ul>


<!-- <script type="text/javascript"> 
  	$('ul.aside').find('a').click(function(){
    var $href = $(this).attr('href');
    var $anchor = $('#'+$href).offset();
    // window.scrollTo($anchor.left,$anchor.top);
    $('body').animate({ scrollBottom: $anchor.Bottom });
    window.scroll(0,document.querySelector(this.href).offsetTop - 1);
    return false;
});
  </script>-->
  <!-- <video>
    <source src="video\Tous unis pour Clem.mp4" type="mp4/video">
 

</video> -->

<iframe width="500" height="250"  src="https://www.youtube.com/embed/0wYSviHeRbs?list=PLj0e8MQM8M-O65xFysdNbApdqwiHndqrR" frameborder="0" allowfullscreen></iframe>
</aside></div>



