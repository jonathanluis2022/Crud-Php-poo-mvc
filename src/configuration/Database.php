<?php
//conexao com o banco de dados 
namespace Configuration;

class Database
{
    private $host = 'localhost';
    private $db_name = 'cruphp'; // nome do banco de dados
    private $username = 'root'; 
    private $password = '';
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new \PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); //tratamento de erros 
        } catch (\PDOException $e) {
            echo 'Erro de Conexão: ' . $e->getMessage();
        }

        return $this->conn; // tudo certo , retorno da conexao com o banco de dados 
    }
}
