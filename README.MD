Projeto CRUD em PHP utilizando MVC
Um projeto escalável que, com o tempo, terá muitas evoluções e testes.

Visão Geral
Este projeto é um sistema CRUD (Create, Read, Update, Delete) básico desenvolvido em PHP utilizando o padrão de arquitetura MVC (Model-View-Controller). O objetivo deste projeto é demonstrar a estruturação e boas práticas de programação.

Funcionalidades
Criação de Usuários: Formulário para adicionar novos usuários ao sistema.
Leitura de Usuários: Listagem de todos os usuários cadastrados.
Atualização de Usuários: Formulário para editar informações de usuários existentes.
Deleção de Usuários: Função para remover usuários do sistema.
Estrutura do Projeto

Padrão MVC
Model: Contém a lógica de acesso aos dados. Exemplo: UserModel.php
View: Contém a lógica de apresentação dos dados na interface do usuário. Exemplo: createView.php, indexView.php
Controller: Gerencia a lógica de controle da aplicação, intermediando entre Model e View. Exemplo: UserController.php

Arquivos e Pastas Principais
index.php: Ponto de entrada principal do aplicativo. Lida com o roteamento das ações.
config/Database.php: Configuração da conexão com o banco de dados.

Importância
Ter um conhecimento sólido em CRUD, POO, e MVC é fundamental, pois você lidará com a base de tudo que fará em um sistema: requisições e renderizações. Este estudo facilita a compreensão de frameworks mais avançados como o Laravel.

