<?php 
    if(!$_POST){
        header('Location: index.php');
    }

    if(!isset($_POST['nombre']) || trim($_POST['nombre']) === ''){
        exit('Debes escribir un nombre');
    }

    if(!isset($_POST['contrasenha']) || trim($_POST['contrasenha']) === ''){
        exit('Debes escribir una contrasenha');
    }

    $amongus['Rojo'] = array('name'=>'Among Us Rojo', 'desc' => 'Es el más mid de todos', 'probab' => '20%', 'foto' => 'rojo.png');
    $amongus['Verde'] = array('name'=>'Among Us Verde', 'desc' => 'Solo lo lleva Sebas y molesta', 'probab' => '40%', 'foto' => 'verde.png');
    $amongus['Marron'] = array('name'=>'RBR', 'desc' => 'RBR', 'probab' => '80%', 'foto' => 'marron.png');
    $amongus['Blanco'] = array('name'=>'Among Us Blanco', 'desc' => 'Lo lleva chonki', 'probab' => '50%', 'foto' => 'blanco.png');
    $amongusTypes = array('Rojo','Verde','Marron','Blanco');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css.">
    <title>Tienda</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Among Us</a></li>
            <li><a href="">Cuenta</a></li>
            <li class="nombreUsuario"><?php echo $_POST['nombre']?></li>
        </ul>
    </nav>
    <div>
        <div class="main-container">
            <img src="img/cartel.jpg" alt="elpepe">
            <div><p>Amongs Us tienda oficial</p></div>
        </div>
    </div>

        <div class="card-main">
        <?php foreach($amongus as $amon) : ?>
            <div class="card">
                <div class="image">
                    <img src="img/<?=$amon['foto']?>" alt="Among Us =<?=$amon?>">
                </div>
                <div class="title">
                    <h3><?=$amon['name']?></h3>
                </div>
                <div class="des">
                    <p><?=$amon['desc']?></p>
                    <a href="amongus.php?amongus=<?=$amon['name']?>" target="_blank"><button class="btn4">Compra!</button></a>
                </div>
            </div>
        <?php endforeach?>
        </div>
</body>
</html>