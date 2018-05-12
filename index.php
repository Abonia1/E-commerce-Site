
<?php
$page="Enzynov";
$title = "Enzynov";

$metaD = "Accueil";
include '/inc/header.php';?>


<div class="container-fluid"  style="width:100%;padding-top: 50px;">
  <!-- <h2>Carousel des images Enzynov</h2>   -->
  <div id="myCarousel"  align="center" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner"> 
      <!-- img1 -->
       <div class="item-active"> 
      <img src="img\iStock120274510.jpg" alt="enzyimg1"  class="img-responsive center-block"  style="width:1903px;height:590px; margin:0 auto; overflow: hidden">
      
      <div class="carousel-caption">
      <h3><img src="img\enzynovblanc.png"></h3>
      
       <h3 class="toggleHeading"> <span style="color: #EDEA66;">Révolutionner</span> le Néttoyage</h3>
       <input type="button" class="toggleCaption" class="btn btn-info btn-lg" value="Accéder à notre&#13;&#10;Catalogue" onclick="location.href = 'https://www.flipsnack.com/Enzynov/enzynov-eco-solutions-enzymatiques-catalogue-2017-fdzhmvby9.html';"/>
       </div>
       </div>
      
      <!-- img2 -->
      <div class="item">
        <img src="img\iStock510867541.jpg" alt="enzyimg2" class="img-responsive center-block" style="width:1903px;height:590px;margin:0 auto;overflow: hidden">
      
      <div class="carousel-caption">
        <h3><img src="img\enzynovblanc.png" ></h3>
      <h3 class="toggleHeading"><span style="color: #EDEA66;"> Découvrez</span> la Propreté Enzymatique</h3>
      
      <input type="button" class="toggleCaption" class="btn btn-info btn-lg" value="Consulter Notre Secteurs" onclick="location.href = 'secteur.php';">
       </div>
       </div>

  <script type="text/javascript">
    var carouselContainer = $('.carousel');
    var slideInterval = 5000;

        function toggleH(){
            $('.toggleHeading').hide()
            var caption = carouselContainer.find('.active').find('.toggleHeading').addClass('animated dropInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
                function (){
                $(this).removeClass('animated InRight')});
        caption.slideToggle();
        }

        function toggleC(){
            $('.toggleCaption').hide()
            var caption = carouselContainer.find('.active').find('.toggleCaption').addClass('animated dropInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
                function (){
                $(this).removeClass('animated dropInRight')
        });
        caption.slideToggle();
        }
    carouselContainer.carousel({
    interval: slideInterval, cycle: true, pause: "hover"})
    .on('slide.bs.carousel slid.bs.carousel', toggleH).trigger('slide.bs.carousel')
    .on('slide.bs.carousel slid.bs.carousel', toggleC).trigger('slide.bs.carousel');
     </script>

      <!-- img3 -->
      <div class="item">
        <img data-animation="animated bounceInRight" src="img\iStock522746284.jpg" alt="enzyimg3" class="img-responsive center-block" style="width:1903px;height:590px;margin:0 auto;overflow: hidden">
      <div class="carousel-caption" class="animated rotateIn" >
      <h3><img src="img\enzynovblanc.png"></h3>
      <h3>La Force De La Nature à Portée De Main</h3>
      <input type="button" class="btn btn-info btn-lg"  value="Démendez Une Demonstration" onclick="location.href = 'index.php#anchor-contact';">
      </div>
      </div>
     

      <!-- img4 -->
      <div class="item">
        <img src="img\boat.jpg" alt="enzyimg4" class="img-responsive center-block" style="width:1903px;height:590px;margin:0 auto;overflow: hidden">
      
      <div class="carousel-caption">

        <div style="width: 100%">
        <div style="height:100%;width: 40%; float:left;display: block;text-align: center;margin: 50px;padding:100px;line-height: 100px;">
      <p> 
      <span style="font-size: 35px;display:block;">Cap sur la Propreté!</span>
      <span style="color: #34448B;font-size: 25px;">Nettoyant Universel</span>
      <span><input type="button" style="height: 50px;" class="btn btn-info btn-lg" value="Télécharger la Plaquette" onclick="location.href = 'file/PLAQUETTE-NAUTIQUE.pdf';" ></span></p>
      </div>
       <div  style="height: 100%; width: 40%;float: right;display: block;text-align: center;margin: 0px;padding:100px;">

      <p>
      <span style="color: #34448B;font-size: 35px;display: block;padding: 0">EnzyMarine</span>
      <span style="font-size: 30px;color: red;padding: 0">Nouvelles Formules</span>
      <span><img style="height:70%;width:20%;background-size: contain;" src="img\enzymarine_produit.PNG" ></span></p>
      </div> 
      </div>
      </div>
       </div>
   
  <!-- img5 -->
   <div class="item">
        <img src="img\bureau1030x418.jpg" alt="enzyimg5" class="img-responsive center-block" style="width:1903px;height:590px;margin:0 auto;overflow: hidden">
      <div class="carousel-caption" style="max-width: 100%;height: 100%">
