<html>
<head> 
<style>
	h1{text-align:center; color:#5f46F2; position:fixed; font-size:56px; background-color:rgba(22,22,210,0.2)}
	p{background-color:rgba(32,32,200,0.3); text-align:justified; font-size:36px;}
	form{text-align:center;}
	b{font-size:45px;}
	li{background-color:rgba(1,1,1,0.7); display:inline;font-size:44px; font-family:Verdana; color:White;>
	spam{color:rgba(200,50,20,0);}
</style>
<h1></br>C</br>A</br>J</br>E</br>R</br>O</br></br></br></h1>
</head>
<!--Este codigo es que se lean caracteres del español-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
//se inicilizan las variable, en este caso los billetes a repartir
$BC=0; $BV=0; $BD=0; $BC2=0; $BM=0;
//se introduce la cantidad a repartir con los billetes
$C=0;
$C= $_POST["Cantidad"];
$N=$C;
if ($N>=1000)
{
//se cuentan cuantos billetes de 50000 se necesitan
	while ($C>=50000){
		$BC +=1;
		$C -=50000;};
//se cuentan cuantos billetes de 20000 se necesitan
	while ($C>=20000){
		$BV +=1;
		$C -=20000;};
//se cuentan cuantos billetes de 10000 se necesitan
	while ($C>=10000){
		$BD +=1;
		$C -=10000;};
//se cuentan cuantos billetes de 5000 se necesitan
	while ($C>=5000){
		$BC2 +=1;
		$C -=5000;};
//se cuentan cuantos billetes de 1000 se necesitan
	while ($C>=1000){
		$BM +=1;
		$C -=1000;};
}
//se calcula el resto que no puede ser repartido con los billetes disponibles
$resto=$C;
/*mensaje para saber cuantos billetes y de que tipo se usaran para repartir la cantidad*/
print('
<body>
	<p style="position:fixed; 
			  margin:50px;
			  font-size:62; 
			  text-align:right;
              background-color:rgba(200,50,20,0.1);
              color:rgba(12,12,12,0.1)">
	<spam style="color:rgba(200,50,20,0);top-padding:10px;">.  .</spam>
	Este es un calculador de billetes
	</p>
	</br></br></br></br></br></br>

<div style="margin:50px;">
	<p>
	Introduzca la cantidad que desea obtener y este calculador le dirá la mínima cantidad de billetes de<br/> <b style="text-align:center"> 50000, 20000, 10000, 50000</b> y <b>1000</b><br>
	que necesitará para obtenerla, más cuanto queda de resto en la operación<br>
	</p>
</div>
');
print ("<div align=center><h3>La cantidad de $N se debe repartir son:</h3></div><br/><div align=center style='font-size:26px'>$BC billetes de 50000 <br/> $BV billetes de 20000<br/> $BD billetes de 10000<br/> $BC2 billetes de 5000<br/> y $BM billetes de 1000<br/> quedando un resto de $resto<br/></div><br/>");
//codigo html del sumbit
print('<form action="cajero_2.php" method="post">Cantidad:<input type="text" name="Cantidad"><br>
<input type="submit"></form>');
?>
Programa realizado por: Ivan Guillermo Lopez Pedreañez<br/>
C.I: 20.4660.720

</body>
</html> 
