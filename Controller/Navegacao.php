<?php
if (!isset($_SESSION)) {
    session_start();
    require_once '/opt/lampp/htdocs/cadastro-de-curriculos/Controller/UsuarioController.php';
    $uController = new UsuarioController();

    if (isset($_POST["btnPrimeiroAcesso"])) {
        include_once '/opt/lampp/htdocs/cadastro-de-curriculos/View/primeiroAcesso.php';
    } else {
        if (isset($_POST["btnCadastrar"])) {
            require_once '/opt/lampp/htdocs/cadastro-de-curriculos/Controller/UsuarioController.php';
            $uController = new UsuarioController();

            if ($uController->inserir($_POST["txtNome"], $_POST["txtCPF"], $_POST["txtEmail"],
                $_POST['txtSenha'])) {
                include_once '/opt/lampp/htdocs/cadastro-de-curriculos/Resources/SecondaryInterfaces/cadastroRealizado.php';
            } else {
                include_once '/opt/lampp/htdocs/cadastro-de-curriculos/Resources/SecondaryInterfaces/cadastroNaoRealizado.php';
            }
        } else {
            if (isset($_POST["btnCadRealizado"])) {
                include_once '/opt/lampp/htdocs/cadastro-de-curriculos/View/principal.php';
            } else {
                if (isset($_POST["btnCadNRealizado"])) {
                    include_once '/opt/lampp/htdocs/cadastro-de-curriculos/View/primeiroAcesso.php';
                } else {
                    include_once '/opt/lampp/htdocs/cadastro-de-curriculos/View/login.php';
                }
            }
        }
    }
}