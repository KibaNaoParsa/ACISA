<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	foreach($CLIENTE as $c) {
		echo '<form method="post" action="{url}unimed/editarcliente" class="modal-content">';
      echo 		'<input type="hidden" name="id" value="'.$c->idCLIENTE.'">';            
		echo 		'<div class="form-group">'.
   					'<label for="txt_nome">Nome do titular:</label>'. 
     					'<input type="text" class="form-control" name="txt_nome" id="txt_nome" value="'.$c->NOME.'"required/>'. 
   				'</div>';
   	echo 		'<div class="form-group">'.
   					'<label for="txt_mensalidade">Mensalidade (R$):</label>'. 
      			'<input type="text" class="form-control" name="txt_mensalidade" id="txt_mensalidade" value="'.$c->MENSALIDADE.'" required/>'. 
  					'</div>';                     	
   	echo		'<div class="modal-footer">'.
   					'<button type="submit" class="btn btn-success">Cadastrar</button>'.
   				'</div>';
		echo '</form>'; 	
	
	
	}

?>