<h1 style="text-align: center">Bem vindo ao Online Lab</h1>

<form method="post" action="login.php">
	<label class="badge badge-pill badge-info"> Usuário:</label>
	 <input type="text" name="usuario" placeholder="Nome do Usuário" class="form-control">
	 <br>
	 <label class="badge badge-pill badge-info"> Senha:</label>
	 <input type="password" name="senha" placeholder="Senha" class="form-control">
	 <br>
	 <input type="submit" value="Login" class="btn btn-info">
</form>
<br>
<?php
if(isset($_GET['erro'])){ ?>
	<div class="alert alert-danger" role="alert">
  		Usuário e/ou senha inválidos.
	</div>;
<?php } ?>