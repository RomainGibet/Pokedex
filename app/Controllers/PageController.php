<?php

namespace Pokedex\Controllers;

use Pokedex\Models\PageModels;
use Pokedex\Models\TypeModels;

class PageController extends CoreController
{


    public function listePage()

    {
        $typeList = new TypeModels;
        $types = $typeList->getTypeDatas();
        $this->affichage('listePage', ['type_data_list' => $types]);
    }

    public function pokePage($urlParams)
    {
        $urlPokeId = $urlParams['id'];
        $pokeModel = new PageModels;
        $pokeDatas = $pokeModel->getPokemon($urlPokeId);

        $this->affichage('pokepage', ['poke_datas' => $pokeDatas]);
    }
}
