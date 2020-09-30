<!DOCTYPE html>
<html>
<head>
	<title>Online Lab</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="https://kit.fontawesome.com/e1bd153e5b.js" crossorigin="anonymous"></script>
</head>

<body>
	<header>
		<div class="container">	
			<a href="?pagina=home"><img src="img/logo_onlinelab.png" title="logo" alt="Logo"></a>
			<div id="menu">
				<a href="?pagina=cursos">Cursos</a>
				<a href="?pagina=alunos">Alunos</a>
				<a href="?pagina=matriculas">Matrículas</a>
				<?php if(isset($_SESSION['login'])){ ?>
				<a href="logout.php"><?php echo $_SESSION['usuario']; ?>(sair)</a>
			<?php } ?>
			</div>
		</div>
	</header>

	<div id="conteudo" class="container">
