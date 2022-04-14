<?php

/*$conection= mysqli_connect("localhost", "root", "", "sistemaimobiliario");

*/
// conexão com PDO
$dsn="mysql:host=localhost; dbname=sistemaimobiliario; charset=utf8";
$username="root";
$password="";
$conection= new PDO( $dsn, "root", ""); //conexão
$conection-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//em caso de uma query inválida ser fornecida ele apresenta uma excepção
$conection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


?>