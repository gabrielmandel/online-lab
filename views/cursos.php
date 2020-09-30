<a  class="btn btn-info" href="?pagina=inserir_curso">Inserir Novo Curso</a>
<br>
<table class="table table-hover table-striped" id="tabela_curso">
	<thead>
		<tr style="background-color:#B0E0E6">
			<th>Curso</th>
			<th>Carga Horária</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_cursos)){
				echo '<tr><td>'.$linha['nome_curso'].'</td>';
				echo '<td>'.$linha['carga_horaria'].'</td>';
		
		?>
			<td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso'];?>">
				<i class="fas fa-edit"></i>
			</a></td>
			<td>
				<a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso'];?>">
					<span style="color:tomato">						
						<i class="fas fa-trash-alt"></i>
					</span>				
				</a>
			</td></tr>
		<?php
			}
		?>
	</tbody>
</table>