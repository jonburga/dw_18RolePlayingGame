 <?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Creature.php');


//Compruebo que me llega por GET el parámetro
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    //Creamos un objeto CreatureDAO para hacer las llamadas a la BD
    $creatureDAO = new CreatureDAO();
    $creature = $creatureDAO->selectById($id);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>RolePlayingGame</title>
        <!-- Bootstrap Core CSS -->
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-light navbar-fixed-top navbar-expand-md bg-black" role="navigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"> <img src="../../assets/img/imagen-small.jpeg" alt="imagen-small"></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a type="button" class="btn btn-info " href="app/views/insert.php">Crear una criatura</a>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container mt-5">
            <form class="form-horizontal" method="post" action="../controllers/editController.php">
                
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">name</label>
                    <div class="col-sm-10">
                    <input type="text"  readonly class="form-control-plaintext" value="<?php echo $creature->getName(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <input type="textarea" readonly class="form-control-plaintext"  value="<?php echo $creature->getDescription(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="avatar" class="col-sm-2 control-label">Avatar</label>
                    <div class="col-sm-10">
                        <img src="<?php echo $creature->getAvatar(); ?>" class="img-thumbnail" alt="...">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="attackPower" class="col-sm-2 control-label">AttackPower</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext"  value="<?php echo $creature->getAttackPower(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lifeLevel" class="col-sm-2 control-label">LifeLevel</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext"  value="<?php echo $creature->getLifeLevel(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="weapon" class="col-sm-2 control-label">Weapon</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext"  value="<?php echo $creature->getWeapon(); ?>">
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $creature->getIdCreature(); ?>">
                
                </form>
                <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; A. F. 2017</p>
                    </div>
                </div>
            </footer>

        </div>


        
        <script src="../../assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../assets/js/bootstrap.min.js"></script>

</body>

</html> 