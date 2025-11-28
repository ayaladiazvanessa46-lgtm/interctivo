<html>
<head>
<meta charset="UTF-8" />
    <title>Procesar comentario</title>
    <style>
      body {
            background-color: #51e68f;
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #51e68f;
        }

        form {
            background-color: #ffffff;
            border: 2px solid #ccc;
            padding: 20px;
            width: 400px;
            margin: 30px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        #btnEnviar {
            background-color: #59d7e7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #btnEnviar:hover {
            background-color: #f0f0f0;
        }
        #btnAgre {
            background-color: #59d7e7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #btn:hover {
            background-color: rgb(225, 0, 255);
        }

    </style>
</head>
<body>

<?php

include('conexion.php');
$Nombre = $_POST['campoNombre'];
$comentario = $_POST['areaComentario'];

if (empty($Nombre) || empty($comentario)) {
    echo "Por favor, completa todos los campos.";
    exit;
}

$Nombre = mysqli_real_escape_string($conexion, $Nombre);
$comentario = mysqli_real_escape_string($conexion, $comentario);

$sql = "INSERT INTO visita (nombre, comentario) VALUES ('$Nombre', '$comentario')";

if (mysqli_query($conexion, $sql)) {
    echo "<h2>Registro recibido</h2>";
    echo "<p>Tu comentario se ha registrado correctamente:</p>";
    echo "<p>Gracias por brindar esta información. Me será de mucha ayuda para mejorar este interactivo.</p>";
} else {
    echo "Error: no se pudo realizar el registro: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

<form method="post" action="listado.php">
    <input type="submit" value="ver libro de visitas" id="btnAgre">
</form>
<form method="post" action="interactivo.html">
    <input type="submit" value="regresar al interactivo" id="btnAgre">
</form>


</body>
</html>