<?php 

namespace Pokedex\Models;

use Pokedex\utils\Database;
use PDO;


class ListTypeModels 
{

private $name;
private $number;
private $type_name;

public function getName() {

    return $this->name;
}

public function getNumber() {

return $this->number;
}

public function getTypeName() {

return $this->type_name;

}


public function getType($id)
    
{
        $pdoDBconnexion = Database::getPDO();

        $sql = "SELECT `pokemon`.`name`, `pokemon`.`number`, `type`.`name` AS `type_name`
    FROM `pokemon`
    INNER JOIN `pokemon_type` ON `pokemon`.`number` = `pokemon_type`.`pokemon_number`
    INNER JOIN `type` ON `type`.`id` = `pokemon_type`.`type_id`
    WHERE `type`.`name` = '$id'";

        $pdoStatement = $pdoDBconnexion->query($sql);
        $type = $pdoStatement->fetchAll (PDO::FETCH_CLASS, self::class);
        return $type;
    }




}






?>