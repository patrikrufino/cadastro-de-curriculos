<?php

if(!isset($_SESSION)) {
    session_start();
}
class UsuarioController {
    public function inserir($nome, $cpf, $email, $senha)
    {
        require_once '/opt/lampp/htdocs/cadastro-de-curriculos/Model/Usuario.php';
        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setCpf($cpf);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);

        //retunr $usuario->getNome();

        $r = $usuario->inserirBD();
        $_SESSION['Usuario'] = serialize($usuario);
        return $r;
    }
}
