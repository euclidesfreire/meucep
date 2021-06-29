<?php

//Carregar autoload
require_once __DIR__ . "/../vendor/autoload.php";

use App\Core;
use App\Controllers\AddressController;

//Iniciar core da aplicação
$core = new Core();

//Caso seja feita alguma solicitação 
if(!empty($_POST['cep']))
{
    //Criado objeto request 
    $request = new \stdClass;

    //objeto post solicitado 
    $post = (object)$_POST;

    //Associar request a post
    $request->post = $post;
    
    //Instanciar objeto Andress
    $addressClass = new AddressController();

    //Solicitar dados de endereço
    $address = ($addressClass->get_address($request));

    //Inserir dados no core da aplicação
    $core->setDatas($address);

}

//Iniciar conteúdo da página
$core->content('home');



