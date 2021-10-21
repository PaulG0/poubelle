<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/styleinscrit.css">
    <title>recapitulatif</title>
</head>
<body>
    <nav>
        
        <div><a class="lien" href="../index.html"> acceuille</a></div>

    </nav>
        <h1>récapitulatif du formulaire</h1>
    <div class="info">
        <?php
                echo 'Nom : ',$_POST["nom"],'<br>';
                echo 'Prénom : ',$_POST["prenom"],'<br>';
                echo 'Mail : ',$_POST["email"],'<br>';
                echo 'Tel : ',$_POST["tel"],'<br>';
                echo 'date de naissance : ',$_POST['anniv'];
        ?>
        <div class="merci">merci pour avoir effectué le formulaire d'inscription<br>
                        à bientôt</div>

    
    </div>



</body>
</html>






