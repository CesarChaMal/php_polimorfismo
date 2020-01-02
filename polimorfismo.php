<?php
/*
Es un ejemplo extremadamante simple, claro está, pero permite apreciar el modo en que las referencias operan como es de esperarse. También es una muestra de la simplicidad proveniente de los tipos de datos (o la falta misma de éstos) en PHP.

Este mismo ejemplo en lenguajes como C++ requeriría que la función calcular_area() recibiera una referencia a un objeto del tipo de la clase padre, y se necesitaría del uso de funciones virtuales, un requerimiento inexistente en lenguajes como PHP, por ejemplo.
*/

class Figura
{
    function area()
    { return 'Calculo del area de una figura cualquiera'; }
    
}


class Rectangulo extends Figura
{
    function area()
    { return 'Calculo del area de un rectangulo'; }
}

class Circulo extends Figura
{
    function area()
    { return 'Calculo del area de un circulo'; }
}

class Triangulo extends Figura
{
    // Notese que esta clase no redefine la funcion area()
}


function calcular_area ($obj)
{
    return $obj->area ();
}


$f = new Figura;
$r = new Rectangulo;
$c = new Circulo;
$t = new Triangulo;

echo calcular_area ($f) . ' - ' .
     calcular_area ($r) . ' - ' .
     calcular_area ($c) . ' - ' .
     calcular_area ($t);

?>