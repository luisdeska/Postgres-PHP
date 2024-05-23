<?php

require_once '../conf/conexion.php';
class Crud extends Connection{
    public static function getData(){
        try{
            $sql = "SELECT * FROM usuarios";
            $stmt= Connection::getConexion()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function obtenerDatos($id){
        try{
            $sql = "SELECT * FROM usuarios WHERE id=:id";
            $stmt= Connection::getConexion()->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function guardarDatos($data){
        try{
            $sql = "INSERT INTO usuarios (id, nombre, correo) VALUES (:id, :nombre, :correo)";
            $stmt= Connection::getConexion()->prepare($sql);
            $stmt->bindParam(":nombre", $data['nombre']);
            $stmt->bindParam(":correo", $data['correo']);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function actualizarDatos($data){
        try{
            $sql = "UPDATE usuarios SET nombre=:nombre, correo=:correo WHERE id=:id";
            $stmt= Connection::getConexion()->prepare($sql);
            $stmt->bindParam(":nombre", $data['nombre']);
            $stmt->bindParam(":correo", $data['correo']);
            $stmt->bindParam(":id", $data['id']);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function eliminarDatos($id){
        try{
            $sql = "DELETE FROM usuarios WHERE id=:id";
            $stmt= Connection::getConexion()->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}