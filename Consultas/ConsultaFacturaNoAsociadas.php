<!DOCTYPE html>
<html lang="en">

<head>
    <!--Configuraciones básicas-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie = edge">

    <!--Librerías de boostraps-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!--Título de la pestaña-->
    <title> Consulta Facturas No Asociadas </title>

    <!--Título de la página-->
    <header class="alert alert-info"> <h1> Casa de Cambios UnalMed </h1></header>
</head>

<body>
    <!--Barra de navegación-->
    <ul class="nav">
        <li class="nav-item" >
            <a class="nav-link border rounded bg-info text-white" href="../Index.html"> Inicio </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border rounded bg-info text-white" href="../Clientes/Clientes.php"> Clientes </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border rounded bg-info text-white" href="../Empresas/Empresas.php"> Empresas </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border rounded bg-info text-white" href="../Facturas/FacturasMain.php"> Facturas </a>
        </li>
        <li class="nav-pills">
            <a class="nav-link border rounded bg-dark active" href="Consultas.php"> Consultas </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border rounded bg-info text-white" href="../Busquedas/Busquedas.php"> Busquedas </a>
        </li>
    </ul>

    <br>
    <div class="col-12 px-4">
    <div class="col py-1 bg-dark text-white text-center">
        <h3> Facturas sin Titular </h3>
    </div>
        <table class="table-sm table-bordered border-rounded table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center"> Código </th>
                    <th scope="col" class="text-center"> Monto de compra </th>
                    <th scope="col" class="text-center"> Monto de venta </th>
                    <th scope="col" class="text-center"> Tipo de factura </th>
                    <th scope="col" class="text-center"> Fecha </th>
                    <th scope="col" class="text-center"> Hora </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require('Select_ConsultaFacturaNoAsociadas.php');
                    if ($result){
                        foreach ($result as $fila){
                ?>
                <tr>
                    <td class="text-center" style="width: 300px;"><?=$fila['codigo'];?></td>
                    <td class="text-center" style="width: 300px;"><?=$fila['montocompra'];?></td>
                    <td class="text-center" style="width: 300px;"><?=$fila['montoventa'];?></td>
                    <td class="text-center" style="width: 250px;"><?=$fila['tipofac'];?></td>
                    <td class="text-center" style="width: 250px;"><?=$fila['fecha'];?></td>
                    <td class="text-center" style="width: 250px;"><?=$fila['hora'];?></td>
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
