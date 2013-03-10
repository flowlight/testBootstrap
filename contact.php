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
	    menu("contact");
    ?>

    <div class="container">
  		<form class="well">
       <fieldset>
        <legend>
            <p>Merci de remplir ce formaulaire pour réserver ou simplement nous poser une question.</p>
        </legend>
        <p><small><i>Les champs en surbrillance rouges sont indispensable</i></small></p>
  		  <div class="row-fluid">
  				<div class="span4">
             <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input type="text" id="nom" name="" placeholder="Votre nom" required>
             </div>             
             <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input type="text" id="prenom" name="" placeholder="Votre prénom">
             </div>
             <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="email" id="mail" name="" placeholder="Votre adresse email" required>
             </div>
             <div class="input-prepend">
                <span class="add-on"><i class="icon-phone"></i></span>
                <input type="text" id="tel" name="" placeholder="Votre numéro de mobile" required>
             </div>					
             <div class="input-prepend date" id="dp1" data-date-format="dd-mm-yyyy">
              <span class="add-on"><i class="icon-calendar"></i></span>
              <input type="text" placeholder="Arrivée">
             </div>
             <div class="input-prepend">
                <span class="add-on"><i class="icon-suitcase"></i></span>
                <input type="text" id="nuits" name="" placeholder="Nombre de nuitées">
             </div>
             <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="1personne">
                une personne
             </label>
             <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="2personnes" checked>
                deux personnes
             </label>
  				</div>
  				<div class="span8">
  					<textarea name="message" id="message" rows="14" class="span12" placeholder="Votre message..."></textarea>
  				</div>
        <div class="controls">  
  				<button type="submit" class="btn btn-success pull-right">ENVOYER VOTRE MESSAGE</button>
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
        language: 'fr'
      });
    });
  </script>
  </body>
</html>