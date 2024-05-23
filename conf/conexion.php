<?php

class Connection{

        public $host="localhost";
        public $dbname="DBPrueba";
        public $username="postgres";
        public $password="admin";
        public $port = 5432;
        public $connect;

    public static function getConexion(){
        

        try{
            $connection = new Connection();
            $connection->connect = new PDO("pgsql:host={$connection->host};dbname={$connection->dbname};port={$connection->port}", $connection->username, $connection->password);
            $connection->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection->connect;
        }
        catch(PDOException $exp){
            echo("Error al conectarse a la base de datos, $exp");
        }

        
    }
}
    /*
        include_once("conexion.php");
        $conexion = new CConection();
        $conexion->getConexion();*/

?>