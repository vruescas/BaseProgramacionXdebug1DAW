<?php
/* Programa misteriós i extrany!! */ 


$limit=5;

function rara($n){
    
if ($n < 0) {
        return "Error: el nombre ha de ser positiu.";
    } elseif ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * rara($n - 1);
    } 
}

$resultat = rara($limit);

echo 'El programa torna: '.$resultat;
?>