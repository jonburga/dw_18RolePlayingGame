<?php

//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Creature.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    editAction();
}

function editAction() {
    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $avatar = $_POST["avatar"];
    $attackPower=$_POST["attackPower"];
    $lifeLevel=$_POST["lifeLevel"];
    $weapon=$_POST["weapon"];




    $creature = new Creature();
    $creature->setIdCreature($id);
    $creature->setName($name);
    $creature->setAvatar($avatar);
    $creature->setDescription($description);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);
    $creatureDAO = new CreatureDAO();
    $creatureDAO->update($creature);

    header('Location: ../../index.php');
}

?>

