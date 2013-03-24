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
	    menu("localisation");
    ?>   
     
    <!-- LOCALISATION -->
    <div class="container">
      <h4><?php echo _("Comment venir:"); ?></h4>
      <div class="row-fluid">  
        <div class="span3 well">
          <h5><?php echo _("En train"); ?></h5>
          <p><?php echo _("RER SNCF / RATP Sartrouville est en zone 4, et desservie "); ?>
          <ul>
            <li><?php echo _("soit par le RER A (RATP) traversant Paris"); ?></li>
            <li><?php echo _("soit par la gare de Paris St Lazare (SNCF)."); ?></li>
            <li><?php echo _("Fréquence élevée en heure de pointe."); ?></li>
          </ul>
        </div>       
        <div class="span3 well">
          <h5><?php echo _("En voiture"); ?></h5>
            <ul>
              <li><?php echo _("Autoroutes A 14, A15, A 86, D 308."); ?></li>
              <li><?php echo _("Parking privé disponible dans la propriété."); ?></li>
            </ul>  
        </div>    
        <div class="span3 well">
          <h5><?php echo _("Avion : "); ?></h5>
            <ul>
              <li><?php echo _("Aéroport de Roissy Charles de Gaulle, 45 mn / 35 km en voiture – 1 h 15 transports en commun."); ?></li>
              <li><?php echo _("Orly, 1 h / 40 km en voiture, 1 h 20 transports en commun."); ?></li>
              <li><?php echo _("Beauvais, 1 h 15 / 80 km en voiture, 1 h 30 transports en commun."); ?></li>              
            </ul>
        </div> 
        <div class="span3 well">
          <h4><?php echo _("Distance par rapport à des repères connus"); ?></h4>
          <ul>
            <li><?php echo _("Sartrouville -> Paris Notre Dame = 21 km / 35 mn min par la route."); ?></li>
            <li><?php echo _("Sartrouville -> Versailles Château = 30 km / 35 mn."); ?></li>
            <li><?php echo _("Sartrouville -> St Germain en Laye Château = 12 km / 17 mn."); ?></li>
          </ul>
        </div>         
      </div>    
    </div> <!--container-->
    
    <!-- MAP -->
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
                          <li class="icon icontop">
                              <span class="contacticos ico1"></span>
                              <span class="text">+33 (0)1 3968 1427</span>
                          </li>
                          <li class="icon">
                              <span class="contacticos ico2"></span>
                              <a href="mailto:contact@cotejardin-citybreak.fr">contact@cotejardin-citybreak.fr</a>
                          </li>
                      </ul>

                      <div class="head headbottom">
                          <h6><?php echo _("Pour nous contacter"); ?></h6>
                      </div>
                      <p><?php echo _("Une question, une information ou bien une réservation..."); ?></p>

                      <a href="contact.php" class="btn"><?php echo _("Contactez-nous !"); ?></a>
                  </div>
              </div>
          </div>
          <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=29+bis+rue+hortense+foubert,+sartrouville&amp;aq=&amp;sll=48.680793,2.502588&amp;sspn=2.556957,5.377808&amp;ie=UTF8&amp;hq=&amp;hnear=29+Avenue+Hortense+Foubert,+78500+Sartrouville,+Yvelines,+%C3%8Ele-de-France&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=48.938853,2.16296&amp;output=embed"></iframe>
      </div>
    </div>

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