<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form method="post" action="{url}unimed/pdf" class="modal-content">
                  
	<div class="form-group">
   	<label for="txt_mes">Mês: </label> 
      <input type="text" class="form-control" name="txt_mes" id="txt_mes" required/> 
   </div>
   <div class="form-group">
   	<label for="txt_ano">Ano: </label> 
      <input type="text" class="form-control" name="txt_ano" id="txt_ano" required/> 
  	</div>                     	
   <div class="modal-footer">
   	<button type="submit" class="btn btn-success">Gerar</button>
   </div>
</form>  