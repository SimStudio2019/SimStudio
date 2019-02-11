<?php
redirect_session('idUser', '/connexion', false);

$name = $_POST["name"];

$save = fopen ("files/".$name, "w+");

$sizefile = filesize();
fseek($sizefile);

fwrite($fp, );
