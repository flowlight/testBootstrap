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
                <strong style="color:#AEBA67;">Côté Jardin</strong> <small><i>&nbsp;City Break</i></small>
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
                            '._("HEBERGEMENT").'
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">';
     if($active == "chambre"){
	     echo '<li><a href="chambre.php" class="active">'._("CHAMBRE1").'</a></li>';
     }
     else{
	     echo '<li><a href="chambre.php">'._("CHAMBRE1").'</a></li>';
     }                   
     
     if($active == "galerie"){                       
         echo '<li><a href="galerie.php" class="active">'._("CHAMBRE2").'</a></li>';
     }
     else{
	     echo '<li><a href="galerie.php">'._("CHAMBRE2").'</a></li>';
     }
     
     

     echo '
                        </ul>
                    </li>';
                    
     if($active == "localisation"){                       
         echo '<li><a href="localisation.php" class="active">'._("LOCALISATION").'</a></li>';
     }
     else{
	     echo '<li><a href="localisation.php">'._("LOCALISATION").'</a></li>';
     }  
                    
     if($active == "environs"){                       
         echo '<li><a href="environs.php" class="active">'._("DECOUVRIR").'</a></li>';
     }
     else{
	     echo '<li><a href="environs.php">'._("DECOUVRIR").'</a></li>';
     }     
        
  
     
     if($active == "contact"){                       
         echo '<li><a href="contact.php" class="active">'._("CONTACT").'</a></li>';
     }
     else{
	     echo '<li><a href="contact.php">'._("CONTACT").'</a></li>';
     }            

	 if($active == "tarif"){                       
         echo '<li><a href="tarif.php" class="active">'._("TARIFS").'</a></li>';
     }
     else{
	     echo '<li><a href="tarif.php">'._("TARIFS").'</a></li>';
     }

     /*
     echo '             <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            '._("LANGAGE").'
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
                            <li><a href="'.$active.'.php?lang=fr_FR">'._("Français").'</a></li>
                            <li><a href="'.$active.'.php?lang=en_US" class="active">'._("Anglais").'</a></li>';*/
							echo '<li><a href="'.$active.'.php?lang=fr_FR"><img src="fr-flag.png"></a></li>';
	}
	else
	{
	     /*echo '                   
                            <li><a href="'.$active.'.php?lang=fr_FR" class="active">'._("Français").'</a></li>
                            <li><a href="'.$active.'.php?lang=en_US">'._("Anglais").'</a></li>';*/
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
	    	echo '<li>'._("HEBERGEMENT").' <span class="divider">/</span></li>';
	        echo '<li class="active"> '._("CHAMBRE1").'</a> <span class="divider">/</span></li>';	  
	    	echo '<li><a href="galerie.php">'._("CHAMBRE2").'</a></li>';
	        echo '</ul></div>';
	    	break;
	    case "galerie":
			echo '<div class="container">';
			echo '	<ul class="breadcrumb">';
	    	echo '<li>'._("HEBERGEMENT").' <span class="divider">/</span></li>';
	        echo '<li><a href="chambre.php">'._("CHAMBRE1").'</a> <span class="divider">/</span></li>';	    	
	        echo '<li class="active"> '._("CHAMBRE2").'</a></li>';	  
	        echo '</ul></div>';
	    	break;    		    	
    }

}
?>
