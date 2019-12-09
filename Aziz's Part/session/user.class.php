<?php 

include "cnx.class.session.php";

class User {
    private $pdo;

    function __construct()
    {
        $con = new baseDonnee;
        $this->pdo = $con->connectBD();

    }
    public function register ($username, $email,$pass,$adr,$tel)
    {
        try
        {
            $sql = "INSERT INTO  client(username,email,pwd,adresse,telephone)
                    VALUES (:username,:email,:pwd,:adresse,:telephone)";
            $query = $this->pdo->prepare($sql);
            $query -> bindParam(":username",$username);
            $query -> bindParam(":email",$email);
            $query -> bindParam(":pwd",$pass);
            $query -> bindParam(":adresse",$adr);
            $query -> bindParam(":telephone",$tel);

            $query->execute();
            return $query;
        }   catch(PDOException $e){
            echo "Donkey Kong has caught an exception:".$e->getMessage();            
        }
    }
    public function login ($username,$pass)
    {
        try
        {
            $sql = "SELECT * FROM client WHERE username= :username";
                  
            $query = $this->pdo->prepare($sql);
            $query -> bindParam(":username",$username);
            $query->execute();
            $User = $query->fetch();
            if (password_verify($pass,$User['pwd']))
                return $User;
                else
                return false;
            
        }   catch(PDOException $e){
            echo "Donkey Kong has caught an exception:".$e->getMessage();            
        }
    }

}