<div style="width: 30%;float: left;" class="toggleCaption">
 <img src="img\tablette_floue.png"  style="padding-bottom: 0; background-size: contain; width: 80%;height: 80%;float: right;"> 
</div>
<div style="width:30%;float: right;" class="toggleCaption">
<img src="img\smartphone_flou.png"  style="background-size: contain; width: 80%;height: 80%;float: left;">   
</div>
<div style="width: auto;float: center;display: block;padding: 20px;" class="toggleCaption">
  <h3 style=";font-size: 100%;color:#34448B;float:center;text-align: center ">Enzynov Experience</h3>
  <p><span style="font-size: 25px;display: block;padding: 0"><strong>Nettoyer Votre tâches? </span> <span style="font-size: 25px;display: block;padding: 0"> Un jeu d'enfant avec notre application</strong></span>

 <span style="font-size: 20px;float:center;color: #34448B"><strong>Disponible prochainement sur smartphone et tablette</strong></span></p>
</div>
      </div>
    </div>
  </div>

   <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- entreprise -->
<div class="container" id="anchor-entreprise" style="background-color: white;position: auto;line-height: 10px">
  <h4 style="text-align: center;color:#2eb2ff;font-size: 30px;font-weight: bolder;padding: 50px 0 20px 0 ">Une gamme enzymatique pour nettoyage professionnel<br><br></h4>
   <p style="text-align: center;color:black;font-size: 18px;line-height: 35px;margin: auto;padding: 0 0 50px 0">
Entreprise française dans l’âme, ENZYNOV propose des solutions puissantes et efficaces pour révolutionner l’entretien. Notre mission ? Allier qualité, innovation et biologie, placer la santé et la performance au cœur de notre stratégie. Chaque jour, nos experts veillent à la santé de vos équipes et de vos clients en élaborant de nouvelles solutions enzymatiques pour le nettoyage de vos espaces. N’hésitez plus et contactez-nous pour une démonstration d’un produit qui respecte votre éthique !
</p>
</div>

<!-- service -->
<div id="anchor-service">
<div class="container-fluid"   style="display: inline-table;background-color: #2eb2ff;width: 100%;height: 30%;"> 
<h4 style="padding-top: 30px;text-align: center;font-size: 30px;font-weight: bolder;color: white;">Un accompagnement de A à Z</h4><br style="line-height: 80px;">

