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
        $statement->bindParam(":nombre", $nombre);
        return($statement->execute())? $this->PDO->lastInsertId() : false;
    }

     public function show($id) {
        $statement = $this->PDO->prepare("SELECT * FROM username WHERE id = :id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        return $statement->fetch();
    }
}


?>