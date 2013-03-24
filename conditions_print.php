<?php
define("WEBROOT","/.");
require "localization.php"; 
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Côté Jardin - City Break - Sartrouville</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
    	<div class="page-header text-center">
     		<a href="javascript:window.print()" class="btn"><i class="icon-print"></i>  <?php echo _("Imprimer cette page"); ?></a>
     		<a class="close" href="index.php" data-toggle="tooltip" data-placement="bottom" title="<?php echo _("revenir au site"); ?>">&times;</a>
        </div>
  		<?php 
  			if(isset($_SESSION['LANG']))
  			{
	  			$lang = $_SESSION['LANG'];
  			}
  			else
  			{
	  			$lang = "fr_FR";
  			}
  			
  			if(strcmp($lang, "en_US") == 0)
  			{
  				include 'conditions_text_en.php'; 	  			
  			}
  			else
   			{
  				include 'conditions_text.php'; 	  			
  			} 			
  		?>
    </div>
  </body>
</html>