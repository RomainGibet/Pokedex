<?php
namespace Pokedex\Models;

use Pokedex\utils\Database;
use PDO;

class TypeModels 

{

private $id;
private $name;
private $color;

public function getId() {

    return $this->id;
}

public function getName() {

    return $this->name;
}

public function getColor() {

    return $this->color;
}


public function getTypeDatas() {

    $pdoDBconnexion= Database::getPDO();

    $sql= 'SELECT * FROM `type`';

    $pdoStatement = $pdoDBconnexion->query($sql);
    $typeList=$pdoStatement->fetchAll(PDO::FETCH_ASSOC, self::class);

    return $typeList;


}

}
