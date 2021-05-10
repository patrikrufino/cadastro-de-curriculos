<?php

/*
 * Classe de conexão com o banco de dados.
 * Patrik Rufino
 * 05/2021
*/

class Conexaobd
{

    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbname = "projeto_final";

    public function conectar()
    {
        $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbname);
        return $conn;
    }
}
