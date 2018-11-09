<html>
<head>
<title>Calcular Promedio de Notas</title>
<h1>Promedio de Notas</h1>
</head>
<body>
<div style="background-color:firebrick;font-family:Verdana;font-size:20px;text-align:justified;">Este es un programa que calcula el promedio de las notas introducidas<br/>
Primero se introducen el numero de notas de las cuales se quieres saber el promedio, luego el programa lee las notas, las suma y divide la suma resultante entre la cantidad de notas totales<br/>
</div>

<?php
$notas=array(0);
for($i=0;$i<=9;$i++)
{$notas[$i]=$_POST["nota$i"];};

$p1="<div align=center><form action='prom_notas.php' method='post'>Introduzca las notas a calcular el promedio:<br/>
NOTA#1:<input type='text' name='nota1' value='$notas[1]'><br/><input type='submit'><div>";
$p2="<div align=center><form action='prom_notas.php' method='post'>Introduzca las notas a calcular el promedio:<br/>
NOTA#1:<input type='text' name='nota1' value='$notas[1]' readonly><br/>
NOTA#2:<input type='text' name='nota2' value='$notas[2]'><br/>
<input type='submit'><div>";
$p3="<div align=center><form action='prom_notas.php' method='post'>Introduzca las notas a calcular el promedio:<br/>
NOTA#1:<input type='text' name='nota1' value='$notas[1]' readonly><br/>
NOTA#2:<input type='text' name='nota2' value='$notas[2]' readonly><br/>
NOTA#3:<input type='text' name='nota3' value='$notas[3]'><br/>
<input type='submit'><div>";
$p4="<div align=center><form action='prom_notas.php' method='post'>Introduzca las notas a calcular el promedio:<br/>
NOTA#1:<input type='text' name='nota1' value='$notas[1]' readonly><br/>
NOTA#2:<input type='text' name='nota2' value='$notas[2]' readonly><br/>
NOTA#3:<input type='text' name='nota3' value='$notas[3]' readonly><br/>
NOTA#4:<input type='text' name='nota4' value='$notas[4]'><br/>
<input type='submit'><div>";
$p5="<div align=center><form action='prom_notas.php' method='post'>Introduzca las notas a calcular el promedio:<br/>
NOTA#1:<input type='text' name='nota1' value='$notas[1]' readonly><br/>
NOTA#2:<input type='text' name='nota2' value='$notas[2]' readonly><br/>
NOTA#3:<input type='text' name='nota3' value='$notas[3]' readonly><br/>
NOTA#4:<input type='text' name='nota4' value='$notas[4]' readonly><br/>
NOTA#5:<input type='text' name='nota5' value='$notas[5]'><br/>
<input type='submit'><div>";
$p6="<div align=center><form action='prom_notas.php' method='post'>Introduzca las notas a calcular el promedio:<br/>
NOTA#1:<input type='text' name='nota1' value='$notas[1]' readonly><br/>
NOTA#2:<input type='text' name='nota2' value='$notas[2]' readonly><br/>
NOTA#3:<input type='text' name='nota3' value='$notas[3]' readonly><br/>
NOTA#4:<input type='text' name='nota4' value='$notas[4]' readonly><br/>
NOTA#5:<input type='text' name='nota5' value='$notas[5]' readonly><br/>
NOTA#6:<input type='text' name='nota6' value='$notas[6]'><br/>
<input type='submit'><div>";
$p7="<div align=center><form action='prom_notas.php' method='post'>Introduzca las notas a calcular el promedio:<br/>
NOTA#1:<input type='text' name='nota1' value='$notas[1]' readonly><br/>
NOTA#2:<input type='text' name='nota2' value='$notas[2]' readonly><br/>
NOTA#3:<input type='text' name='nota3' value='$notas[3]' readonly><br/>
NOTA#4:<input type='text' name='nota4' value='$notas[4]' readonly><br/>
NOTA#5:<input type='text' name='nota5' value='$notas[5]' readonly><br/>
NOTA#6:<input type='text' name='nota6' value='$notas[6]' readonly><br/>
NOTA#7:<input type='text' name='nota7' value='$notas[7]'><br/>
<input type='submit'><div>";
$p8="<div align=center><form action='prom_notas.php' method='post'>Introduzca las notas a calcular el promedio:<br/>
NOTA#1:<input type='text' name='nota1' value='$notas[1]' readonly><br/>
NOTA#2:<input type='text' name='nota2' value='$notas[2]' readonly><br/>
NOTA#3:<input type='text' name='nota3' value='$notas[3]' readonly><br/>
NOTA#4:<input type='text' name='nota4' value='$notas[4]' readonly><br/>
NOTA#5:<input type='text' name='nota5' value='$notas[5]' readonly><br/>
NOTA#6:<input type='text' name='nota6' value='$notas[6]' readonly><br/>
NOTA#7:<input type='text' name='nota7' value='$notas[7]' readonly><br/>
NOTA#8:<input type='text' name='nota8' value='$notas[8]'><br/>
<input type='submit'><div>";
$p9="<div align=center><form action='prom_notas.php' method='post'>Introduzca las notas a calcular el promedio:<br/>
NOTA#1:<input type='text' name='nota1' value='$notas[1]' readonly><br/>
NOTA#2:<input type='text' name='nota2' value='$notas[2]' readonly><br/>
NOTA#3:<input type='text' name='nota3' value='$notas[3]' readonly><br/>
NOTA#4:<input type='text' name='nota4' value='$notas[4]' readonly><br/>
NOTA#5:<input type='text' name='nota5' value='$notas[5]' readonly><br/>
NOTA#6:<input type='text' name='nota6' value='$notas[6]' readonly><br/>
NOTA#7:<input type='text' name='nota7' value='$notas[7]' readonly><br/>
NOTA#8:<input type='text' name='nota8' value='$notas[8]' readonly><br/>
<input type='submit'><div>";
if($notas[8]>0){print($p9);$cuenta=9;}
elseif($notas[7]>0){print($p8);$cuenta=8;}
elseif($notas[6]>0){print($p7);$cuenta=7;}
elseif($notas[5]>0){print($p6);$cuenta=6;}
elseif($notas[4]>0){print($p5);$cuenta=5;}
elseif($notas[3]>0){print($p4);$cuenta=4;}
elseif($notas[2]>0){print($p3);$cuenta=3;}
elseif($notas[1]>0){print($p2);$cuenta=2;}
elseif($notas[0]==0){print($p1);$cuenta=1;};
$suma=0;
for($i=0; $i<$cuenta; $i++)
{
	$suma+=$notas[$i];
}
$prom=$suma/($cuenta-1);
print("<br/><div align=center><h2>El promedio de notas es <span style='color:blue;'>$prom</span></h2></div><br/>");

?>
</body>
</html>
