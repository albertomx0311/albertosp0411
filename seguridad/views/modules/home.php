<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        section {
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<section>
    <h2>¡Bienvenido!</h2>
    <p>Este es el texto de relleno para tu página de inicio. Puedes editar este contenido como desees para adaptarlo a tu sitio web.</p>
    <p>Agrega más secciones, enlaces o cualquier otro elemento que necesites.</p>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
