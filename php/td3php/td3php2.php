<?php
include './td3php.php';
getHeader(true,'test avec ma session');
if (isset($_GET['logout'])) {
	$_SESSION=[];
	session_destroy();
}
if (isset($_POST['user'])) {
	$_SESSION['user']=$_POST['user'];
}
if (isset($_SESSION['user'])) {
	echo "vous etes connecté en tant que ".$_SESSION['user']."<br>";
	echo"<a href='?logout'>deconnexion</a>"; 
}else{
	?>
	<form action='<?=$_SERVER['PHP_SELF']?>' method='post'>
		<input class="form-control" name="user" placeholder="saisir votre nom">
		<button class="btn btn-primary">valider</button>		
	</form>
<?php
}
getFooter();