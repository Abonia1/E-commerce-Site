<!DOCTYPE html>
<?php
$page="Secteurs";
$title = "Nos Secteurs";

$metaD = "#";
include '/inc/header1.php';

?>

<!-- secteur1 -->
<div class="span10" style="width: 80%;float:right;height:100%;display: block;">

 <div class="container" id="anchor-btp" style="padding-top: 8%;display: block;">
<div class="container"  style="width: 100%;height: auto;float: right;">
  
    <img src="img\iStock507122313.jpg" style="float: right;size: contain;width:30%;height: 280px;">
    <h1  style="color: #EBB54E;padding:4% 0 4% 0 ;font-size: 65px;
  font-size: bolder;letter-spacing: 3px;word-spacing: 9px;"><strong><font size="6">BÂTIMENT ET TRAVAUX PUBLICS</font></strong></h1>
    <div class="container" style=" width: 10px;height: 1px;background-color: gray;position: relative;float: left;width: 20%;">
      <div class="circle">
      </div> 
    </div>
    <p style="color: #EBB54E;font-size: 17px;padding-top: 4%;">Enzynov possède une gamme de produits destinée à entretenir vos chantiers. Pour venir à bout de tâches d’enrobés, de rouille ou de tous type de ciment, nos produits vont satisfaire vos besoins.</p></div>
  
  <div class="container" id="btp" style="height: 100%;width: 100%;display: block;">
     
      <h3 class="shake" align="center" style="color: #2eb2ff; height:20px;border: 5px solid green;box-sizing: border-box;font-size: 30px; ">Choisissez Votre Surface</h3></div>
     

<div id="thumbs">
	<!-- produit1 -->
    <a id="single_image1" onclick="produit1()" href="#"><img src="img/btp1.jpg" alt=""/><p>ANTI-ROUILLE
    
  </p></a>
<div class="container" id="produit1" style="width: 100%;height: 100%;border:1px solid #EBB54E;">
	
	<div id=floatLeft style="width: 20%; height:100%;float: left;">
	<img src="img\bidonenzymaxmarine.jpg" style="max-height: 40%;">
    </div>

<div id="floatCenter" style="width: 100%;height:100%;float: center;">
	<h2 style="font-size: 23px;background-color: #EBB54E;">ENZYMAX PRO 30 ACTION <br><span style="font-size: 10px;">Ref : 01</span></h2>

	<p style="font-size: 20px;text-align: left;display: block;"><span style="font-weight: bold;">ENZYMAX PRO 30 Action Anti-Rouille</span> est non toxique. Cette solution est fortement recommandée pour la mise à niveau de l’hygiène de tout matériel rouillé et au nettoyage difficile et délicat. Ce produit assure une rénovation rapide et protège durablement vos installations.<br><span style="color:#9DD800;font-size: 18px; ">▪ Aspect : liquide ▪ Couleur : blanchâtre ▪ Odeur : sans
▪ Densité à 20°C : 0,789 ▪ pH (pur) : 1,78 ▪ Solubilité : totale dans l’eau même
à l’état solide</span></p>
</div>
	
<div id="floatRight" style="width: 20%;height:100%;float: left;">
	<ul>
		<li class="fa fa-file-pdf-o"><a href = 'file/PLAQUETTE-NAUTIQUE.pdf' target="_blank">&nbsp Fiche commercial </a></li>
		<li class="fa fa-file-pdf-o"><a href="" target="_blank">&nbsp Fiche technique</a></li>
	</ul>
	<form id='myform' align="center" method='POST' action='#' style="">
		<h1>Quantité</h1>
    <input type='button' value='-' class='qtyminus' field='quantity' />
    <input type='text' name='quantity' value='0' class='qty' />
    <input type='button' value='+' class='qtyplus' field='quantity' />
