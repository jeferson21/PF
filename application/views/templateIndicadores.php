<?php defined('SYSPATH') or die('No direct script access.');?>

<html>
	<body>

		[ Cadastro de Indicadores ] <br><br>

			<?=form::open('Indicadores/salvar') ?>

				 Objetivo Estratégico: <?=form::select('OBJETIVOS_idOBJETIVO',$OBJETIVOS_idOBJETIVO); ?> <br><br>  
				  
				 Descrição: <?=form::input('DESCRICAO_IND');
				  				if(isset($errors['DESCRICAO_IND'])) echo $errors['DESCRICAO_IND']; 
				  			 ?> <br><br>     

			      Situação: <?=form::select('SITUACAO_IND', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>

			    <?=form::submit('btn_submit', 'Salvar') ?>
			<?=form::close()?> 


			<br><br>[ Importação XML ] <br><br>
			
			<?=form::open('Indicadores/importarXML') ?>
				
				Indicador: <?=form::select('INDICADORES_idINDICADORES',$INDICADORES_idINDICADORES); ?> <br><br>
			    Item: <?=form::select('ITENS_idITENS',$ITENS_idITENS); ?> <br><br>
			    XML Schema: <?=form::file('arquivoXML');?> <br>
			    
			    <?=form::submit('btn_submit', 'Salvar') ?>
			<?=form::close()?>     
	</body>
</html>