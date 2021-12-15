<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="UTF-8">
  <title>Galería</title>
  <link rel="stylesheet" href="css/estiloindexprincipal.css">
  <script type="text/javascript">
  	function carrito_compras(){
  		window.location="carritocompra.php";
  	}
  </script>
</head>
<body background="img/fondo.jpg ">

	<ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown">
	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="../controlador/accion/act_logout.php">Cerrar sesion</a>
				<a class="dropdown-item" href="../controlador/accion/darse_baja.php"></a>
			</div>
			</li>
		
        </ul>
  
  <div class="container">
  <div class="item">
      <img src="img/imagen1.jpg" alt=""  class="item-img">
      <div class="item-text">
        <h3>DON QUIJOTE DE LA MANCHA</h3>
        <p>$20.000</p>
        <a href="carritocompra.php">Agregar Al Carrito De Compras</a>
        
      </div>
     
    </div>
    <div class="item">
      <img src="img/imagen2.png" alt="" class="item-img">
      <div class="item-text">
        <h3>CRIMEN Y CASTIGO</h3>
        <p>$56.000</p>
        <a href="carritocompra.php">Agregar Al Carrito De Compras</a>
      </div>
    </div>
    
    <div class="item">
      <img src="img/imagen3.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>LOS VIAJES DE GULLIVER</h3>
        <p>$30.000</p>
        <a href="carritocompra.php">Agregar Al Carrito De Compras</a>
      </div>
    </div>
    
    <div class="item">
      <img src="img/imagen4.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>EL CENTRO DEL NIÑO REY</h3>
        <p>$20.000</p>
        <a href="carritocompra.php">Agregar Al Carrito De Compras</a>
      </div>
    </div>
    
    
    <div class="item">
      <img src="img/imagen6.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>CIEN AÑOS DE SOLEDAD</h3>
        <p>$25.000</p>
        <a href="carritocompra.php">Agregar Al Carrito De Compras</a>
      </div>
    </div>
    
    <div class="item">
      <img src="img/imagen5.jpg" alt="" class="item-img">
      <div class="item-text">
        <h3>EL CÓDIDO DA VINCI</h3>
        <p>$70.000</p>
        <a href="carritocompra.php">Agregar Al Carrito De Compras</a>
      </div>
    </div>
  </div>
  
</body>
</html>