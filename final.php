<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style/styles.css"> -->
<?php 
session_start();


$especialidad= $_POST['deportes'];
$_SESSION['DEPORTES']=$especialidad;
?>

<div class="contenedor-final">
    <h1>Gracias <?php echo $_SESSION['NOMBRE']." ". $_SESSION['APELLIDO']?> por responder la encuesta</h1>
   
 </div>
