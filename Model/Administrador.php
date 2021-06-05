<?php


class Administrador
{
    private $id;
    private $nome;
    private $cpf;
    private $senha;

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Administrador
     */
    public function setID($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Administrador
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCPF()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     * @return Administrador
     */
    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     * @return Administrador
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    public function carregarAdministrador($cpf)
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM administrador WHERE cpf = ".$cpf;
        $re = $conn->query($sql);
        $r = $re->fetch_object();
        if($r != null)
        {
            $this->id = $r->idadministrador;
            $this->nome = $r->nome;
            $this->cpf = $r->cpf;
            $this->senha = $r->senha;
            $conn->close();
            return true;
        } else
        {
            $conn->close();
            return false;
        }
    }

    public function listaCadastrados()
    {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT idadministrador, nome, cpf FROM administrador;" ;
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }

}

