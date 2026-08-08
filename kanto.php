<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>essai</title>
</head>
<body>
    <form action="kanto.php" method="post">
        <label>Nom: <input type="text" name="nom" required></label><br>
        <label>Prenom: <input type="text" name="premom" required></label>
        <label>Age: <input type="text" name="age" required></label>
        <label>Sexe: <input type="text" name="sexe" required></label>
        <button type="submit">Envoyer</button>
    </form>
    <?php
    try{
        $pdo=new PDO (
            "mysql:host=localhost;dbname=basedonnee",'root'," ",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
        header("Location:kanto.php");
        exit;
    }catch(PDOException $e){
        die("Erreur de connexion:  ".$e->getMessage());
    }
    ?>
</body>
</html>