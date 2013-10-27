<?php
define("WEBROOT","/.");
require "localization.php"; 
?>

<!DOCTYPE html>
<html>

  <!-- HEAD -->
  <?php include 'head.php';?>
  
  <!-- BODY -->
  <body>
    <?php 
	    menu("chambre");
    ?>
    
    <div class="container">


	  <div class="hero-unit" style="padding:10px;margin:0px;">        
        	
	        	<p><?php echo _("La chambre a été réalisée en 2012 et fut conçue pour être la plus accueillante possible pour deux personnes."); ?></p>
	        	<p><?php echo _("Elle se situe à l’arrière de la maison du « coté jardin », et possède un accès indépendant de celle-ci afin de préserver la tranquillité et l’indépendance des uns et des autres."); ?></p>
	        	<p><?php echo _("D’une superficie de 16 m², la chambre offre soit deux lits séparés de 90 x 200 cm ou un seul lit de 180 x 200 cm avec inclinaison motorisée de la tête et des pieds, une grande penderie, un bureau, deux fauteuils, une télévision écran plat satellite. Internet est accessible par WiFi ou par câble."); ?></p>
	        	<p><?php echo _("Un lit de bébé est disponible sur demande et pourra être disposé aussi dans la chambre. Un lit d’enfant supplémentaire peut également être mis à disposition."); ?></p>
			
      </div> <!-- hero -->
      
      <br>
      <div class="head text-center">
      	<h3><?php echo _("La chambre est classée <b>«Premium»</b> par Gîtes de France sous le label <b>«City Break»</b>."); ?></h3>
      </div>
	  
      <ul class="thumbnails">
        <li class="span4">
            <img src="gal/chambre-5064.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/jardin-5088.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/sdb-5035.jpg" alt="" class="img-rounded">
        </li>
      </ul>
      
      <h4><?php echo _("La salle de bain attenante dispose d’une douche à l’italienne, d’un meuble lavabo et de toilettes. Elle est séparée de la  chambre par une porte coulissant en verre dépoli."); ?></h4>

	  <ul class="thumbnails">
        <li class="span4">
            <img src="gal/chambre-5064.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/jardin-5088.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/sdb-5035.jpg" alt="" class="img-rounded">
        </li>
      </ul>
      
      <h4><?php echo _("Un balcon privatif aménagé d’un salon de jardin donne sur le jardin paysagé. Ce jardin est à disposition des résidents, ainsi que les fauteuils relax et autres mobiliers de jardin (ping-pong, divers jeux de plein air..)."); ?></h4>
	  
	  <ul class="thumbnails">
        <li class="span4">
            <img src="gal/chambre-5064.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/jardin-5088.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/sdb-5035.jpg" alt="" class="img-rounded">
        </li>
      </ul>
      
 <h4><?php echo _("Le petit déjeuner est servi dans la véranda « coté jardin ». Copieux il est de type français et beaucoup de produits servis sont réalisés maison. Nous pouvons aussi servir un petit déjeuner de type anglo-saxon (voir tarifs)."); ?></h4>
	  
	  <ul class="thumbnails">
        <li class="span4">
            <img src="gal/chambre-5064.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/jardin-5088.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/sdb-5035.jpg" alt="" class="img-rounded">
        </li>
      </ul>
	  
	   <h4><?php echo _("Un emplacement de parking dans la propriété permet de stationner voiture ou moto. Un garage peut abriter  des vélos."); ?></h4>
	  
	  <ul class="thumbnails">
        <li class="span4">
            <img src="gal/chambre-5064.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/jardin-5088.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/sdb-5035.jpg" alt="" class="img-rounded">
        </li>
      </ul>
      
    </div> <!--container-->

    <!-- Modal -->
    <?php include 'pied.php';?>
    
    <!-- Modal -->
    <?php include 'conditions.php';?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>