<?php
define("WEBROOT","/.");
require "localization.php"; 

// Validation du formulaire
$valid = true;
if(!empty($_POST)){
	extract($_POST);
	
	if(isset($_SESSION['LANG']))
	{
		$lang = $_SESSION['LANG'];
	}
	else
	{
		$lang = "fr_FR";
	}
	

	
	if(empty($mail)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli votre adresse électronique");
	}
	
	else if (!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i", $mail)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli une adresse électronique valide");
	}
	else if(empty($mailami)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli votre adresse électronique");
	}
	else if (!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i", $mailami)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli une adresse électronique valide");
	}

	else if(empty($message)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli de message");
	}
			
	if($valid){
		
	    $site = 'http://www.cotejardin-citybreak.fr/testsite/';
	    $mailsite = $mailami;

		$message = nl2br(htmlentities($message));
		$nom     = stripslashes($nom);
		$nomami  = stripslashes($nomami);
		
		$to = "$nomami <$mailami>";
		$sujet = "Côté Jardin : $nom vous recommande le site Côté Jardin City Break";
		
		$header  = "From: contact Côté Jardin <contact@cotejardin-citybreak.fr> \r\n";
		$header .= "Reply-To: contact Côté Jardin <contact@cotejardin-citybreak.fr> \r\n";
		$header .= "Content-Type: text/html; charset=\"utf-8\" \r\n";
	    $header .= "Content-Transfer-Encoding: 8bit \r\n";
	    
	    				
		$msg ='
                <html>
                
                <head>
				    <title>Côté Jardin - City Break - Sartrouville</title>
				    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
				    <meta name="viewport" content="width=device-width, initial-scale=1.0">
				    
				    <!-- FONT -->
				    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
				    
				    <!-- BOOTSTRAP -->
				    <link href="'.$site.'/css/bootstrap.min.css" rel="stylesheet" media="screen">
				    <link href="'.$site.'/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
				    
				    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
				    <!--[if lt IE 9]>
				            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
				    <![endif]-->
				        
				    <!-- STYLE -->
				    <link rel="stylesheet" type="text/css" href="'.$site.'/css/style.css" media="screen">
								
				    <!-- ICONS -->
				    <link rel="stylesheet" href="'.$site.'/css/font-awesome.min.css">
				
				</head>
                                
                <body>
                	<div class="container">  
                		<p><img src="'.$site.'/logo.png"></p>              	
		                <p>'.$message.'</p>   
		                <p>'.$nom.'</p>             
		           </div>  

                </body>
                </html>
                ';		
		
		//$succes = $mailsite." -- ".$to." -- ".$sujet." -- ".$msg." -- ".$header;
		
		if(mail($to, $sujet, $msg, $header)){
			$succes .= _("Merci d'avoir remplis ce formulaire.");
			unset($nom);
			unset($mail);
			unset($nomami);
			unset($mailami);
			unset($message);
		}
		else
		{
			$erreur = _("Erreur de traitement, votre message n'a pas pu être envoyé.");
		}
	}
}
?>

