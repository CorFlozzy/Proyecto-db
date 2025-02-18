<?php
    class usernameController{
        private $Model;

        public function __contruct(){
            require_once("c://xampp/htdoc/Proyect Db/model/usernameModel.php");
            $this ->model = new usernameModel();
        }
        public function Guardar($nombre){
            $id = $this ->model->insertar($nombre);
            return ($id!=false) ? header("Location:show.php?id=".id) :header("Location:create.php");
        }

    }


?>