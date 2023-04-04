<?php
/* Un string que no contiene el delimitador simplemente devolverá un array de un elemento con el string original. */
$input1 = "hello";
$input2 = "hello,there";
var_dump( explode( ',', $input1 ) );
var_dump( explode( ',', $input2 ) );

?>