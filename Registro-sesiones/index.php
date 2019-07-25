<?php session_start();

	isset($_SESSION['usuario']) ? header('Location: contenido.php') : header('Location: registrate.php');

?>
