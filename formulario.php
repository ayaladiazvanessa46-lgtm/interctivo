<!DOCTYPE html>
<html>
<head>
    <title>comentario</title>
     <style>
        body {
            background-color: #51e68f;
            font-family: Arial, sans-serif;
        }

        h3, h4 {
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

        p {
            margin-bottom: 15px;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #btnEnviar {
            background-color: #2a52be;
            color:#59d7e7;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #btnEnviar:hover {
            background-color: #1d3b8a;
        }
    </style>
</head>
<body>
    <form method="post" action="procesar.php">
        <h3>Que te parecio el interactivo, porfavor deja un comentario:</h3>
        <p>Nombre: <input name="campoNombre" type="text"/></p>
   <p>Comentario: <textarea name="areaComentario"></textarea></p>
        <p><input id="btnEnviar" type="submit" value="Enviar"></p>
</form>
</body>
</html>