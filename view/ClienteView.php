<?php
namespace view;

use model\ClienteModel;

class ClienteView{

    //..armazena uma instância do model associado
    protected $model;
    //..define o arquivo phtml ref. ao código da página
    protected $htmlFile;

    public function __construct(ClienteModel $model = null)
    {
        $this->model = is_null($model) ? new ClienteModel() : $model;
        $this->htmlFile = 'view/cliente_view.phtml';
    }

    //..renderiza o cabeçalho da página
    public function drawHeader(){
        require_once('view/header.phtml');
    }

    //..renderiza o rodapé
    public function drawFooter(){
        require_once('view/footer.phtml');
    }

    //..exibe a página
    public function show(){
        $this->drawHeader();
        require_once($this->htmlFile);
        $this->drawFooter();
    }

}