<?php
define("WEBROOT","/.");
require "localization.php"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<!-- HEAD -->
<?php include 'head.php';?><!-- BODY -->

<head>
    <title></title>
</head>

<body>
    <?php 
            menu("localisation");
        ?>

    <div class="head text-center">
        <h3><?php echo _("Mobilis, une journée de trajets illimités avec un seul ticket de train !"); ?></h3>

        <div class="center"><img src="medias/mobilis.jpeg"></div>
    </div><!-- LOCALISATION -->

    <div class="container">
        <div class="supplements">
            <div class="row-fluid supplement">
                <div class="span5 offset1">
                    <h3><?php echo _("Mobilis"); ?></h3>

                    <ul>
                        <li><?php echo _("Avec Mobilis, un seul coupon vous permet de voyager toute une journée dans les zones choisies en empruntant plusieurs modes de transport."); ?></li>

                        <li><?php echo _("Visiter Paris, enchaîner les rendez-vous ou faire du shopping, un simple coupon vous facilite la vie."); ?></li>

                        <li><?php echo _("Mobilis est un forfait valable une journée qui vous permet d’effectuer un nombre illimité de voyages à l’intérieur des zones que vous aurez choisies (1 à 2, 1 à 3, 1 à 4 (Sartrouville), 1 à 5) dans le réseau de transports d’Ile-de-France."); ?></li>

                        <li><?php echo _("Attention ! Mobilis ne permet pas d’accéder aux aéroports de Roissy Charles de Gaulle et d’Orly. Pour vous rendre aux aéroports, optez pour "); ?><a href="http://www.transilien.com/static/tarifs/paris-visite" target="_blank">paris-visite</a></li>

                        <li><?php echo _("Pour tous les forfaits (quelle que soit la durée), la période de validité va du premier jour à 0h au dernier jour à 24h."); ?></li>
                    </ul>
                </div>

                <div class="span5">
                    <h3><?php echo _("Comment l'obtenir"); ?></h3>

                    <ul>
                        <li><?php echo _("Mobilis se présente sous la forme d’un coupon correspondant aux zones choisies."); ?></li>

                        <li><?php echo _("Pour l’obtenir, rendez-vous aux automates et aux guichets des gares SNCF Transilien, des stations de RER et de métro, ainsi qu’auprès des commerçants agréés."); ?></li>
                    </ul>

                    <h3><?php echo _("N’oubliez pas !"); ?></h3>

                    <ul>
                        <li><?php echo _("Avant toute utilisation vous devez inscrire nom, prénom et date d’utilisation sur le coupon. Votre coupon Mobilis est strictement personnel et ne peut être utilisé par une autre personne. Il n’est ni échangeable, ni remboursable. Vous pouvez acheter votre coupon à l'avance, il vous suffit d'inscrire la date le jour de l'utilisation."); ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="supplements">
            <div class="row-fluid supplement">
                <div class="span10 offset1">
                    <h3>Prix des coupons Mobilis</h3>

                    <table class="table table-hover table-condensed">
                        <caption>
                            Tarifs 1er Janvier 2013
                        </caption>

                        <thead>
                            <tr>
                                <th>Zones</th>

                                <th>Mobilis</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1 à 2</td>

                                <td>6,60€</td>
                            </tr>

                            <tr>
                                <td>1 à 3</td>

                                <td>8,80€</td>
                            </tr>

                            <tr>
                                <td>1 à 4 (Sartrouville)</td>

                                <td>10,85€</td>
                            </tr>

                            <tr>
                                <td>1 à 5</td>

                                <td>15,65€</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--supplements-->
    </div>
    
    <?php include 'pied.php';?><!-- Modal -->
    <?php include 'conditions.php';?><script src="http://code.jquery.com/jquery.js" type="text/javascript">
</script><script src="js/bootstrap.min.js" type="text/javascript">
</script><script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js" type="text/javascript">
</script><script src="js/bootstrap-image-gallery.min.js" type="text/javascript">
</script>
</body>
</html>
