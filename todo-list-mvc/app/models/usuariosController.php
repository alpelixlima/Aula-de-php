<?php

    require __DIR__ ."/../models/usuarios.php";

    class UsuariosController {
        private $UsuariosModel;

        public function __construct() {
        $this->UsuariosModel = new Usuarios();
        }

        public function index() {
            if($_SESSION('id')){
                header("location: index.php?/action-painel");
                exit;
            }
            include __DIR__ . "/../views/login.php";
        }

        public function autenticar() {
            if(!isset($_POST['email'], $_POST['senha'])) {
                header("location: index.php");
                exit;
            }
            $email = trim($_POST['email']);
            $senha = $_POST['senha'];

            if(empty($email) || empty($senha)) {
                $error = "preencha seu email e senha";
                include __DIR__ ."/../views/login.php";
            }
    }

    }
?>