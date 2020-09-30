<a class="btn btn-info" href="?pagina=inserir_matricula">Inserir nova matrícula</a>
<table class="table table-hover table-striped" id="matriculas">
	<thead>
		<tr style="background-color:#B0E0E6">
			<th>Nome do Aluno</th>
			<th>Nome do Curso</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_matriculas)){
				echo '<tr><td>'.$linha['nome_aluno'].'</td>';
				echo '<td>'.$linha['nome_curso'].'</td>';
			
		?>
		<td>
			<a href="deletar_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso'];?>">
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