<?
$case_option = true;

function appliquer_case($chaine)
{
	global $case_option;
	if($case_option){
		return mb_strtoupper($chaine, 'UTF-8');
	}
	else{
		return $chaine;
	}
}


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
                <strong style="color:#AEBA67;">Côté Jardin</strong> <small><i>&nbsp;City Break</i></small>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">';
                
     if($active == "index"){
	     echo '<li><a href="index.php" class="active">'.appliquer_case(_("Bienvenue")).'</a></li>';
     }
     else{
	     echo '<li><a href="index.php">'.appliquer_case(_("Bienvenue")).'</a></li>';
     }
     
                    
     echo '             <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            '.appliquer_case(_("La Chambre")).'
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">';
     if($active == "chambre"){
	     echo '<li><a href="chambre.php" class="active">'.appliquer_case(_("La Chambre 1")).'</a></li>';
     }
     else{
	     echo '<li><a href="chambre.php">'.appliquer_case(_("La Chambre 1")).'</a></li>';
     }                   
     
     if($active == "galerie"){                       
         echo '<li><a href="galerie.php" class="active">'.appliquer_case(_("La Chambre 2")).'</a></li>';
     }
     else{
	     echo '<li><a href="galerie.php">'.appliquer_case(_("La Chambre 2")).'</a></li>';
     }
     
     

     echo '
                        </ul>
                    </li>';
                    
     if($active == "localisation"){                       
         echo '<li><a href="localisation.php" class="active">'.appliquer_case(_("Localisation")).'</a></li>';
     }
     else{
	     echo '<li><a href="localisation.php">'.appliquer_case(_("Localisation")).'</a></li>';
     }  
                    
     if($active == "environs"){                       
         echo '<li><a href="environs.php" class="active">'.appliquer_case(_("Découvrir")).'</a></li>';
     }
     else{
	     echo '<li><a href="environs.php">'.appliquer_case(_("Découvrir")).'</a></li>';
     }     
        
  
     
     if($active == "contact"){                       
         echo '<li><a href="contact.php" class="active">'.appliquer_case(_("Contact")).'</a></li>';
     }
     else{
	     echo '<li><a href="contact.php">'.appliquer_case(_("Contact")).'</a></li>';
     }            

	 if($active == "tarif"){                       
         echo '<li><a href="tarif.php" class="active">'.appliquer_case(_("Tarifs")).'</a></li>';
     }
     else{
	     echo '<li><a href="tarif.php">'.appliquer_case(_("Tarifs")).'</a></li>';
     }

     /*
     echo '             <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            '.appliquer_case(_("LANGAGE")).'
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">';*/
                        
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
	     /*echo '                   
                            <li><a href="'.$active.'.php?lang=fr_FR">'.appliquer_case(_("Français")).'</a></li>
                            <li><a href="'.$active.'.php?lang=en_US" class="active">'.appliquer_case(_("Anglais")).'</a></li>';*/
							echo '<li><a href="'.$active.'.php?lang=fr_FR"><img src="fr-flag.png"></a></li>';
	}
	else
	{
	     /*echo '                   
                            <li><a href="'.$active.'.php?lang=fr_FR" class="active">'.appliquer_case(_("Français")).'</a></li>
                            <li><a href="'.$active.'.php?lang=en_US">'.appliquer_case(_("Anglais")).'</a></li>';*/
							echo '<li><a href="'.$active.'.php?lang=en_US"><img src="uk-flag.png"></a></li>';
	}      
	              
/*
     echo '
                        </ul>
                    </li>';
                    */
    echo '            
                </ul>
            </div>
        </div>
      </div>
    </div>';
    
    
    // CRUMB
    
    
    switch ($active){

	    case "chambre":
			echo '<div class="container">';
			echo '<ul class="breadcrumb">';
	    	echo '<li>'.appliquer_case(_("La Chambre")).' <span class="divider">/</span></li>';
	        echo '<li class="active"> '.appliquer_case(_("La Chambre 1")).'</a> <span class="divider">/</span></li>';	  
	    	echo '<li><a href="galerie.php">'.appliquer_case(_("La Chambre 2")).'</a></li>';
	        echo '</ul></div>';
	    	break;
	    case "galerie":
			echo '<div class="container">';
			echo '	<ul class="breadcrumb">';
	    	echo '<li>'.appliquer_case(_("La Chambre")).' <span class="divider">/</span></li>';
	        echo '<li><a href="chambre.php">'.appliquer_case(_("La Chambre 1")).'</a> <span class="divider">/</span></li>';	    	
	        echo '<li class="active"> '.appliquer_case(_("La Chambre 2")).'</a></li>';	  
	        echo '</ul></div>';
	    	break;    		    	
    }

}
?>
