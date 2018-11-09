<html>
<head>
<h1 align=center>SUMA DE DOS NUMEROS</h1>
<title>Suma de 2 números</title>
</head>
<body style='background: url("https://numerosnaturalesguays.files.wordpress.com/2012/05/numeros4.jpg") no-repeat center center;'>
<!--Este codigo es que se lean caracteres del español-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<br>
<div style='background-color:rgba(250,250,250,0.5);'>
<p><h3>Este programa realiza la suma de dos números introducidos por el usuario y escribe el resultado</h3></p>
<p>A continuación, por favor, introduzca los dos números cuya suma desea calcular</p>
</div>
<?php
$num1=0;
$num2=0;
$num1= $_POST["num1"];
$num2= $_POST["num2"];
$suma= $num1 + $num2;
print("<div align=center style='font-size:30px;font-family:helvetica;background-color:rgba(200,14,78,0.75);'>LA SUMA DE $num1 y $num2 es: $suma</div><br/>");

print('<div align=center><form action="suma_2.php" method="post">
<h5>Primer Número:</h5> <input type="text" name="num1"><br/>
<h5>Segundo Número:</h5>  <input type="text" name="num2"><br/><br/>
<input type="submit"></form>
</div>');

?>
</body>
</html> 
