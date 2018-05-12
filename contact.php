<?php
$page="Contact";
$title = "Contact Us";

$metaD = "Contact Us";
include '/inc/header.php';

?>

<div class="container-fluid" style="width: 100%;">
  <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2616.2922454714108!2d2.1161296156802574!3d49.024048479304085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f4d9ea701753%3A0x9ef1777390ba2a86!2sADMS+Enzynov!5e0!3m2!1sfr!2sfr!4v1507043515475" width="1000" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="container">
  <h1 style="text-align: center;font-size: 40px;color:#2eb2ff;padding: 50px 0 0 0">Obtenez une démonstration</h1>
<table class="center-table" align="center" style="padding: 50px 0 50px 0">
  <tr>
    <td style="padding:50px 50px 50px 0px;" >
   
 <div class="container">

  <form action="thankyou.php" method="post">
  

   <label>NOM</label>
    <input type="text" id="tel" name="telephone" placeholder="Votre Nom.." required="true" >

    <label>TÉLÉPHONE</label>
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

</div>
</td>
<td style="vertical-align: top;padding: 50px">
 <h3 class=" fa fa-map-marker" style="color:#2eb2ff;font-size: 25px;font-weight: bold;">
  <span style="color:#9FD700;font-size: 25px;">  Enzynov</h3><br>

<p style="font-size:20px;">  25 Avenue du Gros Murger<br>

9 5220 – Herblay<br></p>

<p class="fa fa-phone" style="color:#2eb2ff;font-size: 25px;font-weight: bold;"><span style="color:black;font-size: 20px;font-weight: normal;" >  Téléphone : 09 84 40 54 45</p><br><br>

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