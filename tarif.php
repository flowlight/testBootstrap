<?php
define("WEBROOT","/."); require "localization.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<!-- HEAD -->
<?php include 'head.php';?><!-- BODY -->

<head>
    <title></title>
</head>

<body>
    <?php
    menu("tarif"); ?>

    <div class="container">
        <div class="head text-center">
            <h3><?php echo _("Tarifs applicables pour l'année 2014"); ?></h3>
        </div>

        <div class="container" style="width:70%;">
            <div class="row-fluid">
                <div class="span4 tarif">
                    <div class="wrapper">
                        <h3><?php echo _("Chambre Simple"); ?></h3>

                        <div class="price">
                            <span class="dollar">€</span> <span class="qty">75</span> <span class="month">/nuit</span>
                        </div>

                        <div class="features">
                            <p><strong>1</strong> <?php echo _("Petit déjeuner continental"); ?></p>

                            <p><strong>WIFI</strong> <?php echo _("Gratuit"); ?></p>
                        </div><a class="order" href="#"><?php echo _("RESERVEZ"); ?></a>
                    </div>
                </div>

                <div class="span4 tarif promo">
                    <div class="wrapper">
                        <!-- <img class="ribbon" src="img/2013.png"> -->
 
                        <h3><?php echo _("Offre Spéciale"); ?></h3>

                        <div class="price">
                            <span class="qty" style="color:#FFF;">10</span> <span class="dollar" style="color:#FFF;">%</span> <span class="month">&nbsp;</span>
                        </div>

                        <div class="features">
                            <p style="color:#FFF;"><?php echo _("A partir de 3 nuits successives"); ?></p>

                            <p>&nbsp;</p>
                        </div><a class="order" href="#"><?php echo _("RESERVEZ"); ?></a>
                    </div>
                </div>

                <div class="span4 tarif">
                    <div class="wrapper">
                        <h3><?php echo _("Chambre Double"); ?></h3>

                        <div class="price">
                            <span class="dollar">€</span> <span class="qty">85</span> <span class="month">/<?php echo _("nuit"); ?></span>
                        </div>

                        <div class="features">
                            <p><strong>2</strong> <?php echo _("Petits déjeuners continentaux"); ?></p>

                            <p><strong>WIFI</strong> <?php echo _("Gratuit"); ?></p>
                        </div><a class="order" href="#"><?php echo _("RESERVEZ"); ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="supplements">
            <div class="row-fluid supplement">
                <div class="span5 offset1">
                    <h3><?php echo _("Suppléments:"); ?></h3>

                    <ul class="unstyled">
                        <li>&gt; <?php echo _("Petit déjeuner de type anglo-saxon: 4€"); ?></li>
						<li>&gt; <?php echo _("Lit bébé sans supplément"); ?></li>
                        <li>&gt; <?php echo _("Lit d'enfant: 25€"); ?></li>
                    </ul>
                </div>

                <div class="span5">
                    <h3><?php echo _("Politique de réservation :"); ?></h3>

                    <p><?php echo _("La réservation devient effective dès lors que le client aura fait parvenir au propriétaire le contrat signé et un acompte avant la date indiquée au verso du contrat, suivant les modalités indiquées aux conditions générales."); ?></p>
                </div>
            </div>

            <div class="row-fluid supplement">
                <div class="span5 offset1">
                    <h3><?php echo _("Moyens de payement :"); ?></h3>

                    <ul class="unstyled">
                        <li><?php echo _("> Paypal"); ?></li>

                        <li><?php echo _("> Numéraire"); ?></li>
                        
                        <li><?php echo _("> Chèques bancaires ou postaux"); ?></li>
                        
                        <li>&nbsp</li>

                        <i><li><?php echo _("Versement d'un acompte à la réservation"); ?></li>
                        
                        <li><?php echo _("Il n'y a pas de taxe de séjour."); ?></li></i>
                    </ul>
                </div>

                <div class="span5">
                    <h3><?php echo _("Arrivée"); ?> :</h3>

                    <p><?php echo _("Le client doit se présenter le jour précisé et aux heures indiquées sur le contrat de location.<br>Il doit prévenir le propriétaire en cas d’arrivée différée ou tardive."); ?></p>
                </div>
            </div>
        </div>
    </div><!-- Modal -->
    <?php include 'pied.php';?><!-- Modal -->
    <?php include 'conditions.php';?><script src="http://code.jquery.com/jquery.js" type="text/javascript">
</script><script src="js/bootstrap.min.js" type="text/javascript">
</script>
</body>
</html>
