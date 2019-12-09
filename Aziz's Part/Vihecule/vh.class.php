<?php
    require'../../dbconexion.class.php';
    class Vehicle
    {
        private $cnx;

        public function __construct()
        {
            $db = new base;
            $connect = $db->connectDB();
            $this->cnx = $connect;

        }
         public function read()
        {
            try {
                $req='SELECT * FROM vehicle';
                $result= $this->cnx->prepare($req);
                $result->execute();
                return $result;
            }catch (PDOException $e) {
                                  echo $e->getMessage();

                }

} 
     public function ajout($Status,$Vehiclenumber)
     {

         try {
      $sql ="INSERT INTO vehicle (Status,Vehiclenumber)
       VALUES (:status,:vehiculenumber)";
      $result= $this->cnx->prepare($sql);
      $result->bindparam(":status", $Status);
      $result->bindparam(":vehiculenumber", $Vehiclenumber);
      $result->execute();
      return $result;
     } catch (PDOException $ex) {
     echo $ex->getMessage();
                }
            }
   public function delete($vid)
    {
        try {
            $sql = 'DELETE FROM vehicle WHERE vid = :vid';
            $result =$this->cnx->prepare($sql);
            $result->bindparam(":pid", $pid);
            $result->execute();
            return $result;
        } catch (PDOException $exce) {
            echo $exce->getMessage();
        }
    }
}
?>