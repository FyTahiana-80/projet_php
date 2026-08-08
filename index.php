<?php
    session_start();
    require 'config/connexion.php'; 
    require 'config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formule.css">
    <title>I-Concert</title>
</head>
<body>
    <h1><i>I-Concert</i></h1>
    <p>Soyez prêt à plonger dans l'univers de la musique</p>
    <div><h1>inscription ouvert</h1></div>
        <section class="signup">
                <form action="" method="post">
                    <div class="name">
                        <label for="nom">nom</label>
                    </br>
                        <input type="text" name="nom">
                    </div>
                    <div class="lastname">
                        <label for="nom">prenom</label> 
                    </br>
                        <input type="text" name="prenom">
                    </div>
                    <div class="age">
                         <label for="nom">age</label> 
                        <input type="number" name="age">
                    </div>
                    <input type="submit" class="bouton" value="s'inscrire" name="inscrire">
                    <nav class="reserve"><a href="reservation.php">Réservation</a></nav>
                    <?php
                        if(isset($_POST["inscrire"])){
                            $nom = $_POST["nom"];
                            $prenom = $_POST["prenom"];
                            $age = $_POST['age'];

                            try{
                                $req = $pdo->prepare("INSERT INTO personne(nom, prenom, age) VALUES(?,?,?)");
                                $req->execute(array($nom,$prenom,$age));
                            }catch(PDOException $e){
                                echo "erreur".$e->getMessage();
                            }

                        }
                    ?>
                
                </form>
        </section>
</body>
</html>