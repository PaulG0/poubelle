<?php 
function getHeader(bool $startSession,string $title){
	if ($startSession) {
		session_start();
	}

?>
<!DOCTYPE html>
<head>
<html lang="fr">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$title?></title>
</head>
<body>
<?php
}
function getFooter(){


?>


</body>
</html>


<?php


}


?>