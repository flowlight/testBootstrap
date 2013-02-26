<!DOCTYPE html>
<html lang="fr">

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
				<div class="active item">
					<img src="1.jpg" alt="">
					<div class="carousel-caption">
						<h4>La chambre</h4>
						<p>Chd sfsd fsd v</p>
					</div>
				</div>
				<div class="item">
					<img src="2.jpg" alt="">
				</div>
				<div class="item">
					<img src="3.jpg" alt="">
				</div>
				<div class="item">
					<img src="4.jpg" alt="">
				</div>
			</div>
	
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
				
		<div class="hero-unit">
			<blockquote>
			  <h4>Bienvenue dans la Chambre du coté de notre jardin.</h4>
			  <p>
			    Bienvenue dans la Chambre du côté de notre jardin <strong>« Côté Jardin »</strong>.<br>
			    Elle est labellisée <strong>Gîtes de France - City Break</strong> et permet d’accueillir <strong>2 personnes</strong>.<br>
			    Etant situés en centre ville, nous sommes à proximité immédiate de tous les principaux commerces situés à moins d’un kilomètre de la maison : restaurants, banques, gare SNCF et routière, marchés...
			  <p><br>
			
			  <p>
			    Nous avons conçu celle-ci en vue de vous offrir <strong>confort</strong> et <strong>détente</strong> tout en étant à proximité de <strong>Paris</strong>. Vous y serez indépendant afin de vous féliciter un séjour parisien et banlieusard le plus agréable possible, ceci tout au long de l’année.
			  </p>
			</blockquote>
		</div>

		<div class="row-fluid text-center">
			<div class="span4">
				<img src="chambres.gif" width=150px>							
			</div>
			<div class="span4">
				<img src="logo.png" width=150px>
			</div>
			<div class="span4">
				<img src="gdf.png" width=150px>
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