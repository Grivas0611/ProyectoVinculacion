<?php



//variables
$host = "localhost";  //si no esta en mi maq apuntar al ip del servidor
$usuario = "root";
$clave = "";
$bdd = "softwarehorarios";

$cnx = mysqli_connect($host, $usuario, $clave);

if ($cnx) {
    $link = mysqli_select_db($cnx, $bdd);
    if ($link) {
       // echo "<h1>Conexion Exitosa!!</h1>";
    } else {
        echo "<h1>Sin Conexion con la bdd: Software Horarios</h1>";
    }
} else {
    echo "<h1>Conexion Fallida con el Motor de BDD</h1>";
}

