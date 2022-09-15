<?php

$var1 = 2;
$var2 = 4;

if(($var1 + $var2) > ($var1 * $var2)){
    echo "La suma es mayor que el producto";
}elseif(($var1 + $var2) < ($var1 * $var2)){
    echo "El producto es mayor que la suma";
}else{
    echo "Son iguales";
}
?>