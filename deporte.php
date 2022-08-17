
<?php
session_start();
$nombre= $_POST['nombre'];
$_SESSION['NOMBRE']=$nombre; 
$apellido= $_POST['apellido'];
$_SESSION['APELLIDO']=$apellido; 
$email=$_POST['email'];
$_SESSION['email']=$email;


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
   
 <form action= "final.php" method="post" class="form" >
        <label class="label-select" > Que deporte practica?</label>
        <select name= "deportes" class="select">
        <option class="select-option">Voley</option>
        <option>Tenis</option>
        <option>Rugby</option>
        <option>Futbol</option>
      
        </select>
        <input type="submit" class="btn-submit" value="Finalizar">
</body>
</html>
 