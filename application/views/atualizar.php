<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form method="post" action="{url}unimed/atualizar" class="modal-content">
                  
	<div class="form-group">
   	<label for="txt_men_antiga">Mensalidade antiga (R$):</label> 
      <input type="text" class="form-control" name="txt_men_antiga" id="txt_men_antiga" required/> 
   </div>
   <div class="form-group">
   	<label for="txt_men_nova">Mensalidade atual (R$):</label> 
      <input type="text" class="form-control" name="txt_men_nova" id="txt_men_nova" required/> 
  	</div>                     	
   <div class="modal-footer">
   	<button type="submit" class="btn btn-success">Atualizar</button>
   </div>
</form>  