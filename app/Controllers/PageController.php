<?php 

namespace Pokedex\Controllers;



class PageController extends CoreController 
{




    public function pokePage($urlParams)
    {
       $urlPokeId = $urlParams['id'];

        $this->affichage('pokepage', ['poke_id' => $urlPokeId]);

    }


}

