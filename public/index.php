<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Core;
use App\Controllers\AddressController;

$core = new Core();

if(!empty($_POST['cep']))
{
    $request = new \stdClass;

    $post = (object)$_POST;

    $request->post = $post;
    
    $addressClass = new AddressController();

    $anddress = ($addressClass->get_address($request));

    echo $address->bairro;

} else {
    $core->content('home');
}


