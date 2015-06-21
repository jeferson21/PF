<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php 		
		$staticObj = ORM::Factory('objetivo');
		
		echo '<div class="missao"> <b>Missão</b>: ', $mapaObject->MISSAO ,'</div>';
		echo '<div class="visao"> <b>Visão de Futuro</b>: ', $mapaObject->VISAO ,'</div>';
		
	    foreach ($mapa as $id => $setPerspectivas) {	    	
			$setGrupos = $setPerspectivas['grupos'];			
			$perspectiva = $setPerspectivas['perspectiva'];
			$setObjetivos = array();

			echo "<table class='table tabela-Mapa table-bordered'>";

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

					$objetivo_details = Route::get('default')
                        ->uri(array(
                          'controller' => 'Objetivos', 'action' => 'details', 'id' => $objetivo['idOBJETIVO']));
                          

					   echo "<td style = 'background-color:". $staticObj::get_color($objetivo)."'>"
					   		 . HTML::anchor($objetivo_details, $objetivo['DESCRICAO_OBJ']) . 
						  "</td>";
					}
				}
				echo "</tr>";
			echo "</table>";
			echo "<br>";
		}
  ?>


