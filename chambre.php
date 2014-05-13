<?php
define("WEBROOT","/.");
require "localization.php"; 
?>

<!DOCTYPE html>
<html>

  <!-- HEAD -->
  <?php include 'head.php';?>
  
  <style>
  	.thumbnails p {
  		font-weight: 300;
	  	font-size: 18px;
	  	line-height: 28px;
	  	vertical-align: middle;
	  	display: inline-block;
  	}
  	
  	.souligne {
	  	border-bottom: 1px solid #e9e9e9;
	  	margin-bottom: 40px; 
	  	font-weight: 300;
  	}
  	
  	.para {
  		font-weight: 300;
	  	font-size: 18px;
		line-height: 28px;
		margin-bottom: 18px;
		color: #3F3F3F; 
  	}
  	
  	.flex-direction-nav a  {
    line-height: 40px;
	}

  </style>
  
  <!-- BODY -->
  <body>
    <?php 
	    menu("chambre");
    ?>
    
    <div class="container">

		<div class=="row">
		  <div class="head">
		  	<h3>
		  		<div class="souligne">
		  			<?php echo _("La chambre est classée <b>«Premium»</b> par Gîtes de France sous le label <b>«City Break»</b>."); ?>
		  		</div>
		  	</h3>
		  </div>
		</div>

		<div class="row">
			<div class="span6 para">
				<!-- Présentation -->
				<p><?php echo _("La chambre a été réalisée en 2012 et fut conçue pour être la plus accueillante possible pour deux personnes."); ?></p>
		    	<p><?php echo _("Elle se situe à l’arrière de la maison du « coté jardin », et possède un accès indépendant de celle-ci afin de préserver la tranquillité et l’indépendance des uns et des autres."); ?></p>
		    	<p><?php echo _("D’une superficie de 16 m², la chambre offre soit deux lits séparés de 90 x 200 cm ou un seul lit de 180 x 200 cm avec inclinaison motorisée de la tête et des pieds, une grande penderie, un bureau, deux fauteuils, une télévision écran plat satellite. Internet est accessible par WiFi ou par câble."); ?></p>
		    	<p><?php echo _("Un lit de bébé est disponible sur demande et pourra être disposé aussi dans la chambre. Un lit d’enfant supplémentaire peut également être mis à disposition."); ?></p>
			</div>
			
			<div class="span6">
				<!-- flexslider -->
				<div id="slider" class="flexslider">
				  <ul class="slides">
				    <li>
				      <img src="photos/chambre/chambre16.JPG" class="img-rounded"/>
				    </li>
				    <li>
				      <img src="photos/jardin/IMG_0781.JPG" class="img-rounded"/>
				    </li>
				    <li>
				      <img src="photos/chambre/chambre23.JPG" class="img-rounded"/>
				    </li> 
				    <li>
				    	<img src="photos/petitdej/IMG_0041.JPG" class="img-rounded"/>
				    </li>
				    <li>
				    	<img src="photos/bienvenue/Bienvenue64.JPG" class="img-rounded"/>
				    </li>
				    <li>
				    	<img src="photos/chambre/chambre32.JPG" class="img-rounded"/>
				    </li>
				  </ul>
				</div>
			</div>
		</div>
	  
      <ul class="thumbnails">
        <li class="span4">
            <img src="photos/sdb/sdb1.JPG" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="photos/sdb/sdb2.JPG" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <p><?php echo _("La salle de bain attenante dispose d’une douche à l’italienne, d’un meuble lavabo et de toilettes."); ?></p>
            <p><?php echo _("Elle est séparée de la  chambre par une porte coulissant en verre dépoli."); ?></p>
        </li>
      </ul>
      

	  <ul class="thumbnails">
        <li class="span4">
               <p><?php echo _("Un balcon privatif aménagé d’un salon de jardin donne sur le jardin paysagé."); ?></p>
               <p><?php echo _("Ce jardin est à disposition des résidents, ainsi que les fauteuils relax et autres mobiliers de jardin (ping-pong, divers jeux de plein air...)."); ?></p>
        </li>
        <li class="span4">
            <img src="photos/jardin/balcon.JPG" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="photos/jardin/IMG_0057.JPG" alt="" class="img-rounded">
        </li>
      </ul>
      
   
	  
	  <ul class="thumbnails">
        <li class="span4">
            <img src="photos/petitdej/IMG_0032.JPG" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="photos/petitdej/IMG_0210.JPG" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <p><?php echo _("Le petit déjeuner est servi dans la véranda « coté jardin »."); ?></p>
            <p><?php echo _("Copieux il est de type français et beaucoup de produits servis sont réalisés maison. Nous pouvons aussi servir un petit déjeuner de type anglo-saxon (voir tarifs)."); ?></p>
        </li>
      </ul>
      
 
	  
	  <ul class="thumbnails">
        <li class="span4">
			<p><?php echo _("Un emplacement de parking dans la propriété permet de stationner voiture ou moto. Un garage peut abriter des vélos."); ?></p>
        </li>
        <li class="span4">
            <img src="photos/jardin/IMG_0059.JPG" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="photos/jardin/IMG_0112.JPG" alt="" class="img-rounded">
        </li>
      </ul>
	  
	  
      
    </div> <!--container-->

    <!-- Modal -->
    <?php include 'pied.php';?>
    
    <!-- Modal -->
    <?php include 'conditions.php';?>

	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
	<!-- FLEXSLIDER -->
	<script src="jquery.flexslider.js"></script>
	
	<script type="text/javascript" charset="utf-8">			
		$(window).ready(function() {
		  $('.flexslider').flexslider({
		    animation: "slide",
		    smoothHeight: true,
		    slideshow: true,
		    useCSS: true,
		    // Primary Controls
			controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
			directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
			prevText: "",           //String: Set the text for the "previous" directionNav item
			nextText: "",               //String: Set the text for the "next" directionNav item
		  });
		});
	</script>

  </body>
</html>