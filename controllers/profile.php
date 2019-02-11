<?php
redirect_session('idUser', '/connexion', false);

$query = $bdd->prepare("SELECT * from user WHERE idUser = ?");
$query->execute(array($_SESSION['idUser']));
$user = $query->fetch();

$form = array(
    'email'			=> $user['email'],
    'firstname'		=> $user['firstname'],
    'lastname'		=> $user['name'],
);
