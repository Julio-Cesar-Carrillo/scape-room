<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Felicidades</title>
</head>

<body> 
    <div id="titulo2">
        <img src="../img/final.jpg" alt="">
    </div>
    <?php
     session_start();
     $nick=$_SESSION['jugador'];
     echo "<h3 class='txtfinal'>$nick</h3>";
    ?>
    <div class="centrado">
        <p class='txtfinal'> Respondiste a todas las preguntas</p>
    </div>
</body>

</html>