<?php
define("WEBROOT","/.");
require "localization.php";
?>

<!DOCTYPE html>
<html>

<!-- -->
<?php include 'head.php';?>

<!-- BODY -->
<body>
	<?php
	menu("environs");
	?>

	<div class="container">
		<div class="accordion" id="accordion2">
			<!--Sartrouville-->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						<h3>Sartrouville</h3>
					</a>
				</div>

				<div id="collapseOne" class="accordion-body collapse in">
					<div class="accordion-inner">
						<div class="row-fluid">
							<div class="span3">
								<p><img src="img/Hotel_de_Ville_de_Sartrouville.jpg" alt="Mairie de Sartrouville" class="img-rounded"></p>
							</div>
							<div class="span9">
								<p><?php echo _("Sartrouville se situe à 15 km à l’ouest de Paris et à 20 mn du centre de Paris, à proximité d’importants pôles d’emplois de la région parisienne. : Paris, La Défense, Cergy Pontoise.") ?></p>
								<p><?php echo _("C’est la deuxième ville des Yvelines par sa population qui atteint 52 000 habitants.") ?></p>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span9">
								<p><?php echo _("Riche de son passé historique, fluvial et viticole, elle se développe avec de nombreux projets architecturaux et des équipements sportifs. Son église St Martin a fêté son millénaire en 2009.") ?></p>
								<p><?php echo _("Notre ville se situe à proximité de nombreux sites touristiques tels que Versailles, St Germain en Laye, Maisons Laffitte, Rueil Malmaison, tant chargés d’histoire, ainsi que des sites d’activité tels que Poissy, Cergy Pontoise et le quartier d’affaires international de La Défense.") ?></p>
								<i><?php echo _("Pour en savoir plus : ") ?><a href="http://www.sartrouville.fr" target="_blank">www.sartrouville.fr</a></i>
							</div>
							<div class="span3">
								<p><img src="img/saint-martin.jpg" alt="Mairie de Sartrouville" class="img-rounded"></p>
							</div>
						</div>
					</div>
				</div>
			</div><!--accordion group-->
			<!--Alentours-->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						<h3>Les Alentours</h3>
					</a>
				</div>

				<div id="collapseTwo" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="row-fluid">
							<div class="span3">
								<p><img src="img/foret.jpeg" alt="Mairie de Sartrouville" class="img-rounded"></p>
							</div>
							<div class="span9">
								<p><?php echo _("La région ouest de Paris présente une géographie diversifiée et riche en paysages changeants.") ?></p>
								<p><?php echo _("La Seine s’y promène avec nonchalance et côtoie villes, forêts, cultures maraîchères, champs de course au gré de ses méandres.") ?></p>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span9">
								<p><?php echo _("Nous pouvons vous fournir des vélos pour découvrir les alentours, pour 5 €") ?></p>
							</div>
							<div class="span3">
								<p><img src="img/balade-velo.jpeg" alt="Mairie de Sartrouville" class="img-rounded"></p>
							</div>
						</div>
					</div>
				</div>
			</div><!--accordion group-->
			<!--Culture-->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
						<h3><?php echo _("Les Sites Culturels") ?></h3>
					</a>
				</div>

				<div id="collapse3" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="row-fluid">
							<div class="span3">
								<h3><?php echo _("L'Histoire") ?></h3>
								<ul>
									<li>Maisons-laffittes</li>
									<li>Saint-Germain-en-Laye</li>
									<li>Versailles</li>
									<li>Marly-le-Roi</li>
								</ul>
							</div>
							<div class="span3">
								<h3><?php echo _("La Culture") ?></h3>
								<ul>
									<li>Impressionnistes: Chatou, Auvers-sur-Oise, Giverny
										<!--<ul style="list-style: none;">
											<li><img src="img/maison_gachet_2.jpeg"></li>
											<li><img src="img/chaume.jpeg"></li>
										</ul>-->
									</li>
									<li>Littérature: Monte Christo</li>
								</ul>
							</div>
							<div class="span3">
								<h3><?php echo _("Les Cinémas<") ?>/h3>
								<ul>
									<li>Sartrouville: <a href="http://www.cinema-sartrouville.com" target="_blank">ABC Cinéma</a></li>
									<li>Poissy:  <a href="http://www.cinema-poissy.com/" target="_blank">C2L Cinéma</a></li>
									<li>Saint Germains:  <a href="http://www.cinema-saintgermain.com/" target="_blank">C2L Cinéma</a></li>
									<li>Maisons-Laffitte:  <a href="http://www.cineatalante.com/" target="_blank">Atalante</a></li>
								</ul>
							</div>
							<div class="span3">
								<h3><?php echo _("Les Théatres") ?></h3>
								<ul>
									<li><a href="http://www.theatre-sartrouville.com/cdn/" target="_blank">Théatre de Sartrouville</a></li>
									<li><a href="http://www.ville-poissy.fr/fr/loisirs/vie-culturelle/theatre-de-poissy.html" target="_blank">Théatre de Poissy</a></li>
									<li><a href="http://www.tam.fr/" target="_blank">Théatre de Rueil-Malmaison</a></li>
									<li><a href="http://vesinet.org//" target="_blank">Théatre du Vésinet</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--accordion group-->
			
			<!--Sport-->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
						<h3><?php echo _("Les Sports") ?></h3>
					</a>
				</div>

				<div id="collapse4" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="row-fluid">
							<div class="span3">
								<h3><?php echo _("Golfs") ?></h3>
								<ul>
									<li>Maisons-laffittes</li>
									<li>Saint-Germain-en-Laye</li>
									<li>Versailles</li>
									<li>Marly-le-Roi</li>
								</ul>
							</div>
							<div class="span3">
								<h3><?php echo _("Piscines") ?></h3>
								<ul>
									<li>Impressionnistes: Chatou, Auvers-sur-Oise, Giverny</li>
									<li>Littérature: Monte Christo</li>
								</ul>
							</div>
							<div class="span3">
								<h3><?php echo _("Football") ?></h3>
								<ul>
									<li>Sartrouville: <a href="http://www.cinema-sartrouville.com" target="_blank">ABC Cinéma</a></li>
									<li>Poissy:  <a href="http://www.cinema-poissy.com/" target="_blank">C2L Cinéma</a></li>
									<li>Saint Germains:  <a href="http://www.cinema-saintgermain.com/" target="_blank">C2L Cinéma</a></li>
									<li>Maisons-Laffitte:  <a href="http://www.cineatalante.com/" target="_blank">Atalante</a></li>
								</ul>
							</div>
							<div class="span3">
								<h3><?php echo _("Equitation") ?></h3>
								<ul>
									<li><a href="http://www.theatre-sartrouville.com/cdn/" target="_blank">Théatre de Sartrouville</a></li>
									<li><a href="http://www.ville-poissy.fr/fr/loisirs/vie-culturelle/theatre-de-poissy.html" target="_blank">Théatre de Poissy</a></li>
									<li><a href="http://www.tam.fr/" target="_blank">Théatre de Rueil-Malmaison</a></li>
									<li><a href="http://vesinet.org//" target="_blank">Théatre du Vésinet</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--accordion group-->
			
			<!--Actualité-->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
						<div class="">
							<h3><?php echo _("Les Actualités") ?></h3>
						</div>
					</a>
				</div>

				<div id="collapse5" class="accordion-body collapse">
					<div class="accordion-inner">
						<div class="row-fluid">
							<div class="span3">
								<p><img src="img/Hotel_de_Ville_de_Sartrouville.jpg" alt="Mairie de Sartrouville" style="height:160px;"></p>
							</div>
							<div class="span9">
								<p><?php echo _("La région ouest de Paris présente une géographie diversifiée et riche en paysages changeants.") ?></p>
								<p><?php echo _("La Seine s’y promène avec nonchalance et côtoie villes, forêts, cultures maraîchères, champs de course au gré de ses méandres.") ?></p>
							</div>
						</div>

						<div class="row-fluid">
							<div class="span9">
								<p><?php echo _("Riche de son passé historique, fluvial et viticole, elle se développe avec de nombreux projets architecturaux et des équipements sportifs. Son église St Martin a fêté son millénaire en 2009.") ?></p>
								<p><?php echo _("Notre ville se situe à proximité de nombreux sites touristiques tels que Versailles, St Germain en Laye, Maisons Laffitte, Rueil Malmaison, tant chargés d’histoire, ainsi que des sites d’activité tels que Poissy, Cergy Pontoise et le quartier d’affaires international de La Défense.") ?></p>
								<i><?php echo _("Pour en savoir plus : ") ?><a href="http://www.sartrouville.fr" target="_blank">www.sartrouville.fr</a></i>
							</div>
							<div class="span3">
								<p><img src="img/saint-martin.jpg" alt="Egile Saint Martin Sartrouville" style="height:160px;"></p>
							</div>
						</div>
					</div>
				</div>
			</div><!--accordion group-->
		</div> <!--accordion-->
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