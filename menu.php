<?
function menu($active)
{
	echo'<div class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.php">
                <strong style="color:#AEBA67;">Côté Jardin</strong> <small>City Break</small>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">';
                
     if($active == "index"){
	     echo '<li><a href="index.php" class="active">'._("BIENVENUE").'</a></li>';
     }
     else{
	     echo '<li><a href="index.php">'._("BIENVENUE").'</a></li>';
     }
     
                    
     echo '             <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            CITY BREAK
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">';
     if($active == "chambre"){
	     echo '<li><a href="chambre.php" class="active">'._("CHAMBRE").'</a></li>';
     }
     else{
	     echo '<li><a href="chambre.php">'._("CHAMBRE").'</a></li>';
     }                   
     
     if($active == "galerie"){                       
         echo '<li><a href="galerie.php" class="active">'._("GALERIE").'</a></li>';
     }
     else{
	     echo '<li><a href="galerie.php">'._("GALERIE").'</a></li>';
     }
     
     if($active == "tarif"){                       
         echo '<li><a href="tarif.php" class="active">'._("TARIFS").'</a></li>';
     }
     else{
	     echo '<li><a href="tarif.php">'._("TARIFS").'</a></li>';
     }

     echo '
                        </ul>
                    </li>';
     if($active == "environs"){                       
         echo '<li><a href="environs.php" class="active">'._("ENVIRONS").'</a></li>';
     }
     else{
	     echo '<li><a href="environs.php">'._("ENVIRONS").'</a></li>';
     }     
        
     if($active == "localisation"){                       
         echo '<li><a href="localisation.php" class="active">'._("LOCALISATION").'</a></li>';
     }
     else{
	     echo '<li><a href="localisation.php">'._("LOCALISATION").'</a></li>';
     }    
     
     if($active == "contact"){                       
         echo '<li><a href="contact.php" class="active">'._("CONTACT").'</a></li>';
     }
     else{
	     echo '<li><a href="contact.php">'._("CONTACT").'</a></li>';
     }            

     echo '             <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            '._("LANGAGE").'
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="'.$active.'.php?lang=fr_FR">'._("Français").'</a></li>
                            <li><a href="'.$active.'.php?lang=en_US">'._("Anglais").'</a></li>
                        </ul>
                    </li>               
                </ul>
            </div>
        </div>
      </div>
    </div>';
}
?>
