<?php

namespace Models; // nome de sse espaço é Models 

use Configuration\Database; //aqui nos traz a pasta config e a classe Database 

class Model
{
    private $conn; // nulo
    private $table = 'users'; // q é a tabela do nosso bd 

    public function __construct()
    {
        $database = new Database(); //instanciamos a classe Database
        $this->conn = $database->connect(); // aqui o metodo da classe 
    }

    public function getAll() //consultar todos os registros do bd 
    {
        $query = 'SELECT * FROM ' . $this->table; // consulta a tabela 
        $stmt = $this->conn->prepare($query); //prepara a consulta com a conexao 
        $stmt->execute();// executa 

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);// Retorna todos os resultados como um array associativo
    }

    public function getById($id) // esse metodo pega os dados do id que passamos por parametro 
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = :id'; //aqui é a restrição do que nos queremos 
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);// id do banco  = id parametro 
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    // as variaveis q estao dntro do create , vao ser amarzenadas ns colunas 
    public function create($name, $email, $phone)
    {
        $query = 'INSERT INTO ' . $this->table . ' (nome, email, telefone) VALUES (:name, :email, :phone)';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        
        if ($stmt->execute()) {
            return true;
        }
        
        return false;
    }

    public function update($id, $name, $email, $phone)
    {// quero upar o q esta dentro da tabela pelo id 
        $query = 'UPDATE ' . $this->table . ' SET nome = :name, email = :email, telefone = :phone WHERE id = :id';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        
        if ($stmt->execute()) {
            return true;
        }
        
        return false;
    }

    public function delete($id)
    {   //quero deletar pegando pelo id 
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        
        if ($stmt->execute()) {
            return true;
        }
        
        return false;
    }
}