<div class="conatiner">
   <div class="row" align="center">
    <div class="col">
      <div class="fa fa-eyedropper" style="font-size:60px;color:#9FD700;border-style: none;border:solid;background-color: white;border-radius: 2px"></div>
        <h3 style="padding-top: 50px;text-align: center;font-size: 20px;font-weight: bolder;color: white;">État des lieux de vos besoins</h3> 
    </div>
    <div class="col">
     <div class="fa fa-book" style="font-size:60px;color:#9FD700;border:solid;border-style: none;background-color: white; border-radius: 2px"></div>
        <h3 style="padding-top: 50px;text-align: center;font-size: 20px;font-weight: bolder;color: white;">Formation à l’utilisation</h3>
    </div>
    <div class="col">
     <i class="fa fa-truck" style="font-size:60px;color:#9FD700;border:solid;border-style: none;background-color: white;border-radius: 2px"></i>
     <h3 style="padding-top: 50px;text-align: center;font-size: 20px;font-weight: bolder;color: white;"> Distribution </h3>
    </div>
  </div></div></div>

<!-- <div id="anchor-service">
 <div class="container-fluid";  style="display: inline-table;background-color: #2eb2ff;width: 100%;height: 30%;"> 
<h4 style="padding-top: 90px;text-align: center;font-size: 30px;font-weight: bolder;color: white;">Un accompagnement de A à Z</h4><br style="line-height: 80px;">


<div class="container" class="clearfix" style="width: 50%;padding: 0 0 20px 0">

<table class="center-table" class="clearfix" style="width:100%">
  <tr align="center" >
    <td align="center"> <i class="fa fa-eyedropper" style="font-size:60px;color:#9FD700;border-style: none;border:solid;background-color: white;border-radius: 2px"></i></td>
    <td align="center"><i class="fa fa-book" style="font-size:60px;color:#9FD700;border:solid;border-style: none;background-color: white; border-radius: 2px"></i></td> 
    <td align="center"><i class="fa fa-truck" style="font-size:60px;color:#9FD700;border:solid;border-style: none;background-color: white;border-radius: 2px"></i></td>
  </tr>
  <tr align="center">
    <td><h3 style="padding-top: 50px;text-align: center;font-size: 20px;font-weight: bolder;color: white;">État des lieux de vos besoins</h3> </td>
    <td>
         <h3 style="padding-top: 50px;text-align: center;font-size: 20px;font-weight: bolder;color: white;">Formation à l’utilisation</h3></td>
    <td><h3 style="padding-top: 50px;text-align: center;font-size: 20px;font-weight: bolder;color: white;"> Distribution </h3></td>
  </tr>
  
</table>
</div>
</div>-->


<!-- service -->

<div class="container">
<div class="grid" style="padding-top: 30px;">
<div class="row" style="padding-bottom:50px;">
    <div class="col-xs-4">
        
         <article class="caption">
        <img class="caption__media" src="img\c38fea50b123cddf0ba2ba75adf2635020c6e4bd.jpg" class="img-responsive" />
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Plateformes pétrolières</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article>
    </div>
    <div class="col-xs-4">
      <article class="caption">
        <img class="caption__media" src="img\iStock476747096.jpg" >
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Cuisines industrielles</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article>  
    </div>
    <div class="col-xs-4">
      <article class="caption">
        <img class="caption__media" src="img\cb53b8e40be224136e50bc724a8bdc608870ed71.jpg" >
        <div class="caption__overlay">
            <h1 class="caption__overlay__title">Surfaces accueillant du public</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article>  
    </div>
</div>
</div></div>
<div class="container">
  <div class="grid">
<div class="row">
    <div class="col-xs-4">
     <article class="caption">
        <img class="caption__media" src="img\iStock476747096.jpg">
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Machines industrielles</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article>   
    </div>
    <div class="col-xs-4">
       <article class="caption">
        <img class="caption__media" src="img\iStock476747096.jpg" >
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Équipements et outils de travaux</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article>
    </div>
    <div class="col-xs-4">
     <article class="caption">
        <img class="caption__media" src="img\iStock476747096.jpg" >
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Ateliers et garages</h1>
            <p class="caption__overlay__content">
              Programmation spécifique pour désencrasser

            </p>
        </div>
    </article>  
    </div>
