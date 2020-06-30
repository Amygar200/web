<?php
function par($numero){
    if ($numero%2==0) {
        echo "El numero es par";
    }else {
        echo "El numero es impar";
    }
}
par(4);
echo "</br></br>";
function mayor($n1,$n2){
    if ($n1>$n2){
        echo"El mayor es:".$n1;
    }elseif ($n2>$n1) {
        echo"El mayor es:".$n2;  
    }else {
        echo "Son iguales".$n1."y".$n2;
    }
}
mayor(3,4,1);
echo "</br></br>";
function cuadrado($num){
    $cua=$num*$num;
    echo "su cuadrado es: ".$cua;
}
cuadrado(2);
?>