<?php

namespace App;

/**
	*Class Core = Acesso aos Controllers e Views
*/  
class Core
{
    //Dados buscados
    private $datas = null;

    /**
	*Conteúdo = Views em HTML 
	*
	* @return página solicitada
	*/  
    public function content($viewPath)
    {
        $path = __DIR__ . "/../app/views/{$viewPath}.phtml";

        if(file_exists($path)){
            require_once $path;
        } else {
            echo "Error: View path not found!";
        }
    }

    /**
	*Set datas
	*
	* @param $datas de endereço
	*/  
    public function setDatas($datas)
    {
        $this->datas = $datas;
    }

    /**
	*Get datas
	*
	* @return $datas = dados do endereço solicitado
	*/  
    public function getDatas()
    {
        return $this->datas;
    }


}