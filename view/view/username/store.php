<?php
    require_once("c://xampp/htdocs/Proyect Db/controller/usernamecontroller.php");
    $obj = new usernameController();
    $obj->guardar($_POST["nombre"]);
    // echo $_POST["nombre"];
   
?>