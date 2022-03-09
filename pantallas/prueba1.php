<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Primera prueba</title>
</head>

<body>
    <?php
     session_start();
     $nick=$_SESSION['jugador'];
     echo "<h3 class='textcentro'>bienvenido a tu primera prueba $nick</h3>";
    ?>
        <div class="row">
            <div class="column-3">
                <p class="textop">Trata de un mundo virtual de rol multijugador masivo en línea que se juega con un casco de realidad virtual que estimula los cinco sentidos del usuario a través de su cerebro.</p>
                <div class="centrado">
                    <img src="../img/prueba1_3.jpg" alt="" width="90%" height="90%">
                </div>
            </div>
            <div class="column-3">
                <p class="textop">Cuenta la historia de un joven ninja hiperactivo que hará todo lo posible por ascender al máximo grado ninja de su aldea con el propósito de ser reconocido como alguien importante dentro de su aldea.</p>
                <div class="centrado">
                    <img src="../img/prueba1_2.jpg" alt="" width="90%" height="90%">
                </div>
            </div>
            <div class="column-3">
                <p class="textop"> Cuenta la historia de un joven que vive en el año 1912 y 1926, Este joven recorre el mundo acompañado de una espada y una caja ya que son las cosas más importantes en su vida</p>
                <div class="centrado">
                    <img src="../img/prueba1.jpg" alt="" width="90%" height="90%">
                </div>
            </div>
        </div>
        <div id="formulario">
            <form action="../validaciones/validar.php" method="get" id="inicio">
                <p class="textcentro"><input class="textcentro" type="text" name="prueba1"></p>
                <p class="textcentro"><input type="submit" value="Verificar" name="preg1"></p>
            </form>
        </div>
        <?php
    if (isset($_GET['msg'])) {
        echo '<p class="aviso" id="msg">Pista:' .$_GET['msg'].'</p>';
    }
    ?>

</body>

</html>