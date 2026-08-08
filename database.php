<?php 
    class Database{
        private static $isinstance = null;
        private $connexion;

        private function __construct(){
            try{
                $this->connexion=new PDO(
                    "mysql:host=localhost;dbname=basedonnee","root"," "
                );
                $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die("erreur: " . $e->getMessage());
            }
        }

        public static function getConnexion(){
            if (self::$isinstance === null){
                self::$isinstance = new Database();
            }
            return self::$isinstance->connexion;
        }
    }

    echo 'zavatra';
?>