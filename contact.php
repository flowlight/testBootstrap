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
	
	/*else if(empty($tel)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli votre numéro de téléphone mobile");
	}*/
	
	/*else if(empty($arrivee)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli votre date d'arrivée");
	}*/	
	
	/*else if(!empty($arrivee) && empty($nbnuits)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli le nombre de nuitées");
	}	
	
	else if(!empty($arrivee) && empty($nbPers)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli le nombre de personnes");
	}*/

	else if(empty($message)){
		$valid = false;
		$erreur = _("Vous n'avez pas rempli de message");
	}
			
	if($valid){
		
	    $site = 'http://www.cotejardin-citybreak.fr/testsite/';
	    $mailsite = 'contact@cotejardin-citybreak.fr';
	    //$mailsite = 'ma.x@free.fr';

		$message = nl2br(htmlentities($message));
		$nom     = stripslashes($nom);
		$prenom  = stripslashes($prenom);
		
		$to = 'Contact Côté Jardin <ma.x@free.fr>';
		$sujet = "Côté Jardin : $civilite $nom a contacté le site";
		
		$header  = "From: contact Côté Jardin <ma.x@free.fr> \r\n";
		$header .= "Reply-To: $nom <$mail> \r\n";
		$header .= "Content-Type: text/html; charset=\"utf-8\" \r\n";
	    $header .= "Content-Transfer-Encoding: 8bit \r\n";
	    
	    				
		$msg ='
                <html>
                
                <head>
				    <title>Côté Jardin - City Break - Sartrouville - Nouveau contact</title>
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
                		
		                <table class="table table-hover">
		                	<caption>Nouveau formulaire de contact:<br></caption>
		                	
		                	<tbody>
				                <tr>
				                    <td><span class="add-on"><i class="icon-user"></i></span>  Civilité :</td>
				                    <td>'.$civilite.'</td>
				                </tr>       
				                <tr>
				                    <td><span class="add-on"><i class="icon-user"></i></span>  Nom :</td>
				                    <td>'.$nom.'</td>
				                </tr>             
				                <tr>
				                    <td><span class="add-on"><i class="icon-user"></i></span>  Langue :</td>
				                    <td>'.$lang.'</td>
				                </tr>
				                <tr>
				                    <td><span class="add-on"><i class="icon-envelope"></i></span>  eMail :</td>
				                    <td>'.$mail.'</td>
				                </tr>       
				                <tr>
				                    <td><span class="add-on"><i class="icon-phone"></i></span>  Tel :</td>
				                    <td>'.$tel.'</td>
				                </tr>   
				                <tr>
				                    <td><span class="add-on"><i class="icon-calendar"></i></span>  Date d\'arrivée :</td>
				                    <td>'.$arrivee.'</td>
				                </tr>    
				                <tr>
				                    <td><span class="add-on"><i class="icon-suitcase"></i></span>  Nombre de nuités :</td>
				                    <td>'.$nbnuits.'</td>
				                </tr>  
				                <tr>
				                    <td><span class="add-on"><i class="icon-signin"></i></span>  Nombre de personne :</td>
				                    <td>'.$nbPers.'</td>
				                </tr>                 
				                <tr>
				                    <td><span class="add-on"><i class="icon-pencil"></i></span>  Message :</td>
				                    <td>'.$message.'</td>
				                </tr> 
			                </tbody>
		                </table>  
                
		           </div>  

                </body>
                </html>
                ';		
		
		//$succes = $mailsite." -- ".$to." -- ".$sujet." -- ".$msg." -- ".$header;
		
		if(mail($to, $sujet, $msg, $header)){
			$succes .= _("Merci d'avoir remplis ce formulaire, nous allons vous contacter rapidement.");
			unset($nom);
			unset($civilite);
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
            <p><?php echo _("Merci de remplir ce formulaire pour réserver un séjour ou simplement nous poser une question."); ?></p>
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
	        
			echo ' <div class="alertVide" id="alert"></div>';
	    ?>

        
  		  <div class="row-fluid">
  			<div class="span4">
  			
  			<div class="control-group">
  			 <label class="radio inline">
			   <input type="radio" name="civilite" id="inlineCheckbox1" value="M."> <?php echo _("M."); ?>
			 </label>
			 <label class="radio inline">
			   <input type="radio" name="civilite" id="inlineCheckbox2" value="Mme"> <?php echo _("Mme"); ?>
			 </label>
			 <label class="radio inline">
			   <input type="radio" name="civilite" id="inlineCheckbox2" value="Mlle"> <?php echo _("Mlle"); ?>
			 </label>
  			</div>
			   			
  			 <div class="control-group error">
             	<div class="input-prepend">
                	<span class="add-on"><i class="icon-user"></i></span>
                	<input type="text" id="nom" name="nom" placeholder="<?php echo _("Votre nom"); ?>" value="<?php if(isset($nom)) echo $nom; ?>" required>
                </div>   
             </div>    
             
  			 <!--
  			 <div class="control-group">                   
             <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input type="text" id="prenom" name="prenom" placeholder="<?php echo _("Votre prénom"); ?>" value="<?php if(isset($prenom)) echo $prenom; ?>" >
             </div>    
             </div>
             -->
   			 <div class="control-group error">                   
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
                <input type="number" id="nbnuits" name="nbnuits" placeholder="<?php echo _("Nombre de nuitées"); ?>" value="<?php if(isset($nbnuits)) echo $nbnuits; ?>" >
             </div>
             
             <label class="radio">
                <input type="radio" name="nbPers" id="1personne" value="une personne" <?php if(isset($nbPers) && $nbPers=="une personne") echo " checked";?>>
                <?php echo _("une personne"); ?>
             </label>
             
             <label class="radio">
                <input type="radio" name="nbPers" id="2personnes" value="deux personnes" <?php if(isset($nbPers) && $nbPers=="deux personnes") echo " checked";?>>
                <?php echo _("deux personnes"); ?>
             </label>
             
             <label class="radio">
                <input type="radio" name="nbPers" id="bébé" value="bébé" <?php if(isset($nbPers) && $nbPers=="bébé") echo " checked";?>>
                <?php echo _("un bébé (<2 ans>"); ?>
             </label>
             
             <label class="radio">
                <input type="radio" name="nbPers" id="enfant" value="enfant" <?php if(isset($nbPers) && $nbPers=="enfant") echo " checked";?>>
                <?php echo _("un enfant (<10 ans"); ?>
             </label>
             
             <br>
             <div class="controls">  
  				<button type="submit" class="btn btn-success pull-center" id="envoyer"><?php echo _("ENVOYER VOTRE MESSAGE"); ?></button>
             </div>
  			</div>
   			 <div class="control-group">                   
  				<div class="span8">
  					<textarea name="message" id="message" name="message" rows="20" class="span12" placeholder="<?php echo _("Votre message..."); ?>" value="<?php if(isset($message)) echo $message; ?>" required></textarea>
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
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/locales/bootstrap-datepicker.fr.js"></script>
    <script>
    $(function(){
      var nowTemp = new Date();
      var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

      window.prettyPrint && prettyPrint();
      
      $('#dp1')
      	.datepicker({
	        format: 'dd-MM-yyyy',
	        weekStart: 1,
	        todayBtn: "linked",
	        autoclose: true,
	        todayHighlight: true,
	        language: 'en',
	       	startDate: Date() 
	      });
      
      $('#dp2')
       	.datepicker({
	        format: 'dd-MM-yyyy',
	        weekStart: 1,
	        todayBtn: "linked",
	        autoclose: true,
	        todayHighlight: true,
	        language: 'fr',
	        startDate: Date()
	      });
    });
  </script>
  
  
	<script type="text/javascript">
		$(function() {
			$("#envoyer").click(function(){
				valid = true;
				
				// NOM
				if($("#nom").val()==""){
					$("#nom").closest('.control-group').removeClass('success').addClass('error');
					//$("#alert").closest('.alertVide').removeClass('alertVide').addClass('alert alert-error');	
					//$("#alert").closest('.alert').text("Vous n'avez pas rempli votre nom");
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
				
				// MESSAGES
				if($("#message").val()==""){
					$("#message").closest('.control-group').removeClass('success').addClass('error');	
					valid = false;
				}
				else {
					$("#message").closest('.control-group').removeClass('error').addClass('success');	
				}
				
				// NB DE NUITS
				/*if(!$("#nbnuits").val().match(/^[0-9]/i)){
					$("#nbnuits").closest('.control-group').removeClass('success').addClass('error');	
					valid = false;
				}
				else {
					$("#nbnuits").closest('.control-group').removeClass('error').addClass('success');	
				}	*/
																
				return valid;
			});
		});
	</script>
  </body>
</html>