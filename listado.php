<html>
<head>
    <meta charset="UTF-8"/>
    <title>Tabla</title>
    <style>
        #tabla th, #tabla td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        #tabla {
            width: 100%;
            border-collapse: collapse;
        }
  body {
            background-color: #51e68f;
            font-family: Arial, sans-serif;
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

$resultado = mysqli_query($conexion, "SELECT id, nombre, comentario FROM visita");

if (!$resultado) {
    echo "Error en la consulta: " . mysqli_error($conexion);
    exit;
}
?>

<table id="tabla">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Comentario</th>
    </tr>

    <?php
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['comentario'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>

<?php
mysqli_close($conexion);
?>
<br>
<center>
<form method="post" action="interactivo.html">
    <input type="submit" value="regresar al interactivo" id="btnAgre">
</form>
    </center>
</body>
</html>