<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form method="post" action="{url}unimed/cadastro" class="modal-content">
                  
	<div class="form-group">
   	<label for="txt_nome">Nome do titular:</label> 
      <input type="text" class="form-control" name="txt_nome" id="txt_nome" required/> 
   </div>
   <div class="form-group">
   	<label for="txt_mensalidade">Mensalidade (R$):</label> 
      <input type="text" class="form-control" name="txt_mensalidade" id="txt_mensalidade" required/> 
  	</div>                     	
   <div class="modal-footer">
   	<button type="submit" class="btn btn-success">Cadastrar</button>
   </div>
</form>  