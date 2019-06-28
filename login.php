<?php require'pages/header.php'; ?>
<div class="container">
	<h1>Login</h1>
	<?php 
	require 'classe/users.class.php';
	$u = new Users();
	if(isset($_POST['email']) && !empty($_POST['email'])) {
		$email = addslashes($_POST['email']);
		$senha = $_POST['senha'];
		
		if($u->login($email, $senha)) {
			?>
			<script type="text/javascript">window.location.href="enviar-relatorios.php";</script>
			<?php
		} else {
			?>
			<div class="alert alert-danger">
				Usuário e/ou Senha errados! 
			</div>
			<?php
		}
		
	}
	?>

	<form method="POST">
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" class="form-control" />
		</div>
		<div class="form-group">
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha" class="form-control" />
		</div>
			<input type="submit" value="Fazer Login" class="btn btn-defaut" />
	</form>
</div>

<?php require'pages/footer.php'; ?>
