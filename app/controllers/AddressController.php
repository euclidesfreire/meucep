<?php

namespace App\Controllers;

/**
	*Class Andress
*/  
class AddressController
{   
    /**
	*Get andress
	*
	* @return $xml = com todos os dados do endereço
	*/  
    public function get_address($request){
        $cep = preg_replace("/[^0-9]/", "", $request->post->cep);

        $url = "http://viacep.com.br/ws/" . $cep . "/xml/";
    
        $xml = simplexml_load_file($url);

        return $xml;
    }

}