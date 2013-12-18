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
        <h3><?php echo _("La Chambre d’hôtes Coté Jardin se situe au centre de Sartrouville, ville située à l’ouest de Paris."); ?></h3>
    </div><!-- MAP -->

    <div id="contact">
        <div class="row map">
            <div class="container">
                <div class="span5 box_wrapp">
                    <div class="box_cont">
                        <div class="head">
                            <h6>Contact</h6>
                        </div>

                        <ul class="street">
                            <li>Pierre & Maryvonne Wolff</li>

                            <li>29 bis rue Hortense Foubert,</li>

                            <li>78500 Sartrouville, France</li>

                            <li class="icon icontop"><span class="text">+33.(0)1.3968.1427</span></li>

                            <li class="icon"><a href="mailto:contact@cotejardin-citybreak.fr">contact@cotejardin-citybreak.fr</a></li>
                        </ul>

                        <div class="head headbottom">
                            <h6><?php echo _("Pour nous contacter"); ?></h6>
                        </div>

                        <p><?php echo _("Une question, une information ou bien une réservation..."); ?></p><a href="contact.php" class="btn"><?php echo _("Contactez-nous !"); ?></a>
                    </div>
                </div>
            </div><!--
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=29+bis+rue+hortense+foubert,+sartrouville&amp;aq=&amp;sll=48.680793,2.502588&amp;sspn=2.556957,5.377808&amp;ie=UTF8&amp;hq=&amp;hnear=29+bis+Avenue+Hortense+Foubert,+78500+Sartrouville,+Yvelines,+%C3%8Ele-de-France&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=48.938853,2.16296&amp;output=embed">
                </iframe>
                -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83958.41738334892!2d2.2633150931365233!3d48.882984957759376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6615f055aa22b%3A0x53b39d03188696d0!2sSartrouville!5e0!3m2!1sfr!2sfr!4v1387317790029" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div><!-- MAP -->
    <!-- LOCALISATION -->

    <div class="container">
        <div class="supplements">
            <div class="row-fluid supplement">
                <div class="span4">
                    <h3><?php echo _("En train"); ?></h3>

                    <p><?php echo _("La gare de Sartrouville est située en zone 4 et desservie par le RER et la SNCF:"); ?></p>

                    <ul>
                        <li><?php echo _("soit par le RER A traversant Paris, 30 minutes depuis Paris Châtelet."); ?></li>

                        <li><?php echo _("soit par la SNCF gare de Paris St Lazare, 30 minutes depuis Paris St Lazare."); ?></li>

                        <li><?php echo _("Fréquence élevée aux heures de pointe."); ?></li>

                        <li><a href="mobilis.php"><?php echo _("Mobilis, une journée de trajets illimités avec un seul ticket de train !"); ?></a></li>

                        <li><a href="http://www.ratp.fr/plan-interactif/" target="_blank"><?php echo _("Plan interactif RATP."); ?></a></li>
                    </ul>
                </div>

                <div class="span4">
                    <h3><?php echo _("En voiture"); ?></h3>

                    <ul>
                        <li><?php echo _("Autoroutes A14, A15, A86 et D308."); ?></li>

                        <li><?php echo _("Parking privé disponible dans la propriété."); ?></li>
                    </ul>
                </div>

                <div class="span4">
                    <h3><?php echo _("En Avion"); ?></h3>

                    <ul>
                        <li><?php echo _("Aéroport de Roissy-Charles de Gaulle, 45 mn / 35 km en voiture – 1 h 15 transports en commun."); ?></li>

                        <li style="list-style: none; display: inline">
                            <ul>
                                <li><?php echo _("45 mn / 35 km en voiture,"); ?></li>

                                <li><?php echo _("1h15 en transports en commun."); ?></li>
                            </ul>
                        </li>

                        <li><?php echo _("Aéroport d'Orly:"); ?></li>

                        <li style="list-style: none; display: inline">
                            <ul>
                                <li><?php echo _("1h / 35 km en voiture,"); ?></li>

                                <li><?php echo _("1h20 en transports en commun."); ?></li>
                            </ul>
                        </li>

                        <li><?php echo _("Aéroport de Paris-Beauvais:"); ?></li>

                        <li style="list-style: none; display: inline">
                            <ul>
                                <li><?php echo _("1h15 / 80 km en voiture,"); ?></li>

                                <li><?php echo _("1h30 en transports en commun."); ?></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="span5"></div>
            </div>

            <div class="row-fluid supplement">
                <div class="span12">
                    <h3><?php echo _("Comment se déplacer dans les environs de Sartrouville"); ?></h3>

                    <p>Sa déplacer dans les environs de Sartrouville est particulièrement aisé du fait de nombreux moyens de communication disponibles, par voie ferrée ou par route dont les réseaux d’autobus locaux.</p>

                    <p>Distances de Sartrouville par rapport à des villes connues&nbsp;/ temps estimé en voiture:</p>

                    <ul>
                        <li><?php echo _("Paris Notre Dame : 25 km / 30 mn,"); ?></li>

                        <li><?php echo _("Château de Versailles : 25 km / 30 mn,"); ?></li>

                        <li><?php echo _("Saint-Germain-en-Laye : 12 km / 15 mn"); ?></li>
                    </ul>
                </div>
            </div>
        </div><!--supplements-->
    </div><!-- Modal -->
    <?php include 'pied.php';?><!-- Modal -->
    <?php include 'conditions.php';?><script src="http://code.jquery.com/jquery.js" type="text/javascript">
</script><script src="js/bootstrap.min.js" type="text/javascript">
</script><script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js" type="text/javascript">
</script><script src="js/bootstrap-image-gallery.min.js" type="text/javascript">
</script>
</body>
</html>
