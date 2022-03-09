<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Incio</title>
</head>

<body>
    <div id="titulo">
        <img src="./img/blood.jpg" alt="">
    </div>
    <div class="centrado">
        <img class="mediana" src="./img/ingresanombre.jpg" alt="ingresa nombre jugador">
    </div>
    
    <div>
        <form action="./validaciones/validar.php" method="post">
            <p class="textcentro"><input class="textcentro" type="text" name="jugador"></p>
            <p class="textcentro"><input type="submit" value="Empezar" name="inicio"></p>
        </form>
    </div>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p class="aviso" id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
</body>

</html>