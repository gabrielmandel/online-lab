<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo curso</h1><br>
	<form method="post" action="processa_curso.php">
	<label class="badge badge-pill badge-info">Nome do curso:</label><br>
	<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso"><br><br>
	<label class="badge badge-pill badge-info">Carga horária:</label><br>
	<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horaria"><br><br>
	<input class="btn btn-info" type="submit" name="Inserir curso">
</form>

<?php } else{  ?>
	<?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
		<?php if($linha['id_curso'] == $_GET['editar']){ ?>
			<h1>Editar curso</h1><br>
				<form method="post" action="edita_curso.php">
				<input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
				<br>
				<label class="badge badge-pill badge-info">Nome do curso:</label><br>
				<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>">
				<br><br>
				<label class="badge badge-pill badge-info">Carga horária:</label><br>
				<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horaria"value="<?php echo $linha['carga_horaria']; ?>"><br><br>
				<input class="btn btn-info" type="submit" name="Editar curso">
			</form>
		<?php }?>
	<?php } ?>

<?php } ?>