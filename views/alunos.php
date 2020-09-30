<a class="btn btn-info" href="?pagina=inserir_aluno">Inserir novo aluno</a>
<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr style="background-color:#B0E0E6">
			<th>Aluno</th>
			<th>Data de Nascimento</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td>'.$linha['nome_aluno'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
		?>
			<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno'];?>">
				<i class="fas fa-user-edit">
			</a></td>
			<td>
				<a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno'];?>">
					<span style="color:tomato">
						<i class="fas fa-eraser"></i>
					</span>
				</a>
			</td></tr>
		
		<?php
			}
		?>
	</tbody>
</table>