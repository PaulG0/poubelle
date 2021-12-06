<form method="POST">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="text"  name="color">
    <input type="submit" value="Valider">
</form>
<?php
$size=$_POST['size'];
$color=$_POST['color'];
    echo "<div style='font-size: {$size}px; color:{$color}'> Message de taille {$size}px en {$color}  </div>";
?>