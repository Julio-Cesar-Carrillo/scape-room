<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Tercera prueba</title>
</head>

<body>
    <?php
     session_start();
     $nick=$_SESSION['jugador'];
     echo "<h3 class='textcentro'>bienvenido a la ultima prueba $nick</h3>";
    ?>
        <div class="row">
            <div class="column-3">
                <p class="textop">La historia se desarrolla en un mundo ficticio en el que la humanidad está al borde de la extinción a causa de unas criaturas humanoides, lo que obliga a los sobrevivientes a refugiarse en tres enormes murallas que impiden el acceso a dichos monstruos.</p>
                <div class="centrado">
                    <img src="../img/prueba3.jpg" alt="" width="90%" height="90%">
                </div>
            </div>
            <div class="column-3">
                <p class="textop">Es una serie Manga que cuenta la historia de un joven ninja hiperactivo que hará todo lo posible por ascender al máximo grado ninja de su aldea con el propósito de ser reconocido como alguien importante dentro de su aldea.</p>
                <div class="centrado">
                    <img src="../img/prueba1_2.jpg" alt="" width="90%" height="90%">
                </div>
            </div>
            <div class="column-3">
                <p class="textop">Trata de un mundo virtual llamado Sword Art Online de rol multijugador masivo en línea que se juega con un casco de realidad virtual que estimula los cinco sentidos del usuario a través de su cerebro.</p>
                <div class="centrado">
                    <img src="../img/prueba1_3.jpg" alt="" width="90%" height="90%">
                </div>
            </div>
        </div>
        <div id="formulario">
            <form action="../validaciones/validar.php" method="get" id="inicio">
                <p class="textcentro"><input class="textcentro" type="text" name="prueba3"></p>
                <p class="textcentro"><input type="submit" value="Verificar" name="preg3"></p>
            </form>
        </div>
        <?php
    if (isset($_GET['msg'])) {
        echo '<p class="aviso" id="msg">Pista: '.$_GET['msg'].'</p>';
    }
    ?>
</body>

</html>