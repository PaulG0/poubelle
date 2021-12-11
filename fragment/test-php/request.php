<h1>recuperation du get</h1>
<h2>lien exemple</h2>
<ul>
	<li><a href="?q=">aplha</a></li>
	<li><a href="?q= hello world! &repeat=12">beta</a></li>
	<li><a href="?q= le pro">zeta</a></li>


</ul>
<h2>Valeur du parametre q (exemple)</h2>
<ul>
	<li>valeur:<?php echo $_GET["q"] ?></li>
	<li>valeur:<?php echo $_GET["repeat"]??0 ?></li>
</ul>




<?php
//affiche le contenu de $_GET
var_dump($_GET);



?>