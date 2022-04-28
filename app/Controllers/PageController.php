<?php

namespace Pokedex\Controllers;


use Pokedex\Models\PageModels;
use Pokedex\Models\TypeModels;
use Pokedex\Models\ListTypeModels;

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

    public function typePage($urlParams)

    {
        $urlTypeId = $urlParams['action'];
        $listTypeModel = new ListTypeModels;
        $list_by_type = $listTypeModel-> getType($urlTypeId);
        
        
        $this->affichage('typePage', ['list_type'=> $list_by_type]);

    }
}
