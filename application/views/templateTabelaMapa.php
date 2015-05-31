<?php defined('SYSPATH') or die('No direct script access.'); ?>

	<?php 
	 	# Pra listar todos os mapas existentes fazer isso aqui na página de mapas igual
		
		#INSERINDO LINHA TESTE 

	
		foreach ($perspectivas as $key => $perspectiva) {
			$grupos = $perspectiva->grupo->find_all();
			$setObjetivos = array();		
			echo "<table>";
				echo "<tr>";
					echo "<th>" . $perspectiva->DESCRICAO_PERSP . "</th>";
				echo "</tr>";
				echo "<tr>";				
				foreach ($grupos as $keyGrupo => $grupo) {
					$setObjetivos[] = $grupo->objetivo->find_all();				
					echo "<td colspan ='".count(end($setObjetivos))."'>" . $grupo->CATEGORIA . "</td>";
				}
				echo "</tr>";
				echo "<tr>";
				foreach ($setObjetivos as $objetivos) {									
					foreach ($objetivos as $keyObjetivo => $objetivo) {					
						echo "<td>" . $objetivo->DESCRICAO_OBJ . "</td>";
					}
				}
				echo "</tr>";
			echo "</table>";
			echo "<br><br><br>";
		}
	?>
	
	
