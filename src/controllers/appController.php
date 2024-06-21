<?php

namespace Controllers; // o nome desse espaço 

use Models\Model;

class Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Model(); // toda vez q instanciarmos vai vim automatico 
    }

    public function index() // esse metodo pega toos os dados e renderiza na index 
    {
        $data = $this->model->getAll();
        include_once BASE_PATH . '/views/appView.php'; // aqui inclui a view 
    }

    public function create() // valores que preenchemos la no formulario e cria 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            if ($this->model->create($name, $email, $phone)) { //aseim que for criado edireciona para a index.php 
                header('Location: index.php');  
            } else {
                echo 'Erro ao criar o registro';
            }
        } else {
            include_once BASE_PATH . '/views/createView.php'; //caso ao contrario va para o form de criacao 
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            if ($this->model->update($id, $name, $email, $phone)) {
                header('Location: index.php');
            } else {
                echo 'Erro ao atualizar o registro';
            }
        } else {
            $data = $this->model->getById($id);
            include_once BASE_PATH . '/views/updateView.php';
        }
    }

    public function delete($id)
    {
        if ($this->model->delete($id)) {
            header('Location: index.php');
        } else {
            echo 'Erro ao deletar o registro';
        }
    }
}