</div>
</div>
</div>
<!-- <div class="container-fluid" style="height:100%;width: 100%;"> 
<table class="center-table" style="width:100%;" id="service">
  <tr>
      <td style="padding:0 15px 80px 200px;"><article class="caption">
        <img class="caption__media" src="img\c38fea50b123cddf0ba2ba75adf2635020c6e4bd.jpg">
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Plateformes pétrolières</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article></td><br><br>

   <td style="padding:0 15px 80px 15px;"><article class="caption">
        <img class="caption__media" src="img\iStock476747096.jpg" >
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Cuisines industrielles</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article></td><br><br>
    <td style="padding:0 200px 80px 15px;"><article class="caption">
        <img class="caption__media" src="img\cb53b8e40be224136e50bc724a8bdc608870ed71.jpg" >
        <div class="caption__overlay">
            <h1 class="caption__overlay__title">Surfaces accueillant du public</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article></td><br><br>
  </tr>

  <tr>
      <td style="padding:0 15px 15px 200px;"><article class="caption">
        <img class="caption__media" src="img\iStock476747096.jpg">
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Machines industrielles</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article></td><br><br>

   <td style="padding:0 15px 15px 15px;"><article class="caption">
        <img class="caption__media" src="img\iStock476747096.jpg" >
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Équipements et outils de travaux</h1>
            <p class="caption__overlay__content">
                Programmation spécifique pour nettoyer
            </p>
        </div>
    </article></td><br><br>
    <td style="padding:0 200px 15px 15px;"><article class="caption">
        <img class="caption__media" src="img\iStock476747096.jpg" >
        <div class="caption__overlay">
            <h1 class="caption__overlay__title"> Ateliers et garages</h1>
            <p class="caption__overlay__content">
              Programmation spécifique pour désencrasser

            </p>
        </div>
    </article></td><br><br>
  </tr>
    </table>
  </div>
   </div>--> 
    
  <!-- end of service section --> 




<!-- Quelque chiffres clés -->

  
  <div class="container"  id="anchor-chiffres" style="height: 20%;width: 100%;text-align: center;padding-top: 30px;"> 
    <div class="grid" id="chiffres" style="display: inline-block;width: 100%;
       ">
  <h3 style="width: 100%;height: 10%;color: #9FD700;font-size: 30px;font-weight: bolder;text-align: center;">Quelque chiffres clés</h3>
  <div class="row">
  <div class="col-2-8"  id="chiffres" style="padding:0px 30px 30px 30px;display: block;">
   <h3 class="fa fa-flask" ></h3>
      <h4><strong style="color:#9FD700;font-size: 30px">97</strong> %</h4>
      <p style=" text-align:block;">de nos produits enzymatiques<br> sont plus efficaces que leurs<br> équivalents chimiques</p> 
  </div>
  <div class="col-2-8"  id="chiffres" style="padding:0px 30px 30px 30px;display: block;">
    <h3 class="fa fa-hourglass-2"></h3>
      <h4><strong style="color:#9FD700;font-size: 30px">30</strong> ans</h4>
      <p>de recherche en laboratoire</p>
  </div>
  <div class="col-2-8"  id="chiffres" style="padding:0px 30px 30px 30px;display: block;">
   <h3 class="fa fa-crosshairs"></h3>
      <h4><strong style="color:#9FD700;font-size: 30px">5</strong> millions de <br>germes éliminés</h4>
      <p>contre 1 million pour <br>les produits bactéricides<br> du marché</p> 
  </div>
  <div class="col-2-8"  id="chiffres" style="padding:0px 30px 30px 30px;display: block;"">
   <h3 class="fa fa-book"></h3>
      <h4><strong style="color:#9FD700;font-size: 30px">1</strong> Protocol</h4>
      <p>Enzymax 36 qui a fait<br> ses preuves sur des<br> milliers d’applications</p> 
  </div>
</div>
</div>
</div>

