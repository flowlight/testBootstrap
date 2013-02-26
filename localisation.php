<!DOCTYPE html>
<html lang="fr">

  <!-- HEAD -->
  <?php include 'head.php';?>
  
  <!-- BODY -->
  <body>

    <?php 
	    menu("localisation");
    ?>   
     
    <!-- LOCALISATION -->
    <div class="container">
      <h4>Comment venir:</h4>
      <div class="row-fluid">  
        <div class="span3 well">
          <h5>En train</h5>
          <p>RER SNCF / RATP Sartrouville est en zone 4, et desservie 
          <ul>
            <li>soit par le RER A (RATP) traversant Paris</li>
            <li>soit par la gare de Paris St Lazare (SNCF).</li>
            <li>Fréquence élevée en heure de pointe.</li>
          </ul>
        </div>       
        <div class="span3 well">
          <h5>En voiture</h5>
            <ul>
              <li>Autoroutes A 14, A15, A 86, D 308.</li>
              <li>Parking privé disponible dans la propriété.</li>
            </ul>  
        </div>    
        <div class="span3 well">
          <h5>Avion : </h5>
            <ul>
              <li>Aéroport de Roissy Charles de Gaulle, 45 mn / 35 km en voiture – 1 h 15 transports en commun.</li>
              <li>Orly, 1 h / 40 km en voiture, 1 h 20 transports en commun.</li>
              <li>Beauvais, 1 h 15 / 80 km en voiture, 1 h 30 transports en commun.</li>              
            </ul>
        </div> 
        <div class="span3 well">
          <h4>Distance par rapport à des repères connus</h4>
          <ul>
            <li>Sartrouville -> Paris Notre Dame = 21 km / 35 mn min par la route.</li>
            <li>Sartrouville -> Versailles Château = 30 km / 35 mn.</li>
            <li>Sartrouville -> St Germain en Laye Château = 12 km / 17 mn.</li>
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
                          <h6>Pour nous contacter</h6>
                      </div>
                      <p>Une question, une information ou bien une réservation...</p>

                      <a href="contact.php" class="btn">Contactez-nous !</a>
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