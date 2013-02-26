<!DOCTYPE html>
<html lang="fr">

  <!-- HEAD -->
  <?php include 'head.php';?>
  
  <!-- BODY -->
  <body>
    <?php 
	    menu("galerie");
    ?>
    
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