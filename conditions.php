<div id="conditions" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="<?php echo _("Conditions Générales"); ?>" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="conditionsLabel"><?php echo _("Conditions Générales"); ?></h3>
  </div>
  <div class="modal-body">
    <small>
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
    </small>
  </div>
  
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo _("Fermer"); ?></button>
    <a class="btn" href="conditions_print.php"><?php echo _("Imprimer"); ?></a>
  </div>
</div>