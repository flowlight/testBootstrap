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
	     echo '<li><a href="index.php" class="active">BIENVENUE</a></li>';
     }
     else{
	     echo '<li><a href="index.php">BIENVENUE</a></li>';
     }
     
                    
     echo '             <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            CITY BREAK
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">';
     if($active == "chambre"){
	     echo '<li><a href="chambre.php" class="active">CHAMBRE</a></li>';
     }
     else{
	     echo '<li><a href="chambre.php">CHAMBRE</a></li>';
     }                   
     
     if($active == "galerie"){                       
         echo '<li><a href="galerie.php" class="active">GALERIE</a></li>';
     }
     else{
	     echo '<li><a href="galerie.php">GALERIE</a></li>';
     }
     
     if($active == "tarif"){                       
         echo '<li><a href="tarif.php" class="active">TARIFS</a></li>';
     }
     else{
	     echo '<li><a href="tarif.php">TARIFS</a></li>';
     }

     echo '
                        </ul>
                    </li>';
     if($active == "environs"){                       
         echo '<li><a href="environs.php" class="active">ENVIRONS</a></li>';
     }
     else{
	     echo '<li><a href="environs.php">ENVIRONS</a></li>';
     }     
        
     if($active == "localisation"){                       
         echo '<li><a href="localisation.php" class="active">LOCALISATION</a></li>';
     }
     else{
	     echo '<li><a href="localisation.php">LOCALISATION</a></li>';
     }    
     
     if($active == "contact"){                       
         echo '<li><a href="contact.php" class="active">CONTACT</a></li>';
     }
     else{
	     echo '<li><a href="contact.php">CONTACT</a></li>';
     }            

     echo '             <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            LANGUE
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php">Français</a></li>
                            <li><a href="index.php">English</a></li>
                        </ul>
                    </li>               
                </ul>
            </div>
        </div>
      </div>
    </div>';
}
?>
