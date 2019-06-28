<?php

/**
 * 
 */
class Relatorios {

	public function enviarRelatorios($nome, $mes, $publicacao, $video, $hora, $revisita, $estudo, $observ) { 
		global $pdo;

		$sql = "INSERT INTO relatorios SET id_usuario = :id_usuario, nome = :nome, mes = :mes, publicacao = :publicacao, video = :video, hora = :hora, revisita = :revisita, estudo = :estudo, observ = :observ";

		$sql = $pdo->prepare($sql);
		$sql->bindValue(':id_usuarios', $_SESSION['cLogin']);
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':mes', $mes);
		$sql->bindValue(':publicacao', $publicacao);
		$sql->bindValue(':video', $video);
		$sql->bindValue(':hora', $hora);
		$sql->bindValue(':revisita', $revisita);
		$sql->bindValue(':estudo', $estudo);
		$sql->bindValue(':observ', $observ);
		$sql->execute();

	}
	
	public function getTotalRelatorios($id)	{
		global $pdo;

		$id = 'id';
		if(!empty($id['id'])) {
			$id = 'id';
		}

		$sql = $pdo->prepare("SELECT * FROM relatorios");
		$sql->bindValue(":id", $id);
		$sql->execute();
	}
}