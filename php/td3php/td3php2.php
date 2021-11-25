<?php
include './td3php.php';
getHeader(true,'test avec ma session');
if (isset($_GET['logout'])) {
	$_SESSION=[];
	session_destroy();
}
if (isset($_COOKIE['user'])) {
	$_SESSION['user']=$_COOKIE['user'];
}

if (isset($_POST['user'])) {
	$_SESSION['user']=$_POST['user'];
	if (isset($_POST['reco'])) {
		$temps = 10;
		setcookie ("user",$_POST['user'],time()+$temps);
	}
}


if (isset($_SESSION['user'])) {
	echo "vous etes connecté en tant que ".$_SESSION['user']."<br>";
	echo"<a href='?logout'>deconnexion</a>"; 

}else{
	?>
	<form action='<?=$_SERVER['PHP_SELF']?>' method='post'>
		<input class="form-control" name="user" placeholder="saisir votre nom">
		<input type="checkbox" name="reco"> rester connecter
		<button class="btn btn-primary">valider</button>		
	</form>
<?php
}
getFooter();