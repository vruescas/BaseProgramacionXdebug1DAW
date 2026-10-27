<?php
// Factorial d'un nombre amb for

$nombre = 5;
$factorial = 1;

/* Amb bucle for
for($i=$nombre;$i>1;$i--){
    $factorial = $factorial*$i;
}
*/

/* Amb bucle while */

if ($nombre >= 0) {
    $i = $nombre;
    while ($i > 1) {
        $factorial = $factorial * $i;
        $i = $i - 1; // $i--;
    }
    echo 'El factorial de ' . $nombre . ' es:' . $factorial;
} else {
    echo 'no valen nombres negatius';
}