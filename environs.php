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
                  <li><a href="chambre.php">Chambre</a></li>
                  <li><a href="tarif.php">Tarifs</a></li>
                  <li><a href="galerie.php">Galerie</a></li>
                  <li class="active"><a href="#">Dans les environs</a></li>
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
      <div class="row-fluid">  
        <div class="span4 well">
          <h4>Sartrouville</h4>
          <p>Sartrouville se situe dans l’Ouest parisien, à 20 mn du centre de Paris, à proximité d’importants pôles d’emplois de la région parisienne. : Paris, La Défense, Cergy Pontoise.</p>
          <p>C’est la deuxième ville des Yvelines par sa population. </p>
          <p>Riche de son passé historique, fluvial ou viticole, elle se développe avec de nombreux projets architecturaux dont des équipements sportifs. Son église St Martin a fêté son millénaire en 2009. </p>
          <p>Notre ville est également à proximité de nombreux sites touristiques tels que Versailles, St Germain en Laye, Maisons Laffitte, Rueil Malmaison, tant chargés d’histoire.</p>
        </div>
        <div class="span4 well">
          <h4>Pierre & Maryvonne</h4>
          <p>Nous sommes de jeunes retraités qui portent depuis longtemps ce projet d’accueillir et de rencontrer les personnes « en voyage ».</p>
          <p>Pour réaliser ce projet, nous venons d’agrandir la maison afin de vous recevoir avec un bon confort.
          Nous souhaitons ainsi vous offrir le calme et la détente au jardin après les nombreuses visites que vous pourrez faire à Paris et aussi dans notre région riche en histoire et en surprises.</p>
          <p>Et nous n’oublions pas les professionnels qui viennent travailler dans notre région, en particulier à La Défense, auxquels nous souhaitons leur offrir détente et repos.</p>
          <p>Cordialement, dans l’attente de vous accueillir.</p>
        </div>
        <div class="span4">
        </div>  
      </div>      
    </div> <!--container-->

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