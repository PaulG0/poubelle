<?php
session_start();
?>

<h1>autre page</h1>
<?php
if(isset($_SESSION['user'])){
?>
	<h2>utilisateur</h2>
	<ul>
		<li><?=$_SESSION['user']?></li>
		<li>nav : <?=$_SESSION['navigateur']?></li>
		<li>ip : <?=$_SESSION['ip']?></li>
	</ul>
<?php
}else{
	echo "<h2> Aucun utilisateur conneté </h2>";
}
?>
<a href="test.html"> retour formulaire</a>