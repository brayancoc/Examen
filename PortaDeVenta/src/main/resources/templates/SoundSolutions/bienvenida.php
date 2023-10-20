<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
     
    <title>SoundSolutions</title>
</head>
<body>
<?php include 'navbar.php';?>

<h1><div id="resultado"></div></h1>

<script type="text/javascript">

const nombre = localStorage.getItem('nombre');
console.log(nombre);


const divnombreempleado= document.getElementById('resultado');

      divnombreempleado.textContent=`Bienvenido, ${nombre}!`;

</script>






<style>
  
      .contenedor {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh; /* Ajusta la altura como desees */
        }
</style>
<div class="contenedor">

  
  <img src="iconos/calculator-monochromatic.svg" width="600px" class="rounded" alt="...">
  </div>
</body>
</html>