<?php require'pages/header.php'; ?>
<?php
require 'classe/relatorios.class.php';
require 'classe/users.class.php';
$r = new Relatorios();
$u = new Users();

$id = 'id';
if(isset($_POST['id'])) {
	$id = $_POST['id'];
}

$total_relatorios = $r->getTotalRelatorios($id);

//$total_usuarios = $u->getTotalUsuarios();

?>

<section id="hero">
    <div class="hero-container">
    	<div class="row about-container">
    		<div class="col-lg-6 content order-lg-1 order-2">
      			<h1>Bem vindo à X.Solutions</h1>
      			<h2>Temos a solução ideal, para o seu tipo de negócio</h2>
     			<a href="./" class="btn-get-started">Iniciar</a>
     		</div>
     	</div>
    </div>
</section><!-- #hero -->

<?php require'pages/footer.php'; ?>
