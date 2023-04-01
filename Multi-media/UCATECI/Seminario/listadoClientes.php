<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/table.css">
    <title>Listado de clientes</title>
</head>
<body>
    <?php include "./includes/header.php"; ?>
    <?php include "./db/generarClientes.php"?>
    <div >
    <h2>Lista de clientes</h2>
    <table>
        <tr>
            <th> Nombre: </th>
            <th> Apellido: </th>
            <th> Direccion: </th>
            <th> Telefono: </th>
            <th> Sexo </th>
        </tr>
        <?php while ($clientes = mysqli_fetch_array($selectClientes)) { ?>
            <tr>
                <td><?= $clientes['nombres'];   ?> </td>
                <td><?= $clientes['apellidos']; ?></td>
                <td><?= $clientes['direccion']; ?></td>
                <td><?= $clientes['telefono'];  ?></td>
                <td><?= $clientes['sexo'];?></td>
            </tr>  
        <?php } ?>
        </tr>
    </table>
    </div>
</body>

</html>