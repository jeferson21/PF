<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>
		<legend>Montar Mapa</legend>
    
    <?=form::open('Itens/salvar') ?>
      Mapa: <?=form::select('MAPAS_idME',$MAPAS_idME); ?><br><br> 	   
      
      <?php 
         
          foreach ($PERSPECTIVAS_idPERSPECTIVA as $id => $desc) {
            echo  "<b>Perspectiva de</b>:   ".form::checkbox('perspectivas[]', $id, false, 
                        array('id' => 'checkPerspectivas'.$id)) . " " . $desc . "<br><br>";
            echo "<div class='perspectiva' id='perspectivas{$id}'>"."</div>"."<br>";
          }
          
      ?>         	  
		  <?=form::submit('btn_submit', 'Salvar') ?>
		<?=form::close()?><br> 


 		
             
  	</body>
</html>