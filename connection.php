<?php

$conex = mysqli_connect("10.1.0.6:3306/mv1", "dani", "dani","mv1") or die('Could not connect the database : Username or password incorrect');
echo("Conexion Exitosa");
// $conex = mysqli_connect("cloudmv.centralus.cloudapp.azure.com:3306", "dani", "dani","mv1");
// $conex = mysqli_connect("localhost", "root", "","alumnos");

?>