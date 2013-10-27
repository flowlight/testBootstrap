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
	    menu("galerie");
    ?>
    
    <!-- modal-gallery is the modal dialog used for the image gallery -->
    <div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
        <div class="modal-header">
            <a class="close" data-dismiss="modal"><?php echo _("Fermer"); ?></a>
            <h3 class="modal-title"></h3>
        </div>
        
        <div class="modal-body">
          <div class="modal-image">
          </div>
        </div>

        <div class="modal-footer">
            <a class="btn modal-prev"><i class="icon-arrow-left icon-white"></i> <?php echo _("Précédent"); ?></a>
            <a class="btn modal-next"><?php echo _("Suivant"); ?> <i class="icon-arrow-right icon-white"></i></a>
            <a class="btn modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> <?php echo _("Diaporama"); ?></a>
            <!--<a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>-->
        </div>
    </div>

    <div class="container">
    
		<div class="hero-unit" style="padding:10px;margin:0px;">        
        	<ul>
	        	<li><?php echo _("La chambre a été conçue pour être la plus accueillante possible pour deux personnes."); ?></li>
	        	<li><?php echo _("Elle se situe à l’arrière de la maison et possède un accès indépendant de celle-ci."); ?></li>
				<li><?php echo _("Un balcon privatif aménagé d’un salon de jardin donne sur le jardin paysagé."); ?></li>
				<li><?php echo _("D’une superficie de 16 m², la chambre offre soit deux lits (têtes et pieds réglables électriquement) de 90 x 200 cm ou un seul lit de 180 x 200 cm, une grande penderie, une bibliothèque, un bureau et une télévision satellite à écran plat."); ?></li>
				<li><?php echo _("Mise à disposition d’Internet soit par câble, soit par WiFi."); ?></li>
				
	        	<li><?php echo _("La salle de bain attenante dispose d’une douche à l’italienne, d’un meuble lavabo et de toilettes."); ?></li>
				<li><?php echo _("Un lit de bébé est disponible sur demande et pourra être disposé aussi dans la chambre."); ?></li>
				<li><?php echo _("Ainsi qu’un lit d’appoint (80 * 180) peut également accueillir un enfant jusqu’à 12 ans."); ?></li>
				<li><?php echo _("Parking à l’intérieur de la propriété."); ?></li>
			</ul>
      </div> <!-- hero -->
      
      <br>
      <div class="head text-center">
      	<h3><?php echo _("La chambre est classée <b>«Premium»</b> par Gîtes de France sous le label <b>«City Break»</b>."); ?></h3>
      </div>
      <br>
    
    
      <div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
      	<ul class="thumbnails">
      	
      		<?php
	      		$images = array(
	      			"chambre-5055.jpg",
	      			"chambre-5064.jpg",
	      			"jardin-5088.jpg",
	      			"IMG_0181.JPG",
	      			"IMG_0183.JPG",
	      			"IMG_0258.JPG",
	      			"IMG_0261.JPG",
	      			"IMG_0274.JPG",
	      			"IMG_0399.JPG"
	      			);
	      		
	      		for($i = 0; $i < count($images); $i++)
	      		{
		      		echo '<li class="span4">
		      					<a href="gal/'.$images[$i].'" title="Titre" data-gallery="gallery" class="thumbnail"><img src="gal/'.$images[$i].'" class="img-rounded"></a>
		      			  </li>';
	      		}
      		?>
      		
      		<!--<li class="span4">
		    	<a href="gal/chambre-5055.jpg" title="1" data-gallery="gallery" class="thumbnail"><img src="gal/chambre-5055.jpg"></a>
      		</li>
      	
      		<li class="span4">
		    	<a href="2.jpg" title="1" data-gallery="gallery" class="thumbnail"><img src="2.jpg"></a>
      		</li>
      	
      		<li class="span4">
		    	<a href="3.jpg" title="1" data-gallery="gallery" class="thumbnail"><img src="3.jpg"></a>
      		</li>-->
       	
       	</ul>
      </div>
    </div> <!--container-->

    <!-- Modal -->
    <?php include 'pied.php';?>
    
    <!-- Modal -->
    <?php include 'conditions.php';?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>
  </body>
</html>