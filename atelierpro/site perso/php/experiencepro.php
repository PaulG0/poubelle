<?php


$data=file_get_contents ("../data/experiencepro.yaml");
$content=yaml_parse($data);


/*echo '<pre>';
print_r($content);
echo "</pre>";*/



foreach ($content as $experience) {
	echo "<div>";
	echo $experience["poste"]."<br/>";
	echo $experience["entreprise"]." à ".$experience["lieu"]."<br/>";
	echo "De ".$experience["dateDebut"]." à ".$experience["dateFin"]."<br/>";
	echo $experience["descriptif"]."<br/>";
	echo "</div>";
}


?>