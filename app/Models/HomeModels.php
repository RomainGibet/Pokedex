<?php 
namespace Pokedex\Models;

use Pokedex\utils\Database;
use PDO;

class HomeModels

{


    private $name;
    private $number;

    public function getName() 
    {

        return $this->name;
    }

    public function getNumber() 
    {

       return $this->number;
    }


    public function getHomeDatas()

    {

        $pdoDBconnexion = Database::getPDO();

        $sql= 'SELECT `name`, `number` FROM `pokemon`';

        $pdoStatement = $pdoDBconnexion ->query($sql);

        $homeDatas = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        return $homeDatas;
    }


}














?>