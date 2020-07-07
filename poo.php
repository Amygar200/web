<?php
#Ejercicio 1.- Cree una clase Arbol con métodos: crecer(), crearHojas() y fotosintesis(). 
#También debe tener los atributos cantidadHojas, tipo, antigüedad, altura.. 
#Cree un objeto en base a este y pruebe los atributos mostrando sus valores y ejecutando sus métodos.
echo "Arbol:";
echo "</br></br>";
class Arbol{
    public $cantidadHojas;
    public $tipo;
    public $antigüedad;
    public $altura;
    function crecer(){
        echo "estoy creciendo";
    }
    function crearHojas(){
        echo " Estoy creando hojas";
    }
    function fotosintesis(){
        echo "Empezando hacer la fotosintesis";
    }
}
$a=new Arbol();
$a->cantidadHojas=100;
echo "Tengo:".$a->cantidadHojas." hojas";
echo "</br></br>";
$a->tipo="soy un Sauce Blanco";
echo $a->tipo;
echo "</br></br>";
$a->antigüedad="10 años";
echo $a->antigüedad;
echo "</br></br>";
$a->altura="15 m";
echo $a->altura;
echo "</br></br>";
$a->crecer();
echo "</br></br>";
$a->fotosintesis();
echo "</br></br>";
$a->crearHojas();
echo "</br></br>";

#Ejercicio 2.- Cree una clase Humano con métodos: hablar(), correr() y comer() que emitan mensajes. 
#También debe tener los atributos altura, genero, edad, carácter.. 
#Cree un objeto en base a este y pruebe los atributos asignándoles valores y ejecutando sus métodos.
echo "Humano:";
echo "</br></br>";
class Humano{
    public $altura="1.75 m";
    public $genero="Masculino";
    public $edad="20 años";
    public $carácter="Deportista";
    public function hablar(){
        echo "hola";
    }
    public function correr(){
        echo "Estoy corriendo";
    }
    public function comer(){
        echo "estoy comiendo";
    }
}
$b=new Humano();
echo $b->altura;
echo "</br></br>";
echo $b->genero;
echo "</br></br>";
echo $b->edad;
echo "</br></br>";
echo $b->carácter;
echo "</br></br>";
$b->hablar();
echo "</br></br>";
$b->correr();
echo "</br></br>";
$b->comer();
?>