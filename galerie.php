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
                  <li class="active"><a href="#">Galerie</a></li>
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
    
    <!-- modal-gallery is the modal dialog used for the image gallery -->
    <div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">&times;</a>
            <h3 class="modal-title"></h3>
        </div>
        
        <div class="modal-body">
          <div class="modal-image">
          </div>
        </div>

        <div class="modal-footer">
            <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
            <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
            <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
            <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
        </div>
    </div>

    <div class="container">
      <div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
        <a href="1.jpg" title="Banana" data-gallery="gallery">Banana</a>
        <a href="2.jpg"  title="Apple"  data-gallery="gallery">Apple</a>
        <a href="3.jpg" title="Orange" data-gallery="gallery">Orange</a>
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