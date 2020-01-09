<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<table>
	<tr>
		<th>Cliente</th>
		<th>Mensalidade</th>
		<th>Situação</th>
		<th></th>									
	</tr>
	<?php 
		foreach($CLIENTE as $c) {
			echo '<tr>';
			echo '<td>'.$c->NOME.'</td>';
			echo '<td> R$ '.$c->MENSALIDADE.',00</td>';
			if ($c->ATIVO == 1) {
				echo '<td>'.anchor('Unimed/ativo/'.$c->idCLIENTE.'/'.$c->ATIVO, "ATIVO", array('class'=>"btn btn-success", 'id'=>"botao")).'</td>';
			}
			if ($c->ATIVO == 0) {
				echo '<td>'.anchor('Unimed/ativo/'.$c->idCLIENTE.'/'.$c->ATIVO, "INATIVO", array('class'=>"btn btn-danger", 'id'=>"botao")).'</td>';
			}			
			echo '<td>'.anchor('Unimed/v_telaeditar/'.$c->idCLIENTE, "EDITAR", array('class'=>"btn btn-primary", 'id'=>"botao")).'</td>';
			echo '</tr>';
			
			
		}
	?>						

</table>