<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilos.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
</head>
<body>
<?php 

require('../dao/DaoEmpleadoImpl.php');
$dao=new DaoEmpleadoImpl();
$Empleado=$dao->listar();
require('../vista/indexlistarEmpl.php');
?>    
</body>
</html>

