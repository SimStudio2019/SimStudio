<?php

//$messages = $bdd->query("SELECT * FROM message");
$messagesRequest = $bdd->query('SELECT name,firstname,content, message.date FROM message,user WHERE message.idUser=user.idUser AND published =1 ORDER BY date DESC');
//var_dump($messages);

$messages = $messagesRequest->fetchAll();
$nb_msg = count($messages);

for($i=0; $i < $nb_msg; $i++){
	$tmp_date = new DateTime($messages[$i]['date']);
	$tmp_date_string = $tmp_date -> format('Y-m-d');
	$messages[$i]['date'] = $tmp_date_string;
}



$smarty->assign('messages', $messages);