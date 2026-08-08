<?php
    $host = 'localhost';
    $dbname = 'basedonnee';
    $username = 'root';
    $pasword = '';
    try{
        $pdo = new PDO("mysql: host=$host;dbname=$dbname;charset=utf8",$username,$pasword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        echo"connexion reussi";
    }catch(PDOException $e){
        die("erreur:" .$e->getMessage());
    }
?>