<!-- <div class="container" id="anchor-chiffres" style="height: 60%;width: 100%"> 
  <h3 style="width: 100%;height: 10%;color: #9FD700;font-size: 30px;font-weight: bolder;text-align: center;padding: 30px;margin: 0">Quelque chiffres clés</h3>
 <table class="center-table" style="padding-top: 0;">
   <tr id="chiffres">
    <td align="center" style="padding:30px 30px 30px 30px;display: block;">
      <h3 class="fa fa-flask" ></h3>
      <h4><strong style="color:#9FD700;font-size: 30px">97</strong> %</h4>
      <p>de nos produits enzymatiques sont plus efficaces que leurs équivalents chimiques</p>
    </td>
    <td align="center" style="padding:30px 30px 30px 30px">
      <h3 class="fa fa-hourglass-2"></h3>
      <h4><strong style="color:#9FD700;font-size: 30px">30</strong> ans</h4>
      <p>de recherche en laboratoire</p>
    </td>
    <td align="center" style="padding:30px 30px 30px 30px">
      <h3 class="fa fa-crosshairs"></h3>
      <h4><strong style="color:#9FD700;font-size: 30px">5</strong> millions de germes éliminés</h4>
      <p>contre 1 million pour les produits bactéricides du marché</p>
    </td>
    <td align="center" style="padding:30px 30px 30px 30px">
      <h3 class="fa fa-book"></h3>
      <h4><strong style="color:#9FD700;font-size: 30px">1</strong> Protocol</h4>
      <p>Enzymax 36 qui a fait ses preuves sur des milliers d’applications</p>
    </td>
   </tr>
 </table>
</div>-->

<!-- carousel 2 -->
<div class="container-fluid" id="anchor-témoignages" align="center" style="width:90%;height: 100%;margin: 0,auto">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:50%";>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  
  <div class="carousel-inner">
    <div class="item active">
      <img src="img\Capture2.PNG" alt="" class="img-responsive center-block" style="width:100%;height:70%;overflow: hidden;opacity: 0.7">
      <div class="carousel-caption" style="color: black;display:block";>
        <h4 style="font-size: 29px;font-weight: bolder; color:black;">Ils nous ont fait confiance</h4><br style="line-height: 50px">
        <p style="text-align: center;font-size: 23px;text-align: top"><i class="fa fa-quote-left" aria-hidden="true"></i> Nous avons plusieurs fois fait appel à ENZYNOV pour des chantiers un peu compliqués. Leurs produits sont vraiment efficaces, faciles d’utilisation et à un tarif vraiment concurrentiel. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
        <h2 style="font-size:20px;"><strong>Frédéric - Directeur Achats BTP</strong></h2>
    </div>
  </div>

    <div class="item">
      <img src="img/Capture2.PNG" alt="" class="img-responsive center-block" style="width:100%;height:80%;opacity: 0.7">
      <div class="carousel-caption" style="color: black;display:block";>
        <h4 style="font-size: 29px;font-weight: bolder; color:black;line-height: 100px">Ils nous ont fait confiance</h4>
        <p style="text-align: center;font-size: 23px;" > <i class="fa fa-quote-left" aria-hidden="true"></i> J’apporte beaucoup d’importance aux conditions dans lesquelles travaillent mes employés. Quand j’ai appris que les produits d’ENZYNOV étaient sans danger pour la santé et 100% biologiques, je n’ai pas hésité un instant à changer de fournisseur. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
        <h2 style="font-size:20px;"><strong>Jacques - Chef d’entreprise de nettoyage industriel</strong> </h2>
    </div>
    </div>
    </div>


  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>



   <div class="container-fluid">
    <div id="sentence-wrapper">
                <h2 class="sentence" style="text-align: center;padding: 0 0 90px 0">
                    <span style="font-size: 40px;text-align: center;padding: 70px 0 70px 0;font-family: Times New Roman;color:black ">Notre</span>
                   
                 <div  class="words words-1" style="text-align: center;">
                 <span style="color: #9FD700;font-size: 40px;text-align: center"> humanité</span>
                        <span style="color: #9FD700;font-size: 40px;text-align: center;">ambition</span>
                        <span style="color: #9FD700;font-size: 40px;display: inline-block;text-align: center">sens de l’effort </span>
                      
                    </div>
                    <span style="font-size: 40px;text-align: left;padding: 70px 0 70px 0;font-family: Times New Roman;color:black "> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  est au cœur de nos innovations</span>
                    
                </h2>
            </div>
          </div>
  
