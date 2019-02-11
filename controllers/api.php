<?php
redirect_session('idUser', '/connexion', false);

if(!empty($_POST["read"])){
	if($_POST("read")=="composant"){
		$query = $bdd->prepare("SELECT idComposant, name, image, imageNoire FROM ".$_POST["read"]);
		$query->execute();
		echo json_encode($query->fetchAll(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);
	}
}else if(!empty($_GET["read"])){
	if($_GET["read"]=="composant"){
		$query = $bdd->prepare("SELECT idComposant, name, image, imageNoire FROM ".$_GET["read"]);
		$query->execute();
		echo json_encode($query->fetchAll(PDO::FETCH_ASSOC),JSON_PRETTY_PRINT);

	}
}else{
	$query = $bdd->prepare("SELECT * FROM composant");
}

exit();