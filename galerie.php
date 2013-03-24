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
            <!--<a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>-->
        </div>
    </div>

    <div class="container">
      <div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
      	<ul class="thumbnails">
      	
      		<?php
	      		$images = array(
	      			"chambre-5055.jpg",
	      			"chambre-5064.jpg",
	      			"jardin-5088.jpg",
	      			"IMG_0181.JPG",
	      			"IMG_0183.JPG",
	      			"IMG_0258.JPG",
	      			"IMG_0261.JPG",
	      			"IMG_0274.JPG",
	      			"IMG_0399.JPG"
	      			);
	      		
	      		for($i = 0; $i < count($images); $i++)
	      		{
		      		echo '<li class="span4">
		      					<a href="gal/'.$images[$i].'" data-gallery="gallery" class="thumbnail"><img src="gal/'.$images[$i].'"></a>
		      			  </li>';
	      		}
      		?>
      		
      		<!--<li class="span4">
		    	<a href="gal/chambre-5055.jpg" title="1" data-gallery="gallery" class="thumbnail"><img src="gal/chambre-5055.jpg"></a>
      		</li>
      	
      		<li class="span4">
		    	<a href="2.jpg" title="1" data-gallery="gallery" class="thumbnail"><img src="2.jpg"></a>
      		</li>
      	
      		<li class="span4">
		    	<a href="3.jpg" title="1" data-gallery="gallery" class="thumbnail"><img src="3.jpg"></a>
      		</li>-->
       	
       	</ul>
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