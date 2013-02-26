<!DOCTYPE html>
<html lang="fr">

  <!-- HEAD -->
  <?php include 'head.php';?>
  
  <!-- BODY -->
  <body>
    <?php 
	    menu("tarifs");
    ?>
    
    <div class="container">
      <div class="row-fluid">
        <div class="span8">

          <div class="media">  
            <img class="pull-left media-object img-rounded" src="gal/IMG_0274.JPG" width=160px >
            <div class="media-body">
              <h4 class="media-heading">Petits déjeuners</h4>
              <p>inclus type français.</p>
              <p>Supplément de 4 € pour un petit déjeuner type continental.</p>
            </div>
          </div>

          <div class="media">  
            <img class="pull-left media-object img-rounded" src="gal/IMG_0258.JPG" width=160px >
            <div class="media-body">
              <h4 class="media-heading">Tarifs</h4>
              <p>Petit déjeuner inclus:</p>
              <ul>
                <li>1 personne  : <strong>75 €</strong></li>
                <li>2 personnes : <strong>85 €</strong></li>
              </ul>
              <p><small>Pas de taxe de séjour</small></p>
            </div>
          </div>

          <div class="hero-unit" style="padding:10px;margin:0px;">
            <blockquote style="padding:10px;margin:0px;">
              <h4>Politique de réservation:</h4>
              <p>La réservation devient effective dès lors que le client aura fait parvenir au propriétaire le contrat signé et un acompte avant la date indiquée au verso du contrat, suivant les modalités indiquées aux conditions générales.</p>
              <p>Le solde sera versé à l’arrivée.</p>

              <h4>Moyens de payement</h4>
              <ul class="unstyled">
                <li><img src="icon/paypal.png" width=40px> Paypal</li>
                <li><img src="icon/euro.png" width=40px> Numéraire</li>
                <li><img src="icon/credit-card.png" width=40px> Versement d'un accompte à la réservation</li>
              </ul>
            </blockquote>
          </div>
        </div>

        <div class="span4" style="background-color:#AEBA67;border-radius:5px;">
          <div class="lead text-center">
            <br><br>
            <h3>Offre Spéciale</h3>
            <p>A partir de 3 nuits successives, réduction de <strong>10 %</strong>.</p>
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