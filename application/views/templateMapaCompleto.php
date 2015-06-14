<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php 		
		$staticObj = ORM::Factory('objetivo');
	    foreach ($mapa as $id => $setPerspectivas) {	    	
			$setGrupos = $setPerspectivas['grupos'];			
			$perspectiva = $setPerspectivas['perspectiva'];
			$setObjetivos = array();		
			echo "<table class='table table-bordered table-responsive  mapaestrategico'>";
				echo "<tr>";
					echo "<th colspan='".$countObjetivos."'>" . $perspectiva['DESCRICAO_PERSP'] . "</th>";
				echo "</tr>";
				echo "<tr>";				
				foreach ($setGrupos as $keyGrupo => $grupo) {
					$setObjetivos[] = $grupo['objetivos'];				
					echo "<td colspan ='".count(end($setObjetivos))."'>" . $grupo['CATEGORIA'] . "</td>";
				}
				echo "</tr>";
				echo "<tr>";
				foreach ($setObjetivos as $objetivos) {									
					foreach ($objetivos as $keyObjetivo => $objetivo) {					
						echo "<td style = 'background-color:". $staticObj::get_color($objetivo['indicadores'])."'>" . $objetivo['DESCRICAO_OBJ'] . "</td>";
					}
				}
				echo "</tr>";
			echo "</table>";
			echo "<br>";
		}
  ?>


