<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Registrar Banco</title>
</head>
<body>
    <?php include "./includes/header.php"; ?>
    <div class="styleForce">
        <h2>Registrar Banco</h2>
        <form action="guardarClientes.php" method="POST" >
            <label for="fname">Nombre de banco:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">RNC:</label><br>
            <input type="text" id="lname" name="Frnc"><br>
            <br>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>

</html>