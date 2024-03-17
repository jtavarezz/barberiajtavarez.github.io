<?php
$c = mysqli_connect("localhost","root","","citasbarberia");

$n = $_POST['Nombre']
$a= $_POST['Telefono']
$b = $_POST['Direccion']
$g = $_POST['Correo']

mysqli_query ($c, "INSERT INTO datos VALUES('','$n','$a','$b','$g')");

echo("Su registro fue enviado")