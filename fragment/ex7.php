<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<fieldset>
		
		<legend>chaînes </legend>
		<form method="get">
			<div>
				<label>frapper votre texte</label><br>
				<textarea name="texte"></textarea>
				<?php
				$s=$_GET['texte'];
				echo " <br>nb de mot : ",str_word_count($s),"<br>";
				echo "<br> nb de caractere : ",strlen($s),"<br>";
				?>
				<select>
   						<option value="car">mot</option>
    					<option value="mot">nb mot</option>
				</select>
				<?php


				
				?>

				<input type="submit" name="submit">
			</div>	

		</form>




</fieldset>






</body>
</html>