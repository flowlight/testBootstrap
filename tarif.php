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
	    menu("tarif");
    ?>
    
    <div class="container">
      <div class="row-fluid">
        <div class="span8">

          <div class="media">  
            <img class="pull-left media-object img-rounded" src="gal/IMG_0274.JPG" width=160px >
            <div class="media-body">
              <h4 class="media-heading"><?php echo _("Petits déjeuners"); ?></h4>
              <p><?php echo _("inclus type français."); ?></p>
              <p><?php echo _("Supplément de 4 € pour un petit déjeuner type continental."); ?></p>
            </div>
          </div>

          <div class="media">  
            <img class="pull-left media-object img-rounded" src="gal/IMG_0258.JPG" width=160px >
            <div class="media-body">
              <h4 class="media-heading"><?php echo _("Tarifs"); ?></h4>
              <p><?php echo _("Petit déjeuner inclus:"); ?></p>
              <ul>
                <li><?php echo _("1 personne  : "); ?><strong>75 €</strong></li>
                <li><?php echo _("2 personnes : "); ?><strong>85 €</strong></li>
              </ul>
              <p><small><?php echo _("Pas de taxe de séjour"); ?></small></p>
            </div>
          </div>

          <div class="hero-unit" style="padding:10px;margin:0px;">
            <blockquote style="padding:10px;margin:0px;">
              <h4><?php echo _("Politique de réservation:"); ?></h4>
              <p><?php echo _("La réservation devient effective dès lors que le client aura fait parvenir au propriétaire le contrat signé et un acompte avant la date indiquée au verso du contrat, suivant les modalités indiquées aux conditions générales."); ?></p>
              <p><?php echo _("Le solde sera versé à l’arrivée."); ?></p>

              <h4><?php echo _("Moyens de payement"); ?></h4>
              <ul class="unstyled">
                <li><img src="icon/paypal.png" width=40px><?php echo _(" Paypal"); ?> Paypal</li>
                <li><img src="icon/euro.png" width=40px><?php echo _(" Numéraire"); ?> Numéraire</li>
                <li><img src="icon/credit-card.png" width=40px><?php echo _(" Versement d'un accompte à la réservation"); ?></li>
              </ul>
            </blockquote>
          </div>
        </div>

        <div class="span4" style="background-color:#AEBA67;border-radius:5px;">
          <div class="lead text-center">
            <br><br>
            <h3><?php echo _("Offre Spéciale"); ?>Offre Spéciale</h3>
            <p><?php echo _("A partir de 3 nuits successives, réduction de "); ?><strong>10 %</strong>.</p>
            <br>
          </div>
        </div>

      </div>

    </div> <!--container-->

    <br>
    <!-- Modal -->
    <?php include 'pied.php';?>
    
    <!-- Modal -->
    <?php include 'conditions.php';?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>