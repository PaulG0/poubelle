<?php

session_start();
if(isset($_POST['login'])){
	$_SESSION['user']=$_POST['login'];//on passe le login dans la variable user de la super global session
	$_SESSION['navigateur']=$_SERVER['HTTP_USER_AGENT'];//on recupere le navigateur utiliser
	$_SESSION['ip']=$_SERVER['REMOTE_ADDR'];//on recupere l'ip du serve
	
	echo "vous etes connecté en tant que ",$_POST['login'];
}
?>
<a href="autrepage.php"> test de co </a>