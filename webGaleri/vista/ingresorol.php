<!DOCTYPE html>
<html>
<head>
	meta charset="utf-8">
	<title>Ingreso Al Menu</title>
	<link rel="icon" type="image/png" href="img/icono.png">
	<link rel="stylesheet" type="text/css" href="css/estiloingreso.css">
	<script type="text/javascript">
		function login_administrador(){
			window.location="loginadministrador.php"
		}

		function login_cliente(){
			window.location="logincliente.php";
		}

		function login_empleado(){
			window.location="loginempleado.php";
		} 
		function pagina_anonimo(){
			window.location="indexanonimo.php";
		}
	</script>
</head>
<body background="imagenes/fondo.jpg">
	<form >
	<a class="b1" href="#" onclick="login_administrador()">ADIMINISTRADOR</a><br>
	<a class="b2" href="#" onclick="login_cliente()">ARTISTA</a><br>
	<a class="b3" href="#" onclick="login_empleado()">COMPRADOR</a><br>
	<a class="b4" href="#" onclick="pagina_anonimo()">PAGINA PRINCIPAL</a>
	
</form>

</body>
</html>