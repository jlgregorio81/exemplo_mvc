<?php
namespace controller;

use model\ClienteModel;

class ClienteCtr{

    //..atribrutos
    private $get;
    private $post;
    //..todo controller faz referência a um model e a uma view
    private $model;

    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;        
    }

    /* 
     * Pega os dados da view e alimenta o model
     */
    public function viewToModel(){
        if(!is_null($this->post)){
            $this->model = new ClienteModel(
                $this->post['id'], $this->post['nome']
            );
        }
    }

    /*
     * método simples, apenas para exemplificar que o controller atualiza a view, manipula o model,
     * enfim, controla todo o fluxo de execução da aplicação.
     */
    public function save(){
        //..alimenta a model com os dados da view
        $this->viewToModel();
        echo "<h1>Mensagem</h1>";
        echo "<p>Dados gravados com sucesso!</p>";
        echo "<p>ID: {$this->model->getId()}</p>";
        echo "<p>NOME: {$this->model->getNome()}</p>";
    }
    
    




}