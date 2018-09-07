<?php

use model\ClienteModel;
use view\ClienteView;

require_once('autoload.php');

$cli = new ClienteModel(1,'Mariana Reclamona');

$view = new ClienteView($cli);

$view->show();


