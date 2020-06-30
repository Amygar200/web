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
function mayor($n1,$n2,$n3){
    if (($n1>$n2)and($n1>$n3)){
        echo"El mayor es:".$n1;
    }elseif (($n2>$n1)and($n2>$n3)) {
        echo"El mayor es:".$n2;
    }elseif ($n3>$n1)and($n3>$n2) {
        echo"El mayor es:".$n3;   
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