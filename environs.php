<?php
define("WEBROOT","/.");
require "localization.php";
?>

<!DOCTYPE html>
<html>

<!-- -->
<?php include 'head.php';?>

<style>
.nav-tabs > li, .nav-pills > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}

.nav-tabs, .nav-pills {
    text-align:center;
}

  	.souligne {
	  	border-bottom: 1px solid #e9e9e9;
	  	margin-bottom: 40px; 
	  	font-weight: 300;
  	}
  	
  	.para {
  		font-weight: 300;
	  	font-size: 16px;
		line-height: 28px;
		margin-bottom: 18px;
		color: #3F3F3F; 
  	}
</style>

<!-- BODY -->
<body>
	<?php
menu("environs");
?>

	<div class="container">

		<div class=="row">
		  <div class="head">
		  	<h3>
		  		<div>
		  			<?php echo _("Venez découvrir notre région"); ?>
		  		</div>
		  	</h3>
		  </div>
		</div>

		<ul class="nav nav-tabs text-center para" id="myTab">
			<li class="active">
				<a href="#sartrouville" data-toggle="tab">Sartrouville</a>
			</li>
			<li>
				<a href="#alentours" data-toggle="tab"><?php echo _("Les Alentours"); ?></a>
			</li>
			<li>
				<a href="#culture" data-toggle="tab"><?php echo _("Les Sites Culturels") ?></a>
			</li>
		</ul>
		
		<div class="tab-content para">
		  	<div class="tab-pane fade" id="sartrouville">
		  		<div class="row-fluid">
					<div class="span3">
						<p><img src="img/Hotel_de_Ville_de_Sartrouville.jpg" alt="Mairie de Sartrouville" class="img-rounded"></p>
					</div>
					<div class="span9 para">
						<p><?php echo _("Sartrouville se situe à 15 km à l’ouest de Paris et à 20 mn du centre de Paris, à proximité d’importants pôles d’emplois de la région parisienne. : Paris, La Défense, Cergy Pontoise.") ?></p>
						<p><?php echo _("C’est la deuxième ville des Yvelines par sa population qui atteint 52 000 habitants.") ?></p>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span3">
						<p><img src="img/saint-martin.jpg" alt="Mairie de Sartrouville" class="img-rounded"></p>
					</div>

					<div class="span9 para">
						<p><?php echo _("Riche de son passé historique, fluvial et viticole, elle se développe avec de nombreux projets architecturaux et des équipements sportifs. Son église St Martin a fêté son millénaire en 2009.") ?></p>
						<p><?php echo _("Notre ville se situe à proximité de nombreux sites touristiques tels que Versailles, St Germain en Laye, Maisons Laffitte, Rueil Malmaison, tant chargés d’histoire, ainsi que des sites d’activité tels que Poissy, Cergy Pontoise et le quartier d’affaires international de La Défense.") ?></p>
						<i><?php echo _("Pour en savoir plus : ") ?><a href="http://www.sartrouville.fr" target="_blank">www.sartrouville.fr</a></i>
					</div>
				</div>
		  	</div>
		  	<div class="tab-pane fade active in" id="alentours">
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
					<div class="span3">
						<p><img src="img/balade-velo.jpeg" alt="Mairie de Sartrouville" class="img-rounded"></p>
					</div>
					<div class="span9">
						<p><?php echo _("Nous pouvons vous fournir des vélos pour découvrir les alentours, pour 5 €") ?></p>
					</div>
					
				</div>
		  	</div>
		  	<div class="tab-pane fade" id="culture">
		  		<div class="row-fluid">
					<div class="span3">
						<h3><?php echo _("L'Histoire") ?></h3>
						<ul>
							<li>Château de <a href="http://www.maisonslaffitte.net/chateau.htm" target=_blank>Maisons-laffittes</a></li>
							<ul style="list-style: none;">
									<li><img src="img/maison.jpeg" class="img-rounded"></li>
							</ul>
							<li>Château de Saint-Germain-en-Laye: <a href="http://www.musee-archeologienationale.fr">Musée d'Archéologie Nationale</li>
							<ul style="list-style: none;">
									<li><img src="img/saintger.jpeg" class="img-rounded"></li>
							</ul>
							<li>Château de <a href="http://www.chateauversailles.fr/homepage" target=_top> Versailles</a></li>
							<ul style="list-style: none;">
									<li><img src="img/versailles.jpeg" class="img-rounded"></li>
							</ul>
							<li>Musée Promanade de <a href="http://www.musee-promenade.fr">Marly-le-Roi</a></li>
						</ul>
					</div>
					<div class="span3">
						<h3><?php echo _("La Culture") ?></h3>
						<ul>
							<li>Impressionnistes: Chatou, Auvers-sur-Oise, Giverny
								<ul style="list-style: none;">
									<li><img src="img/maison_gachet_2.jpeg" class="img-rounded"></li>
									<li>&nbsp</li>
									<li><img src="img/chaume.jpeg" class="img-rounded"></li>
								</ul>
							</li>
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
				</div> <!-- row -->
		  	</div> <!-- tab pan -->
		</div> <!-- tab cont -->
	</div> <!--container-->

	<!-- Modal -->
	<?php include 'pied.php';?>

	<!-- Modal -->
	<?php include 'conditions.php';?>

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
	<script src="js/bootstrap-image-gallery.min.js"></script>

	<script>

$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})

	</script>
</body>

</html>