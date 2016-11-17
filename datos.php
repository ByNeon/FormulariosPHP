<?php
$name = $_POST['nombre'];
$age = $_POST['edad'];
$city = $_POST['ciudad'];
$sex = $_POST['sexo'];

echo "<p>Datos del usuario registrado en el formulario</p>";
echo "<p>Nombre: $name</p> <p>Edad: $age</p> <p>Ciudad: $city</p> <p>Sexo: $sex</p>";
?>