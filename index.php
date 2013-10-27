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
	    menu("index");
    ?>
    
    <div class="container">     
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
		
			<!-- Carousel items -->
			<div class="carousel-inner" style="border-radius:10px;">
				<div class="active item" style="border-radius:10px;">
					<img src="1.jpg" alt="" style="border-radius:10px;">
					<!--<div class="carousel-caption">
						<h4><?php echo _("La chambre"); ?></h4>
					</div> -->
				</div>
				<div class="item" style="border-radius:10px;">
					<img src="2.jpg" alt="" style="border-radius:10px;">
					<!--<div class="carousel-caption">
						<h4><?php echo _("La chambre"); ?></h4>
					</div>	 -->			
				</div>
				<div class="item" style="border-radius:10px;">
					<img src="3.jpg" alt="" style="border-radius:10px;">
					<!--<div class="carousel-caption">
						<h4><?php echo _("La salle de douche"); ?></h4>
					</div>	 -->			
				</div>
				<div class="item" style="border-radius:10px;">
					<img src="4.jpg" alt="" style="border-radius:10px;">
					<!--<div class="carousel-caption">
						<h4><?php echo _("La maison"); ?></h4>
					</div>	 -->			
				</div>
			</div>
	
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
				
		<div class="hero-unit">
			<div class="row">
			<div class="span8">
				<blockquote>
				  <h3><?php echo _("Bienvenue dans la Chambre d’hôtes Côté Jardin."); ?></h3>
				  
				  	<p><?php echo _("Maryvonne et Pierre vous accueillent dans la chambre d’hôtes « Coté Jardin » de leur pavillon de Sartrouville (deuxième ville des Yvelines), à 15 km à l’ouest de Paris, dans la tranquillité d’un quartier pavillonnaire idéalement situé en centre ville, proche de la gare ferroviaire et de tous  les commerces."); ?></p><br>
					<p>
				    <?php echo _("Vous voulez visiter Paris ou bien notre belle région de l’Ouest de l’Ile de France, en particulier le département des Yvelines, vous trouverez chez nous un hébergement reposant et convivial véritable alternative à un hôtel à Paris, loin des bruits et de l’animation de la ville en liaison directe et rapide avec le centre de Paris."); ?></p><br>
					<p>
				    <?php echo _("Vous êtes de passage pour des raisons professionnelles et vous cherchez un havre de paix après une journée de travail, la chambre Coté Jardin a été conçue pour vous recevoir dans la verdure tout en vous permettant de rester en contact avec vos collaborateurs via Internet."); ?></p>
				  
				</blockquote>
			</div>
			<div class="span2 text-center">
				<img src="chambres.gif">
				<strong><i>Premium</i></strong>
			</div>
			</div>
		</div>
    </div> <!-- Container -->
    
    <br>
    <!-- Modal -->
    <?php include 'pied.php';?>
    
    <!-- Modal -->
    <?php include 'conditions.php';?>
 
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>