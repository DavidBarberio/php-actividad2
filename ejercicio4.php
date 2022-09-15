<?php

$var1 = 4;
$var2 = 2;
$var3 = 1;

if($var1 > $var2 && $var1 > $var3){
    echo "La primera variable es la mayor";
    
}elseif($var2 > $var1 && $var2 > $var3){
    echo "La segunda variable es la mayor";
    
}else{
    echo "La tercera variable es la mayor";
}

?>