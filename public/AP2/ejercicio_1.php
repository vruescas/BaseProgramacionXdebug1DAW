<?php
/* Programa misteriós!! */ 

$elements=[15,22,3,34];
$a=0;
$b=count($elements);

for ($i=0;$i<$b;$i++){
    $a+=$elements[$i];
}


echo 'El programa torna: '.$a;
?>