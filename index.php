<?php
define("WEBROOT","/.");
require "localization.php";
?>

<!DOCTYPE html>
<html>

  <!-- HEAD -->
  <?php include 'head.php';?>

  <style>
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
  	
  </style>

  <!-- BODY -->
  <body>

    <?php
menu("index");
?>

    <div class="container">
    
    	<div class=="row">
		  <div class="head">
		  	<h3>
		  		<div class="souligne">
		  			<?php echo _("Bienvenue dans la Chambre d’hôtes Côté Jardin."); ?>
		  		</div>
		  	</h3>
		  </div>
		</div>

    
    	<div class="row">
			<div class="span6">
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
							<img src="photos/chambre/chambre16.JPG" alt="" style="border-radius:10px;">
							<!--<div class="carousel-caption">
								<h4><?php echo _("La chambre"); ?></h4>
							</div> -->
						</div>
						<div class="item" style="border-radius:10px;">
							<img src="photos/jardin/IMG_0781.JPG" alt="" style="border-radius:10px;">
							<!--<div class="carousel-caption">
								<h4><?php echo _("La chambre"); ?></h4>
							</div>	 -->
						</div>
						<div class="item" style="border-radius:10px;">
							<img src="photos/chambre/chambre23.JPG" alt="" style="border-radius:10px;">
							<!--<div class="carousel-caption">
								<h4><?php echo _("La salle de douche"); ?></h4>
							</div>	 -->
						</div>
						<div class="item" style="border-radius:10px;">
							<img src="photos/petitdej/IMG_0041.JPG" alt="" style="border-radius:10px;">
							<!--<div class="carousel-caption">
								<h4><?php echo _("La maison"); ?></h4>
							</div>	 -->
						</div>					
						<div class="item" style="border-radius:10px;">
							<img src="photos/bienvenue/Bienvenue64.JPG" alt="" style="border-radius:10px;">
							<!--<div class="carousel-caption">
								<h4><?php echo _("La maison"); ?></h4>
							</div>	 -->
						</div>
					</div>

					<!-- Carousel nav -->
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>
			<div class="span6 para">

			  	<p><?php echo _("Maryvonne et Pierre vous accueillent dans la chambre d’hôtes « Coté Jardin » de leur pavillon de Sartrouville (deuxième ville des Yvelines), à 15 km à l’ouest de Paris, dans la tranquillité d’un quartier pavillonnaire idéalement situé en centre ville, proche de la gare ferroviaire et de tous  les commerces."); ?></p><br>
				<p><?php echo _("Vous voulez visiter Paris ou bien notre belle région de l’Ouest de l’Ile de France, en particulier le département des Yvelines, vous trouverez chez nous un hébergement reposant et convivial véritable alternative à un hôtel à Paris, loin des bruits et de l’animation de la ville en liaison directe et rapide avec le centre de Paris."); ?></p><br>
				<p><?php echo _("Vous êtes de passage pour des raisons professionnelles et vous cherchez un havre de paix après une journée de travail, la chambre Coté Jardin a été conçue pour vous recevoir dans la verdure tout en vous permettant de rester en contact avec vos collaborateurs via Internet."); ?></p>
				
				<!--
				<div class="text-center">
					<img style="height:auto; width:auto; max-width:200px; max-height:200px;" src="chambres.gif">
					<p><strong><i>Premium</i></strong></p>
				</div>
				-->
			</div>
    	</div> <!-- row -->
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