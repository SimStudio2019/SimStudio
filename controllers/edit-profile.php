<?php
redirect_session('idUser', '/connexion', false);

if(isset($_POST['btn_submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
	
	if(!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email'])) {
		
		if ($_SESSION['name'] == $_POST['name'] && $_SESSION['firstname'] == $_POST['firstname'] && $_SESSION['email'] == $_POST['email'] && empty($_POST['oldPassword']) && empty($_POST['newPassword']) && empty($_POST['newPassword2'])){
			$alerts['info'][] = 'Vous n\'avez pas modifié de données';
		}else {
			if($_SESSION['name'] != $_POST['name'] || $_SESSION['firstname'] != $_POST['firstname'] || $_SESSION['email'] != $_POST['email']) {
				$queryData = $bdd->prepare("UPDATE user SET firstname = ?, name = ?, email = ? WHERE idUser = ?");
			}
			
			if(!empty($_POST['oldPassword']) && !empty($_POST['newPassword']) && !empty($_POST['newPassword2'])) {
				$oldPassword = sha1($_POST['oldPassword']);
				$newPassword = sha1($_POST['newPassword']);
				$newPassword2 = sha1($_POST['newPassword2']);
				
				if($_SESSION['password'] == $oldPassword) {
					if(!preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$#', $_POST['newPassword'])){
						$alerts['danger'][] = "Le mot de passe doit comporter 8 caractères avec au moins 1 majuscule et 1 chiffre !";
					}else{
						if($newPassword == $newPassword2) {
							$queryPassword = $bdd->prepare("UPDATE user SET password = ? WHERE idUser = ?");
							
						}else{
							$alerts['danger'][] = 'Les mots de passes sont sont pas identiques';
						}
					}
				}else{
					$alerts['danger'][] = "L'ancien mot de passe est invalide.";
				}
			}else if(!empty($_POST['oldPassword']) || !empty($_POST['newPassword']) || !empty($_POST['newPassword2'])){
				$alerts['danger'][] = "Vous n'avez pas rempli tous les champs de mot de passe";
			}
		}
	}else{
        $alerts['danger'][] = 'Tous les champs ne sont pas remplis !';
    }
	
	if(!empty($queryData)){
		if(!empty($queryPassword)){
			$queryData->execute(array($firstname,$name,$email,$_SESSION['idUser']));
			$queryPassword->execute(array($newPassword,$_SESSION['idUser']));
			

			
			$alerts['success'][] = 'Les données ont été mises à jour.';
		}else{
			$queryData->execute(array($firstname,$name,$email,$_SESSION['idUser']));

			
			$alerts['success'][] = 'Les données ont été mises à jour.';			
		}
	}else if(!empty($queryPassword)){
		$queryPassword->execute(array($newPassword,$_SESSION['idUser']));
		$_SESSION['password'] = $newPassword;
		
		$alerts['success'][] = 'Les données ont été mises à jour.';
	}
}


if(isset($_POST['delete_account'])) {
	$query = $bdd->prepare("DELETE FROM user WHERE idUser = ?");
	$query->execute(array($_SESSION['idUser']));	
	header('location: '.BASE.'/logout');
}


$query = $bdd->prepare("SELECT * from user WHERE idUser = ?");
$query->execute(array($_SESSION['idUser']));
$user = $query->fetch();

$form = array(
    'email'			=> $user['email'],
    'firstname'		=> $user['firstname'],
    'lastname'		=> $user['name'],
);

$_SESSION['email'] = $user['email'];
$_SESSION['name'] = $user['name'];
$_SESSION['firstname'] = $user['firstname'];
$_SESSION['password'] = $user['password'];
