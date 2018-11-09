<html>
<head>
	<h1>Caja Registradora</h1>
	<title>Caja registradora</title>
<!--programa hecho por Ivan Guillermo Lopez Pedreañez-->
</head>
<body>
<!--Este codigo es que se lean caracteres del español-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<p style='text-align:justified;background-color:rgba(32,35,200,0.8)'>
Esta es una caja registradora.<br/><br/>
Por favor, ingrese el código del producto. Esta caja determinará el precio del producto y lo añadirá al subtotal, luego calculará el IVA del producto (15%) y dirá cuanto es el total a pagar. Si desea agregar otro producto a la cuenta, sólo escriba el código del nuevo producto y este programa le dira inmediatamente cual es el nuevo total a pagar.<br/><br/>
Si agrega un codigo que no está registrado, no se modificará ningún valor, solo se obviará el error.<br/><br/>
Si desea reiniciar la cuenta solo pulse en el botón que esta abajo y a la derecha que dice <b>"submit query"</b> debajo del texto <b>"reiniciar la cuenta"</b><br/>
</p>
<?php
// se inicializa con el codigo igual a 0
$codigo=0;		
//se hace que el codigo sea igual al introducido por el usuario y el precio igual a 0
$codigo= $_POST["codigo"];
$precio=0;

//el subtotal es inicialmente 0 pero luego es calculado y automaticamente reintroducido por la pagina y usado para llevar la cuenta luego de introducir varios productos
$subtotal=0;
$subtotal=$_POST["subtotal"];
//este array de arrays contiene una relacion entre el código de productos y sus precios
$precios=array
(
array(0001,100),array(0002,200),array(0003,300),array(0004,400),array(0005,500)
);
//determina la longitud del array de los productos. Asi se peuden agregar más producto con sus respectivos códigos y precios 
$l = count($precios);
//este for loop es un algoritmo de busqueda que relaciona el codigo del producto con su precio, usando el array $precios
for($i = 0; $i < $l ; $i++)
{
    if ($precios[$i][0]==$codigo)
      {
	$precio=$precios[$i][1];
      };
}
//si se agrega un codigo existente en $precios, entonces el valor de $precio será mayor a 0 y se ejecutara el codigo ctualizar el subtotal
if ($precio>0)
{
//se agrega el precio al subtotal
	$subtotal+= $precio; 
};
//se calcula el IVA
$IVA= $subtotal * 0.15;
//se calcula el total
$total= $subtotal + $IVA;

//este codigo imprime el codigo html que produce el input field para poner el codigo del producto

print("<div align=center>
<form action='caja_registradora.php' method='post'>
<h1>Código del Producto: <input type='text' name='codigo'><br/></h1>
El producto cuesta $precio<br/>
El subtotal es <input type='text' name='subtotal' value='$subtotal' readonly><br>
El <span style='color:blue'>IVA</span> es $IVA <br/>
<h3>El total es <span style='color:red'>$total</span> </h3>
<input type='submit'>
</form></div><br/>");

print("<div align=right><form action='caja_registradora.php' method='post'>
<input type='text' name='respuesta' value='Reiniciar la cuenta' readonly><br>
<input type='submit'>
</form></div>");

?>
</body>
<html>
