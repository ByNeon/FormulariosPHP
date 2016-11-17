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
            Nombre: <input type="text" name="nombre">
            Edas: <input type="number" name="edad">
            Ciudad: <select name="ciudad">
                <option>Barcelona</option>
                <option>Girona</option>
                <option>Lleida</option>
                <option>Tarragona</option>
            </select>
            Sexo: 
            Hombre: <input type="radio" name="sexo" value="hombre">
            Mujer: <input type="radio" name="sexo" value="mujeer">
            <input type="submit" name="enviar" value="Enviar Datos">
        </form>
    </body>
</html>
