<?php 

namespace Pokedex\Controllers;

use Pokedex\Models\HomeModels;

class MainController extends CoreController 
{


    public function pageNotFound()
    {
       
        header("HTTP/1.1 404 Not Found");
        $this->affichage('404');
    }

    public function home()
    {

        $HomeDatas= new HomeModels;
        $homeDataList = $HomeDatas->getHomeDatas();
        $this->affichage('home', ['home_datas_list' => $homeDataList]);

    }


}

