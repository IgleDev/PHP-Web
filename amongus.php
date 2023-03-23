<?php
    $amongus['Among Us Rojo'] = array('name'=>'Among Us Rojo', 'desc' => 'Es el más mid de todos', 'probab' => '20%', 'foto' => 'rojo.png');
    $amongus['Among Us Verde'] = array('name'=>'Among Us Verde', 'desc' => 'Solo lo lleva Sebas y molesta', 'probab' => '40%', 'foto' => 'verde.png');
    $amongus['RBR'] = array('name'=>'RBR', 'desc' => 'RBR', 'probab' => '80%', 'foto' => 'marron.png');
    $amongus['Among Us Blanco'] = array('name'=>'Among Us Blanco', 'desc' => 'Lo lleva chonki', 'probab' => '50%', 'foto' => 'blanco.png');
    $Aselect = $_GET['amongus'];

    if(!$amongus[$Aselect]){
        header('Location: error.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css">
    <title>Among Us</title>
</head>
<body>
    <div class="container-among">
        <div class="container-detalles">
            <div class="container-foto">
                <img src="img/<?=$amongus[$Aselect]['foto']?>" alt="">
            </div>
            <div class="desc">
                <p><span>Nombre del Artículo</span>: <?=$amongus[$Aselect]['name']?> </p>
                <p><span>Descripción</span>: <?=$amongus[$Aselect]['desc']?></p>
            </div>
            <div class="probab">
                <p><?=$amongus[$Aselect]['probab']?></p>
            </div>
        </div>
    </div>
</body>
</html>
