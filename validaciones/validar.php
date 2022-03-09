<?php
if (isset($_POST['inicio']) && empty($_POST['jugador'])){
    header('location: ../index.php?msg=Falta un nombre de usuario');
} else if (isset($_POST['inicio'])){
    session_start();
    $_SESSION['prueba1']='check';
	$_SESSION['jugador']=$_POST['jugador'];
    header('location: ../pantallas/prueba1.php');
    } 
else if (isset($_GET['preg1']) && strtolower($_GET['prueba1'])=='kimetsu no yaiba'){
		session_start();
		$_SESSION['prueba2']='check';
		header('location: ../pantallas/prueba2.php');
	} else if (isset($_GET['preg1'])){
		header('location: ../pantallas/prueba1.php?msg=El joven es un cazador de demonios y en la caja esta su hermana demonio');
	} 
	else if (isset($_GET['preg2']) && strtolower($_GET['prueba2'])=='jujutsu kaisen'){
		session_start();
		$_SESSION['prueba3']='check';
		header('location: ../pantallas/prueba3.php');
	} else if (isset($_GET['preg2'])){
		header('location: ../pantallas/prueba2.php?msg=El joven es un cazador de demonios y en la caja esta su hermana demonio');
	} 
	else if (isset($_GET['preg3']) && strtolower($_GET['prueba3'])=='shingeki no kyojin'){
		session_start();
		$_SESSION['final']='check';
		header('location: ../pantallas/final.php');
	} else if (isset($_GET['preg3'])){
		header('location: ../pantallas/prueba3.php?msg=Los peligros que les asechanzas detrás de los muros son humanos de 15m');
	} 