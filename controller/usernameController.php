<?php
    class usernameController{
        private $model;

        public function __construct(){
            require_once("c://xampp/htdocs/Proyect Db/model/usernameModel.php");
            $this ->model = new usernameModel();
        }
        public function Guardar($nombre){
            $id = $this ->model->insertar($nombre);
            return ($id!=false) ? header("Location:show.php?id=".$id) :header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this-> model ->show($id) : header("Location:index.php");
        }
    }


?>