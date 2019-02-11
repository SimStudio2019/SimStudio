<?php
redirect_session('idUser', '/connexion', false);

$query = $bdd->prepare("SELECT * from file WHERE idDossier=".$_GET["dossier"]);
$query->execute(array($_SESSION['idUser']));
$modele = $query->fetch();
