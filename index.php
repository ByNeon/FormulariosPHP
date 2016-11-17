<!DOCTYPE html>
<!--
Formulario mas completo
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="datos.php" method="POST">
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Edas: <input type="number" name="edad"></p>
            <p>Ciudad: <select name="ciudad">
                <option>Barcelona</option>
                <option>Girona</option>
                <option>Lleida</option>
                <option>Tarragona</option>
            </select></p>
            <p>Sexo: </p>
            <p>Hombre: <input type="radio" name="sexo" value="hombre">
            Mujer: <input type="radio" name="sexo" value="mujeer"></p>
            <p><input type="submit" name="enviar" value="Enviar Datos"></p>
        </form>
    </body>
</html>
