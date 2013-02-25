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
                  <li><a href="environs.php">Dans les environs</a></li>
                  <li><a href="localisation.php">Localisation</a></li>
                  <li class="active"><a href="#">Contact</a></li>
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
              <input type="date" placeholder="Arrivée">
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