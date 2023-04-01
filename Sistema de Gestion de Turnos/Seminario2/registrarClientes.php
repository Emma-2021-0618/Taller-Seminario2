<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Registrar Clientes</title>
</head>
<body>
    <?php include "./includes/header.php"; ?>
    <div class="styleForce">
        <h2>Registrar clientes</h2>
        <form action="guardarClientes.php" method="POST" >
            <label for="fname">Nombre:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Apellido:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="direccion">Direccion:</label><br>
            <input type="text" id="direccion" name="direccion"><br>
            <label for="telefono">Telefono:</label><br>
            <input type="tel" id="telefono" name="telefono"><br>
            <label for="sexo">Sexo:</label><br>
            <select name="sexo" id="">
                <option value=""></option>
                <option value="M">M</option>
                <option value="F">F</option>
            </select> <br>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>

</html>