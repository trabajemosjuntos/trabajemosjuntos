<?php
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$post = $_POST['TipoPost'];
?>
<!DOCTYPE HTML>
<html lang="en-us">
    <head>
            <title>formulario 1</title>
            <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <meta name="description" content="Outsourcing de diseño digital, departamento de diseño, Diseño por Hora, Diseño gráfico CDMX">
            <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" href="css/large.css">

    </head>
    <body>
        <header>
            <H1>Prueba de PHP envio de formulario 2</H1>
        </header>
        <nav></nav>
        <main>
            <form action="paso3.php" method="POST">
                <label for="">Texto del Post:</label>
                <input type="text" name="Copy">
                <label for="">Medidas del post:</label>
                <select name="TipoPost" id="">
                    <option value="1200x627">1200x627</option>
                    <option value="1080x1080">1080x1080</option>
                    <option value="800x400">800x400</option
                </select>
                <input id="button" type="submit" value=paso3"> 
            </form>
        </main>
        <footer></footer>
    </body>
</html>
