<?php
// ejercicios 1 declare un entero,n, calcular la suma de los nprimeo  numeros impares
echo "calcular la suma de los n primeo  numeros impares";
echo "<br>";
$np=0;
$suma=0;
for($f=1; $f<=10; $f++){
    if ($f%2<>0) {
        $np=($suma+$f);
        $suma=$np;
        echo $f;
    }
}
echo "<br><br>";
echo "La suma de los impares es:"; 
echo $np; 
echo "<br><br>";
//ejercicio 2 declarar 3 numeros ordenar de mayor a menor
$num1=6;
$num2=4;
$num3=9;
echo "los numeros ingresados son:" .$num1.$num2.$num3."<br>";
echo "<br>";
echo "numeros ordenados de mayor a menor";
echo "<br>";
if(($num1>$num2)and($num2>$num3)and($num1>$num3))
{
print $num1."<br>".$num2."<br>".$num3."<br>";
}
elseif(($num3>$num2)and($num2>$num1)and($num3>$num1))
{
print $num3."<br>".$num2."<br>".$num1."<br>";
}
elseif(($num2>$num1)and($num1>$num3)and($num2>$num3))
{
print $num2."<br>".$num1."<br>".$num3."<br>";
}
elseif(($num3>$num1)and($num1>$num2)and($num3>$num2))
{
print $num3."<br>".$num1."<br>".$num2."<br>";
}

echo "<br><br>";
// ejercicio 3 declarar un numero entre 0  y 9.999 cantidad de cifras
$cant=3140;
$n=0;
echo "el numero ingresado es:" .$cant."<br>";
do{
    $cant= floor($cant /10);
    $n=$n+1;
}while($cant > 0);
echo "El numero tiene"  . $n . "digitos";
echo "<br><br>";
//Ejercicio 4 Imprimir 15 primeros numeros y escribir suma
echo "primeros 15 numeros". "<br>";
$x=1;
$sum=0;
$a=0;
while ($x< 16) {
    $a=($sum+$x);
    $sum=$a;
    echo $x."<br>";
    $x++;
}
echo "<br>";
echo "La suma total es:" .$a;
?>