<!-- map -->
<div id="anchor-contact">
<div class="container-fluid" style="width: 100%;">
  <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2616.2922454714108!2d2.1161296156802574!3d49.024048479304085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f4d9ea701753%3A0x9ef1777390ba2a86!2sADMS+Enzynov!5e0!3m2!1sfr!2sfr!4v1507043515475" width="1000" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<!-- contact-->
<div class="container" >
  <h1 style="text-align: center;font-size: 40px;color:#2eb2ff;padding: 50px 0 0 0">Obtenez une démonstration</h1>
<table class="center-table" align="center" style="padding: 50px 0 50px 0">
  <tr>
    <td style="padding:50px 50px 50px 0px;" >
   
 <div class="container">
  <fieldset>
  <form action="thankyou.php" method="post">
  

   <label for="tel">NOM</label>
    <input type="text" id="nom" name="nom" placeholder="Votre Nom.." required="true" >

    <label for="tel">TÉLÉPHONE</label>
    <input type="text" id="tel" name="telephone" placeholder="Votre Numéro.." required="true" >                      
    <label for="email">EMAIL</label>
    <input type="email"  placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
    <p class="help-block text-danger"></p>
     
     
                          
    <label for="subject">SECTEUR CONCERNÉ</label>
    <select id="subject" name="subject" style="color:#2eb2ff ">
    <option value="Bâtiment et Travaux Publics">Bâtiment et Travaux Publics</option>
      <option value="Collectivités et Hôtellerie">Collectivités et Hôtellerie</option>
      <option value="Cuisine Professionnelle">Cuisine Professionnelle</option>
      <option value="Garages et Parkings">Garages et Parkings</option>
       <option value="Grandes et Moyennes Surfaces">Grandes et Moyennes Surfaces</option>
        <option value="Industries">Industries</option>
         <option value="Nautique">Nautique</option>
          <option value="Secteur Pétrolier">Secteur Pétrolier</option>
           <option value="Transport">Transport</option>
    </select>


    <label for="message">MESSAGE</label>
    <textarea id="message" name="message" placeholder="Votre Messages...." style="height:200px"></textarea>

    <input type="submit" value="Envoyer" align="center">
  </form>
</fieldset>
</div>
</td>
<td style="vertical-align: top;padding: 50px">
 <h3 class=" fa fa-map-marker" style="color:#2eb2ff;font-size: 25px;font-weight: bold;">
  <span style="color:#9FD700;font-size: 25px;">  Enzynov</h3><br>

<p style="font-size:20px;">  25 Avenue du Gros Murger<br>

9 5220 – Herblay<br></p>

<p class="fa fa-phone" style="color:#2eb2ff;font-size: 25px;font-weight: bold;"><span style="color:black;font-size: 20px;font-weight: normal;" >  Téléphone : 09 84 40 54 45</span></p><br><br>

<p class="fa fa-envelope" style="color:#2eb2ff;font-size: 25px;font-weight: bold;"><span style="color:black;font-size:20px;font-weight: normal;">  Mail : contact@enzynov.fr<br><br>RCS Pontoise 790 971 287</span></p><br><br>
<h3 class=" fa fa-calendar" style="color: #2eb2ff;font-size: 25px;font-weight: bold;"><span style="color:#9FD700;font-size: 25px;">  Du lundi au vendredi</h3>

<p style="font-size:20px">Nous sommes à votre disposition du lundi au vendredi de 08h00 à 18h00.<br> N’hésitez pas à nous poser vos questions ! </p>
</td>
  </tr>
 
</table></div>
</div>

<?php

include '/inc/footer.php';

?>

