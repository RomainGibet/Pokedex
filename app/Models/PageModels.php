<?php

namespace Pokedex\Models;

use Pokedex\utils\Database;
use PDO;

class PageModels

{

    private $id;
    private $name;
    private $hp;
    private $attack;
    private $defense;
    private $spe_attack;
    private $spe_defense;
    private $speed;
    private $number;
    private $concat;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function getDefense()
    {
        return $this->defense;
    }

    public function getSpe_attack()
    {
        return $this->spe_attack;
    }

    public function getSpe_defense()
    {
        return $this->spe_defense;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getConcat()
    {
        $typesArr = explode(",", $this->concat);
        foreach ($typesArr as $pokeType) {
            echo "<div class= 'type_card " . $pokeType . "'>" . $pokeType . "</div>";
        };
    }


    public function getPokemon($id)

    {
        $pdoDBconnexion = Database::getPDO();

        $sql = 'SELECT pokemon.*, GROUP_CONCAT(`type`.`name`) AS concat FROM pokemon
        INNER JOIN pokemon_type ON pokemon.number = pokemon_type.pokemon_number
        INNER JOIN `type` ON `type`.id = pokemon_type.type_id
        Group BY pokemon.number HAVING `pokemon`.`number` =' . $id;

        $pdoStatement = $pdoDBconnexion->query($sql);

        $PokeDatas = $pdoStatement->fetchObject(self::class);

        return $PokeDatas;
    }
}
