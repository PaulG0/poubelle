<?php
// declaration de trois variables avec affectation
	$a=0;
	$b=1;
	$c=44;
// declaration d'un tableau
$entier=[0,2,14,44,-2,'une chaine',false,"$b"];
//affichage du 14 a la position 2(3ème élément)
echo $entier[2];
echo "<h1> liste des valeurs du tableau entier</h1>";
// iteration sur les elements du tableau
foreach ($entier as $valeur){
	echo"Valeur: $valeur <br>";
}
//declaration d'un tableau associatif
$asso=["un"=>1,"deux"=>2,"trois"=>3,"faux"=>false,"chaine"=>"blabla"];
echo $asso["trois"];
// afficahege d'élément  correspondant a la clé 3
echo$asso["trois"];
?>

<h2>affichage des éléments du tableau$asso</h2>
<?php
foreach($asso as $k=>$value){
	echo"$k : $value<br>";
}
//jout d'élément dans un tableau: 
$asso["news"]="nouvelle valeur";
var_dump($asso);
$entier[]=18;
var_dump($entier);
//modifier un existant
 $asso["news"]="autre val";
 $entier[1]=1000;
 $entier[15]="quinze";
 var_dump($asso);
 var_dump($entier);