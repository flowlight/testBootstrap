<?php
define("WEBROOT","/."); require "localization.php"; ?>

<!DOCTYPE html>
<html>

  <!-- HEAD -->
  <?php include 'head.php';?>

  <!-- BODY -->
  <body>
    <?php
menu("tarif"); ?>

    <div class="container">
      <div class="head text-center">
      	<h3>Tarifs applicables pour l'année 2013</h3>
      </div>

	  <div class="container" style="width:70%;">
      	<div class="row-fluid">
        <div class="span4 tarif">
        	<div class="wrapper">
                <h3>Chambre Simple</h3>
                <div class="price">
                    <span class="dollar">€</span>
                    <span class="qty">75</span>
                    <span class="month">/nuit</span>
                </div>
                <div class="features">
                    <p>
                        <strong>1 </strong>
                         Petit déjeuner continental
                    </p>
                    <p>
                        <strong>WIFI </strong>
                        Gratuit
                    </p>
                </div>
                <a class="order" href="#">RESERVEZ</a>
            </div>
        </div>

        <div class="span4 tarif promo">
        	<div class="wrapper">
        		<img class="ribbon" src="img/2013.png">
                <h3>Offre Spéciale</h3>
                <div class="price">
                    <span class="qty" style="color:#FFF;">10</span>
                    <span class="dollar" style="color:#FFF;">%</span>
                    <span class="month">&nbsp;</span>
                </div>
                <div class="features">
                	<p style="color:#FFF;"><?php echo _("A partir de 3 nuits successives"); ?></p>
                	<p>&nbsp;</p>
                </div>
                <a class="order" href="#">RESERVEZ</a>
            </div>
        </div>

        <div class="span4 tarif">
        	<div class="wrapper">
                <h3>Chambre Double</h3>
                <div class="price">
                    <span class="dollar">€</span>
                    <span class="qty">85</span>
                    <span class="month">/nuit</span>
                </div>
                <div class="features">
                    <p>
                        <strong>2 </strong>
                         Petits déjeuners continentaux
                    </p>
                    <p>
                        <strong>WIFI </strong>
                        Gratuit
                    </p>
                </div>
                <a class="order" href="#">RESERVEZ</a>
            </div>
       </div>
	  </div>
	  </div>

	  <div class="supplements">
	      <div class="row-fluid supplement">
	      	<div class="span5 offset1">
	      		<h3>Suppléments :</h3>
	      		<ul class="unstyled">
	      			<li>> Petit déjeuner de type anglo-saxon: 4€</li>
		  			<li>> Lit d'enfant: 25€</li>
	      		</ul>
	      	</div>
	      	<div class="span5">
	      		<h3>Politique de réservation :</h3>
	      		<p><?php echo _("La réservation devient effective dès lors que le client aura fait parvenir au propriétaire le contrat signé et un acompte avant la date indiquée au verso du contrat, suivant les modalités indiquées aux conditions générales."); ?></p>
	      	</div>
	      </div>
	      <div class="row-fluid supplement">
	      	<div class="span5 offset1">
	      		<h3><?php echo _("Moyens de payement :"); ?></h3>
	              <ul class="unstyled">
	                <li><?php echo _("> Paypal"); ?></li>
	                <li><?php echo _("> Numéraire"); ?></li>
	                <li><?php echo _("Versement d'un acompte à la réservation"); ?></li>
	              </ul>
	      	</div>
		      	<div class="span5">
		      		<h3>Arrivée :</h3>
		      		<p><?php echo _("Le client doit se présenter le jour précisé et aux heures indiquées sur le contrat de location.<br>Il doit prévenir le propriétaire en cas d’arrivée différée ou tardive."); ?></p>
		      	</div>
		  </div>
      </div>
    </div>

    <!-- Modal -->
    <?php include 'pied.php';?>

    <!-- Modal -->
    <?php include 'conditions.php';?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>