</form>
</div>
</div>
<!-- quantity -->
<script type="text/javascript">
jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});
</script>
<script>
function produit1() {
    var x = document.getElementById("produit1");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>



<!-- produit2 -->
 <a id="single_image2" href="#" onclick="produit2()"><img src="img/btp2.jpg" alt=""/><p>
    
SOLS ET MURS </p></a>
<div class="container" id="produit2" style="width: 100%;height: 100%;border:1px solid #EBB54E;">
	
	<div id=floatLeft style="width: 20%; height:100%;float: left;">
	<img src="img\bidonenzymaxmarine.jpg" style="max-height: 40%;">
    </div>
    <section>
<details>
<div id="floatCenter" style="width: 100%;height:100%;float: center;">
	<h2 style="font-size: 23px;background-color: #EBB54E;">ENZYMAX PRO 10 NETTOYANT <br><span style="font-size: 10px;">Ref : 01</span></h2>

	<p style="font-size: 20px;text-align: left;display: block;"><span style="font-weight: bold;">ENZYMAX PRO 10 Nettoyant Sols & Murs</span> Non toxique, cette solution permet de nettoyer façades, murs et sols avec une qualité de résultat durable en une application. Il s'emploie pour finaliser les travaux de chantiers et favoriser la remise à neuf avant tout état des lieux.<br><span style="color:#9DD800;font-size: 18px; ">▪ Aspect : liquide ▪ Couleur : blanchâtre ▪ Odeur : sans
▪ Densité à 20°C : 0,789 ▪ pH (pur) : 1,78
▪ Solubilité : totale dans l’eau même à l’état solide</span></p>
</div>
</details>	
<div id="floatRight" style="width: 20%;height:100%;float: left;">
	<ul>
		<li class="fa fa-file-pdf-o"><a href = 'file/PLAQUETTE-NAUTIQUE.pdf' target="_blank">&nbsp Fiche commercial </a></li>
		<li class="fa fa-file-pdf-o"><a href="" target="_blank">&nbsp Fiche technique</a></li>
	</ul>
</div>
</div>
</section>
	<script>
function produit2() {
    var x = document.getElementById("produit2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>


<!-- produit3 -->
    <a id="single_image3" onclick="myFunction()" href="#"><img src="img/btp3.jpg" alt=""/><p style="display: block;">

    
COLLES, PEINTURES, <br>ENDUITS, GRAFFITIS</p></a>

 <a id="single_image4" href="#"><img src="img/btp4.jpg" alt=""/><p>
    
 CIMENTS TOUS TYPES </p></a>
    <a id="single_image5" href="#"><img src="img/btp5.jpg" alt=""/><p>
ENROBÉS   </p></a>
    <span class="stretch"></span>
</div>

</div>


<!-- secteur2 -->
<div class="container" id="anchor-erp" style="padding-top: 8%;">
<div class="container"  style="width: 100%;height: 100%;float: right;">
  
    <img src="img\iStock529133291.jpg" style="float: right;size: contain;width:30%;height: 280px;">
    <h1 style="color: #E72C3E;padding: 4% 0 4% 0;font size: 65px;
  font-size: bolder;letter-spacing: 3px;word-spacing: 9px;"><strong><font size="6">ERP</font></strong></h1>
    <div class="container" style=" width: 10px;height: 1px;background-color: gray;position: relative;float: left;width: 20%;">
      <div class="circle">
      </div> 
    </div>
    <p style="color: #E72C3E;font-size: 17px;padding-top: 4%;">Conservez une hygiène irréprochable au sein de votre collectivité grâce à notre gamme dédiée. Entretien du sol, du mobilier ou des surfaces vitrées, Enzynov s’occupe de tout.</p></div>
  
  <div class="container" id="btp" style="height: 100%;width: 100%;display: block;">
     
      <h3 class="shake" align="center" style="color: #2eb2ff;font-size: 30px;">Choisissez Votre Surface</h3></div>
     

<div id="thumbs">
    <a id="single_image1" href="#"><img src="img/btp1.jpg" alt=""/><p>ANTI-ROUILLE
    
  </p></a>
    <a id="single_image2" href="#"><img src="img/btp2.jpg" alt=""/><p>
    
SOLS ET MURS </p></a>
    <a id="single_image3" href="#"><img src="img/btp3.jpg" alt=""/><p style="display: block;">
    
COLLES, PEINTURES, <br>ENDUITS, GRAFFITIS</p></a>
 <a id="single_image4" href="#"><img src="img/btp4.jpg" alt=""/><p>
    
 CIMENTS TOUS TYPES </p></a>
   
    <span class="stretch"></span>
</div>
</div>


<!-- secteur3 -->
 <div class="container" id="anchor-cus" style="padding-top: 8%;">
<div class="container"  style="width: 100%;height: 100%;float: right;">
  
    <img src="img\iStock476747096.jpg" style="float: right;size: contain;width:30%;height: 280px;">
    <h1 style="color: gray;padding: 4% 0 4% 0;font size: 65px;
  font-size: bolder;letter-spacing: 3px;word-spacing: 9px;"><strong><font size="6">CUISINE PROFESSIONNELLE</font></strong></h1>
    <div class="container" style=" width: 10px;height: 1px;background-color: gray;position: relative;float: left;width: 20%;">
      <div class="circle">
      </div> 
    </div>
    <p style="color: gray;font-size: 17px;padding-top: 4%;">Une cuisine se doit d’avoir une hygiène irréprochable, Enzynov possède une gamme de produits spécialement étudiée pour dégraisser et nettoyer vos sols.</p></div>
  
  <div class="container" id="btp" style="height: 100%;width: 100%;display: block;">
      <h3 align="center" style="color: #2eb2ff;font-size: 30px;max-height: 45px;">Choisissez Votre Surface</h3></div>
     

<div id="thumbs">
    <a id="single_image1" href="#"><img src="img/cus1.jpg" alt=""/><p>SOLS ET MURS
    
  </p></a>
    <a id="single_image2" href="#"><img src="img/cus2.jpg" alt=""/><p>
    
TABLES ET CHAISES & SALLES </p></a>
    <a id="single_image3" href="#"><img src="img/cus3.jpg" alt=""/><p style="display: block;">
    
MULTI-SURFACES</p></a>
<span class="stretch"></span>
</div>
</div>


<!-- secteur4 -->
<div class="container" id="anchor-gar" style="padding-top: 8%;">
<div class="container"  style="width: 100%;height: auto;">
  
    <img src="img\iStock658610224.jpg" style="float: right;size: contain;width:30%;height: 280px;">
    <h1 style="color: gray;padding: 4% 0 4% 0;font size: 65px;
  font-size: bolder;letter-spacing: 3px;word-spacing: 9px;"><strong><font size="6">GARAGES ET PARKINGS</font></strong></h1>
    <div class="container" style=" width: 10px;height: 1px;background-color: gray;position: relative;float: left;width: 20%;">
      <div class="circle">
      </div> 
    </div>
    <p style="color:gray;font-size: 17px;padding-top: 4%;">Pour accueillir des véhicules un garage ou un parking doit être propre. La gamme Enzynov spécialement conçue pour l’entretien des garages et des parkings sauras vous satisfaire.</p></div>
  
  <div class="container" id="btp" style="height: 100%;width: 100%;display: block;">
    <div class="box" style="border-radius: 25px;max-height: 45px">
      <h3  class="shake" align="center" style="color: #2eb2ff;font-size: 30px;">Choisissez Votre Surface</h3></div>
     

<div id="thumbs">
    <a id="single_image1" href="#"><img src="img/gar1.jpg" alt=""/><p>PNEUS, GRAISSE, ESSENCE
    
  </p></a>
    <a id="single_image2" href="#"><img src="img/gar2.jpg" alt=""/><p>
    
ENTRETIEN BIANNUEL PARKING </p></a>
  <span class="stretch"></span>
</div>
</div>
</div>
<!-- secteur5 -->
</div>
</div>





<?php

include '/inc/footer.php';
?>
