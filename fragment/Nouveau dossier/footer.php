
<?php
$colonne=$_GET['colonne'];
$ligne=$_GET['ligne'];




?>




<table border="1">

<?php
        for($i=0;$i<$ligne;$i++){
            echo "<tr>";
            for($j=0;$j<$colonne;$j++){
                  echo "<td>{$j}-{$i}";
                  
            }
        }


?>
</table>
</body>
</html>