<?php
include "conexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 
    <style>
        a:hover{
            background-color: rgba(107, 116, 121, 0.664);
            color: black;
        }
    </style>
    <title>Document</title>
</head>

<body>
   <div>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="radar.png" alt="" width="50" height="35" class="d-inline-block align-top">
        Radar Custom&Logistics  
      </a>
      <a class="nav-link" href="computadora.php">Computadora</a>
            <a class="nav-link" href="monitor.php">Monitor</a>
            <a class="nav-link" href="ups.php">UPS</a>
            <a class="nav-link" href="telefono.php">Telefono</a>
            <a class="nav-link" href="router.php">Router</a>
            <a class="nav-link" href="impresora.php">Impresora</a>
     
    </div>
    </nav>
    </div>
    <br><br>
    
    <div class="container">
    <div>
        <h2>Inventario de UPS <button type="button" class="btn btn-success">Agregar</button> </h2>
    </div>
        <table class="table table-bordered">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">No. Serie</th>
                <th scope="col">Estado</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
            
            </tbody>
          </table>
          
         
    </div>
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>