<form method="get">

<?php
include "header.php";
?>




<fieldset>
<legend>tableau</legend>
<form method="get">
    <label>COLONNE:</label>
    <input type="number" name="colonne">
<label>LIGNE:</label>
    <input type="number" name="ligne">
    <input type="submit" name="submit" value="créer le tableau">
</form>
</fieldset>







<?php
include "footer.php";
?>