<!DOCTYPE html>
<html>

  <!-- HEAD -->
  <?php include 'head.php';?>
  
  <!-- BODY -->
  <body>
    <?php 
	    menu("");
    ?>

    <div class="container">
    	<div class=="row">
		  <div class="head">
		  	<h3>
		  		<div class="souligne">
		  			<?php echo _("Ce site internet vous a intéressé ? Vous avez la possibilité de recommander ce site à un ami !"); ?>
		  		</div>
		  	</h3>
		  </div>
		</div>    
    
    
  		<form class="well" method="post" action="contact2.php">
       <fieldset>
        <p><small><i><?php echo _("Les champs en surbrillance rouges sont indispensable"); ?></i></small></p>
        
        <?php 
        	// ALERT 
        	if(!$valid){
	        	echo ' <div class="alert alert-error">
					  	<button type="button" class="close" data-dismiss="alert">&times;</button>
					  	'.$erreur.'
					   </div>';
	        }
	        
	        else if ($succes){
	        	echo ' <div class="alert alert-success">
					  	<button type="button" class="close" data-dismiss="alert">&times;</button>
					  	'.$succes.'
					   </div>';
	        }
	        
			echo ' <div class="alertVide" id="alert"></div>';
			
			if(!isset($message)){
				$message = _("Bonjour,\n\nJe viens de découvrir ce site, j’ai trouvé ses contenus intéressants et je pense que tu pourrais également être intéressé(e).\nVoici l’adresse pour le consulter : http://www.cotejardin-citybreak.fr\n\nA bientôt.");
  			}
	    ?>

        
  		  <div class="row-fluid">
  			<div class="span4">
  						   		
             	<div class="input-prepend">
                	<span class="add-on"><i class="icon-user"></i></span>
                	<input type="text" id="nom" name="nom" placeholder="<?php echo _("Vos nom et prénom"); ?>" value="<?php if(isset($nom)) echo $nom; ?>">
                </div>   
            
            <div class="control-group error">                   
              <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="email" id="mail" name="mail" placeholder="<?php echo _("Votre adresse email"); ?>" value="<?php if(isset($mail)) echo $mail; ?>" required>
              </div>    
            </div> 
                           						   			

             	<div class="input-prepend">
                	<span class="add-on"><i class="icon-user"></i></span>
                	<input type="text" id="nomamie" name="nomami" placeholder="<?php echo _("Les nom et prénom de votre ami"); ?>" value="<?php if(isset($nomami)) echo $nomami; ?>">
                </div>   
             
   			<div class="control-group error">                   
              <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="email" id="mailami" name="mailami" placeholder="<?php echo _("Adresse email de votre ami"); ?>" value="<?php if(isset($mailami)) echo $mailami; ?>" required>
              </div>    
            </div> 	
                                               
             <br>
             <div class="controls">  
  				<button type="submit" class="btn btn-success pull-center" id="envoyer"><?php echo _("ENVOYER VOTRE MESSAGE"); ?></button>
             </div>
  			</div>
   			 <div class="control-group">                   
  				<div class="span8">
  					<textarea name="message" id="message" name="message" rows="20" class="span12" required><?php echo $message; ?></textarea>
  			 </div>
  			</div>

       </fieldset>
  		</form> <!--container-->
  	</div> <!--container-->

    <!-- Modal -->
    <?php include 'pied.php';?>
    
    <!-- Modal -->
    <?php include 'conditions.php';?>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
	<script type="text/javascript">
		$(function() {
			$("#envoyer").click(function(){
				valid = true;
				
				// NOM
				if($("#nom").val()==""){
					$("#nom").closest('.control-group').removeClass('success').addClass('error');
					valid = false;
				}
				else {
					$("#nom").closest('.control-group').removeClass('error').addClass('success');	
				}
				
				// MAIL
				if($("#mail").val()==""){
					$("#mail").closest('.control-group').removeClass('success').addClass('error');	
					valid = false;
				}
				else {
					if(!$("#mail").val().match(/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i)){
						$("#mail").closest('.control-group').removeClass('success').addClass('error');	
						valid = false;					
					}
					else
					{
						$("#mail").closest('.control-group').removeClass('error').addClass('success');	
					}
				}
				
				// NOM
				if($("#nomami").val()==""){
					$("#nomami").closest('.control-group').removeClass('success').addClass('error');
					valid = false;
				}
				else {
					$("#nomami").closest('.control-group').removeClass('error').addClass('success');	
				}
				
				// MAIL
				if($("#mailami").val()==""){
					$("#mailami").closest('.control-group').removeClass('success').addClass('error');	
					valid = false;
				}
				else {
					if(!$("#mailami").val().match(/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i)){
						$("#mailami").closest('.control-group').removeClass('success').addClass('error');	
						valid = false;					
					}
					else
					{
						$("#mailami").closest('.control-group').removeClass('error').addClass('success');	
					}
				}
				
				// MESSAGES
				if($("#message").val()==""){
					$("#message").closest('.control-group').removeClass('success').addClass('error');	
					valid = false;
				}
				else {
					$("#message").closest('.control-group').removeClass('error').addClass('success');	
				}
														
				return valid;
			});
		});
	</script>
  </body>
</html>