<?php

class usernameModel{
    private $PDO;
    public function __construct(){
        require_once("c://xampp/htdocs/Proyect Db/config/db.php");
        $con= new db();
        $this-> PDO = $con->conexion();
    }
    public function insertar($nombre){
        $statement = $this->PDO->prepare("INSERT INTO username VALUES(null,:nombre)");
        $statement->bindParam(":nombre",$nombre);
        return($statement->execute())? $this->PDO->lastInsertId() : false;
    }
}


?>