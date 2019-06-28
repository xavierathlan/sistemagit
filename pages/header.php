<?php require'config.php'; ?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<title>Sistema Github</title>
	</head>
	<body>
		<div class="content">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				    <div class="navbar-header">
				      	<a class="navbar-brand" href="./">Home</a>
				    </div>
				    <ul class="nav navbar-nav navbar-right">
				    	<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
				      		<li><a href="enviar-relatorios.php">Enviar Relatório</a></li>
				      		<li><a href="sair.php">Sair</a></li>
				      	<?php else: ?>
				      	<li><a href="quemsomos.php">Quem Somos</a></li>
				      	<li><a href="capacitacao.php">Capacitação</a></li>
				      	<li><a href="solucoes.php">Soluções</a></li>
				      	<li><a href="cadastrar.php">Cadastrar</a></li>
				      	<li><a href="login.php">Login</a></li>
				      <?php endif; ?>
				    </ul>
				</div>
			</nav>
		</div>
		