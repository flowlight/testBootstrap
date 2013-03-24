<?php
define("WEBROOT","/.");
require "localization.php"; 

// Validation du formulaire
$valid = true;
if(!empty($_POST)){
	extract($_POST);
	
	
	if(empty($nom)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli votre nom");
	}
	
	/*else if(empty($prenom)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli votre prénom");
	}*/
	
	else if(empty($mail)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli votre adresse électronique");
	}
	
	else if (!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i", $mail)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli une adresse électronique valide");
	}
	
	else if(empty($tel)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli votre numéro de téléphone mobile");
	}	
	
	/*else if(empty($arrivee)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli votre date d'arrivée");
	}*/	
	
	else if(!empty($arrivee) && empty($nbnuits)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli le nombre de nuitées");
	}	
	
	else if(!empty($arrivee) && empty($nbPers)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli le nombre de personnes");
	}

	else if(empty($message)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli de message");
	}
			
	if($valid){
		$to = "ma.x@free.fr";
		$sujet = "Côté Jardin : ".$nom." à contacté le site";
		$header = "From: contact Côté Jardin <contact@cotejardin-citybreak.fr>";
		$header = "Reply-To: $nom <$mail>";

		$message = stripslashes($message);
		$nom = stripslashes($nom);
		
		if(mail($to, $sujet, $message, $header)){
			$succes = _("Merci d'avoir remplis ce formulaire, nous allons vous contacter rapidement.");
			unset($nom);
			unset($prenom);
			unset($mail);
			unset($tel);
			unset($arrivee);
			unset($nbnuits);
			unset($nbPers);
			unset($message);
		}
		else
		{
			$erreur = _("Erreur de traitement, votre mail de contact n'a pas pu être envoyé.<br>Veuiller nous contacter à cette adresse directement: contact@cotejardin-citybreak.fr");
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
	    menu("contact");
    ?>

    <div class="container">
  		<form class="well" method="post" action="contact.php">
       <fieldset>
        <legend>
            <p><?php echo _("Merci de remplir ce formulaire pour réserver ou simplement nous poser une question."); ?></p>
        </legend>
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
	    ?>

        
  		  <div class="row-fluid">
  			<div class="span4">
  			
  			 <div class="control-group">
             	<div class="input-prepend">
                	<span class="add-on"><i class="icon-user"></i></span>
                	<input type="text" id="nom" name="nom" placeholder="<?php echo _("Votre nom"); ?>" value="<?php if(isset($nom)) echo $nom; ?>" required>
                </div>   
             </div>    
             
  			 <div class="control-group">                   
             <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input type="text" id="prenom" name="prenom" placeholder="<?php echo _("Votre prénom"); ?>" value="<?php if(isset($prenom)) echo $prenom; ?>" >
             </div>    
             </div>
   			 <div class="control-group">                   
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="email" id="mail" name="mail" placeholder="<?php echo _("Votre adresse email"); ?>" value="<?php if(isset($mail)) echo $mail; ?>" required>
              </div>    
            </div>
   			 <div class="control-group">                   
            <div class="input-prepend">
                <span class="add-on"><i class="icon-phone"></i></span>
                <input type="tel" id="tel" name="tel" placeholder="<?php echo _("Votre numéro de mobile"); ?>" value="<?php if(isset($tel)) echo $tel; ?>">
              </div>    
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
  			
  			echo '<div class="control-group">';
  			if(strcmp($lang, "en_US") == 0)
  			{
	            echo '<div class="input-prepend date" id="dp1" data-date-format="dd-mm-yyyy">
	              			<span class="add-on"><i class="icon-calendar"></i></span>
	              			<input type="text" id="arrivee" name="arrivee" placeholder="'._("Arrivée").'"';
	            if(isset($arrivee)){
		            echo ' value="'.$arrivee.'"';
	            }
	            echo '>
	              	  </div>';	  			
	        }
  			else
   			{
	            echo '<div class="input-prepend date" id="dp2" data-date-format="dd-mm-yyyy">
	              			<span class="add-on"><i class="icon-calendar"></i></span>
	              			<input type="text" id="arrivee" name="arrivee" placeholder="'._("Arrivée").'"';
	            if(isset($arrivee)){
		            echo ' value="'.$arrivee.'"';
	            }
	            echo '>
	              	  </div>';		
  			} 	
  			echo '</div>';		
  			?>	
  				

             <div class="input-prepend">
                <span class="add-on"><i class="icon-suitcase"></i></span>
                <input type="text" id="nbnuits" name="nbnuits" placeholder="<?php echo _("Nombre de nuitées"); ?>" value="<?php if(isset($nbnuits)) echo $nbnuits; ?>" >
             </div>
             <label class="radio">
                <input type="radio" name="nbPers" id="1personne" value="1personne" <?php if(isset($nbPers) && $nbPers=="1personne") echo " checked";?>>
                <?php echo _("une personne"); ?>
             </label>
             <label class="radio">
                <input type="radio" name="nbPers" id="2personnes" value="2personnes" <?php if(isset($nbPers) && $nbPers=="2personnes") echo " checked";?>>
                <?php echo _("deux personnes"); ?>
             </label>
  				</div>
   			 <div class="control-group">                   
  				<div class="span8">
  					<textarea name="message" id="message" name="message" rows="14" class="span12" placeholder="<?php echo _("Votre message..."); ?>" value="<?php if(isset($message)) echo $message; ?>" required></textarea>
  				</div>
  				</div>
        <div class="controls">  
  				<button type="submit" class="btn btn-success pull-right" id="envoyer"><?php echo _("ENVOYER VOTRE MESSAGE"); ?></button>
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
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/locales/bootstrap-datepicker.fr.js"></script>
    <script>
    $(function(){
      window.prettyPrint && prettyPrint();
      $('#dp1').datepicker({
        format: 'dd-mm-yyyy',
        weekStart: 1,
        todayBtn: "linked",
        autoclose: true,
        todayHighlight: true,
        language: 'en'
      });
      $('#dp2').datepicker({
        format: 'dd-mm-yyyy',
        weekStart: 1,
        todayBtn: "linked",
        autoclose: true,
        todayHighlight: true,
        language: 'fr'
      });
    });
  </script>
  
  
	<script type="text/javascript">
		$(function() {
			$("#envoyer").click(function(){
				valid = true;
				
				if($("#nom").val()==""){
					$("#nom").closest('.control-group').removeClass('success').addClass('error');	
					valid = false;
				}
				else {
					$("#nom").closest('.control-group').removeClass('error').addClass('success');	
				}
				
				if($("#prenom").val()==""){
					$("#prenom").closest('.control-group').removeClass('error').addClass('success');	
				}
				
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