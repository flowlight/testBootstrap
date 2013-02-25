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
          <!--Body content-->
          <div class="navbar" style="margin-top:10px;">
            <div class="navbar-inner">
              <div class="container">
                <ul class="nav">
                  <li class="active"><a href="#">Bienvenue</a></li>
                  <li><a href="chambre.php">Chambre</a></li>
                  <li><a href="tarif.php">Tarifs</a></li>
                  <li><a href="galerie.php">Galerie</a></li>
                  <li><a href="environs.php">Dans les environs</a></li>
                  <li><a href="localisation.php#">Localisation</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner" style="border-radius:10px;">
              <div class="active item">
                <img src="1.jpg" alt="">
                <div class="carousel-caption">
                  <h4>La chambre</h4>
                  <p>Chd sfsd fsd v</p>
                </div>
              </div>
              <div class="item">
                <img src="2.jpg" alt="">
              </div>
              <div class="item">
                <img src="3.jpg" alt="">
              </div>
              <div class="item">
                <img src="4.jpg" alt="">
              </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
          <div class="hero-unit">
            <blockquote>
              <h4>Bienvenue dans la Chambre du coté de notre jardin.</h4>
              <p>
                Bienvenue dans la Chambre du côté de notre jardin <strong>« Côté Jardin »</strong>.<br>
                Elle est labellisée <strong>Gîtes de France - City Break</strong> et permet d’accueillir <strong>2 personnes</strong>.<br>
                Etant situés en centre ville, nous sommes à proximité immédiate de tous les principaux commerces situés à moins d’un kilomètre de la maison : restaurants, banques, gare SNCF et routière, marchés...
              <p><br>

              <p>
                Nous avons conçu celle-ci en vue de vous offrir <strong>confort</strong> et <strong>détente</strong> tout en étant à proximité de <strong>Paris</strong>. Vous y serez indépendant afin de vous féliciter un séjour parisien et banlieusard le plus agréable possible, ceci tout au long de l’année.
              </p>
            </blockquote>
          </div>
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
          <p>
            <p><img src="logo.png"></p>
            <p><img src="chambres.gif"></p>
            <p><img src="import_GDF_QUADRI.jpg"></p>
          </p>
          <h5 class="text-center">Informations utiles</h5>
          <ul class="text-left">
            <li>Capacité : 2 adultes</li>
            <li>Une chambre avec salle d'eau et terrasse</li>
          </ul>
          <p class="text-center"> 
            <strong>A partir de 70€ la nuité</strong><br>
            <p class="text-center"><button class="btn btn-primary" type="button"><i class="icon-search icon-white"></i> Réserver</button></p>
          </p>
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