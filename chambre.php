<!DOCTYPE html>
<html lang="fr">

  <!-- HEAD -->
  <?php include 'head.php';?>
  
  <!-- BODY -->
  <body>
    <div class="container">
      <div class="page-header" style="margin-bottom:0px;padding-bottom:0px;">
        <h3 style="color:#AEBA67;">Côté Jardin <small>City Break</small></h3>
      </div>

      <div class="row-fluid">
        
        <div class="span10">
          <!-- Menu -->
          <div class="navbar" style="margin-top:10px;">
            <div class="navbar-inner">
              <div class="container">
                <ul class="nav">
                  <li><a href="index.php">Bienvenue</a></li>
                  <li class="active"><a href="#">Chambre</a></li>
                  <li><a href="tarif.php">Tarifs</a></li>
                  <li><a href="galerie.php">Galerie</a></li>
                  <li><a href="environs.php">Dans les environs</a></li>
                  <li><a href="localisation.php">Localisation</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </div>
          </div><!-- Menu -->
        </div>

        <div class="span2">
          <!--Sidebar content-->
          <div class="navbar" style="margin-top:10px;">
            <div class="navbar-inner">
              <div class="container">
                <ul class="nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <small>Langue</small>
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="active"><a href="#">French</a></li>
                      <li><a href="#">English</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
    
    <div class="container">
      <ul class="thumbnails">
        <li class="span4">
            <img src="gal/chambre-5064.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/jardin-5088.jpg" alt="" class="img-rounded">
        </li>
        <li class="span4">
            <img src="gal/sdb-5035.jpg" alt="" class="img-rounded">
        </li>
      </ul>

      <div class="hero-unit" style="padding:10px;margin:0px;">
        <blockquote style="padding:10px;margin:0px;">
            <ul class="unstyled">
              <li><img src="icon/hotel.png" width=40px> L’hébergement offre une chambre de 16 m² située au premier étage de notre pavillon.</li>
              <li><img src="icon/stairs.png" width=40px> Elle est desservie par un escalier privatif et indépendant des autres accès de la maison.</li>
              <li><img src="icon/parking.png" width=40px> Parking dans la propriété.</li>
              <li><img src="icon/nature.png" width=40px> La chambre dispose d’un balcon avec salon de jardin, qui donne sur le jardin paysagé à l’arrière de la maison.</li>
              <li><img src="icon/hanger.png" width=40px> Elle comprend deux lits jumeaux de 2 m x 0.90 m (ou 2 m x 1,80 m), une penderie et une bibliothèque.</li>
              <li><img src="icon/tv.png" width=40px> La chambre comporte également deux fauteuils, un petit bureau, une télévision satellite.</li>
              <li><img src="icon/wireless.png" width=40px> Une liaison Internet WIFI ou ethernet est à votre disposition</li>
              <li><img src="icon/drink.png" width=40px> La salle de douche privative est attenante à la chambre avec douche à l’italienne, toilettes, lavabo.</li>
              <li><img src="icon/cafe.png" width=40px> Le petit déjeuner est servi dans la véranda ou dans le séjour/salle à manger de la maison.</li>
        </blockquote>
      </div>
      <br>
    </div> <!--container-->

    <!-- Modal -->
    <?php include 'pied.php';?>
    
    <!-- Modal -->
    <?php include 'conditions.php';?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>