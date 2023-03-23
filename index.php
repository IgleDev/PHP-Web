<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="tienda.php" method="post">
        <div class="container">
            <div>
                <label for="">Nombre:</label>
                <br>
                <input type="text" name="nombre" id="">
            </div>
            <div>
                <label for="">Contraseña:</label>
                <br>
                <input type="password" name="contrasenha" id="">    
            </div>
            <button type="submit">Entrar</button>
        </div>
    </form>
</body>
</html>